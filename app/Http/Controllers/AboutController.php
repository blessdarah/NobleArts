<?php

namespace App\Http\Controllers;

use App\Models\AboutSection;
use App\Models\TeamMember;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(): View
    {
        return view('about.index')->with([
            'sections' => AboutSection::all()
        ]);
    }

    public function team(Request $request): View
    {
        $type = $request->query('type');
        return view('about.team')->with([
            'members' => TeamMember::where('type', $type)->get()
        ]);
    }
}
