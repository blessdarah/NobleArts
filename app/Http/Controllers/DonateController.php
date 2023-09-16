<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Stripe\StripeClient;

class DonateController extends Controller
{
    public function index()
    {
        return view('donate');
    }

    public function stripeDonation(Request $request)
    {
        $baseUrl = 'https://api.stripe.com';
        // $cardInfo = $request->validate([
        //     'number' => 'string',
        //     'exp_month' => 'required|numeric',
        //     'exp_year' => 'required|numeric',
        //     'cvc' => 'required|string'
        // ]);

        $cardInfo = [
            'number' => '4242424242424242',
            'exp_month' => 2,
            'exp_year' => 2024,
            'cvc' => '314',
        ];

        $stripe = new StripeClient(config('services.stripe.secret_key'));

        $token = $stripe->tokens->create([
             "card" => $cardInfo
         ]);

        $charge = $stripe->charges->create([
            'amount' => 2000,
            'currency' => 'usd',
            'source' => $token['id'],
            'description' => 'first transaction',
        ]);

        if ($charge['status'] == 'succeeded') {
            dd("success");
        }

        dd($charge);

        return null;
    }

    public function momoDonation(Request $request)
    {
        // $url = "https://live.fapshi.com/";
        $url = "https://sandbox.fapshi.com/";

        $data = $request->validate([
            'amount' => 'required|numeric',
            'phone' => 'required|string',
            'email' => 'string|email',
            'message' => 'required|string'
        ]);

        $data['amount'] = (int)$data['amount'];
        // dd($data);
        $headers= [
            'apiuser' => config('services.fapshi.apiuser'),
            'apikey' => config('services.fapshi.apikey')
        ];


        $response = Http::acceptJson()->withHeaders($headers)->post($url . 'direct-pay', $data);
        // dd($response);
        if ($response->successful()) {
            $data['transId'] = $response['transId'];
            // store donation info in database
            $statusUrl = $url . 'payment-status/' . $data['transId'];
            $res = Http::acceptJson()->withHeaders($headers)->get($statusUrl);

            if ($res->successful()) {
                $feedback = $res->json();
                $donation = DonateController::initData($feedback);
                Donation::create($donation);
                return redirect()->route("pages.donate");
            } else {
                echo "verification error " . $res->clientError();
            }
        } else {
            echo "request error " . $response->clientError();
        }
    }

    public function momoWebhook(Request $request)
    {
        $feedback = $request->all();
        $newDonation = DonateController::initData($feedback);
        $oldDonation = Donation::where('transId', $newDonation['transId'])->first();
        $oldDonation->update($newDonation);
    }

    private static function initData($feedback): array
    {
        $donation = [
            'transId' => $feedback['transId'],
            'status' => $feedback['status'],
            'medium' => $feedback['medium'] ?? "momo",
            'service_name' => $feedback['serviceName'],
            'amount' => $feedback['amount'],
            'revenue' => $feedback['revenue'] ?? 0,
            'email' => $feedback['email'],
            'financial_trans_id' => $feedback['financialTransId'] ?? "",
            'initiated_on' => $feedback['dateInitiated'],
            'confirmed_on' => $feedback['dateConfirmed']
        ];
        return $donation;
    }
}
