<?php

namespace App\Http\Controllers;

use App\Mail\ContactUsMail;
use App\Models\AboutSection;
use App\Models\Banner;
use App\Models\Event;
use App\Models\Faq;
use App\Models\Partner;
use App\Models\Post;
use App\Models\Project;
use App\Models\Service;
use App\Models\TeamMember;
use App\Models\Update;
use Illuminate\Contracts\Session\Session;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PagesController extends Controller
{
    /**
     * @return View
     */
    public function index(): View
    {
        return view('welcome')->with([
            "services" => Service::all()->take(6),
            "members" => TeamMember::all()->take(4),
            "partners" => Partner::all()->take(4),
            "posts" => Post::all()->take(4),
            "events" => Event::all()->take(4),
            "updates" => Update::all()->take(8),
            "banners" => Banner::where('is_active', true)->get()
        ]);
    }

    /**
     * @return View
     */
    public function services(): View
    {
        return view('services')->with([
            "services" => Service::all()->take(6),
            'faqs' => Faq::all()->take(8)
        ]);
    }
    /**
     * @return View
     * @param mixed $id
     * @param mixed $slug
     */
    public function showService($id, $slug): View
    {
        $service = Service::findOrFail($id);
        $otherServices = Service::whereNot('id', $id)->inRandomOrder()->get();
        return view('show-service')->with([
            'service' => $service,
            'otherServices' => $otherServices,
        ]);
    }
    /**
     * @return View
     */
    public function about(): View
    {
        return view('about.index')->with([
            "members" => TeamMember::all(),
            "sections" => AboutSection::latest()->get()
        ]);
    }
    /**
     * @return View
     */
    public function contact(): View
    {
        return view('contact')->with([
            "members" => TeamMember::all()
        ]);
    }
    /**
     * @return RedirectResponse
     */
    public function sendMail(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'name' => 'string|required',
            'email' => 'required|email',
            'message' => 'required|string'
        ]);

        Mail::to("info@lem-dfoundation.org")
        ->send(new ContactUsMail($data));

        return redirect()->back()->with("success", "Thank you for reaching out. We will respond shortly.");
    }
    /**
     * @return View
     */
    public function events(): View
    {
        return view('events.index')->with([
            "events" => Event::latest()->get()
        ]);
    }
    /**
     * @return View
     */
    public function blog(): View
    {
        return view('posts.index')->with([
            "posts" => Post::paginate(6)
        ]);
    }
    /**
     * @return View
     * @param mixed $id
     * @param mixed $slug
     */
    public function showBlog($id, $slug): View
    {
        $post = Post::find($id);
        $similarPosts = Post::inRandomOrder()
        ->where('id', '!=', $id)
        ->where('is_published', true)
        ->take(4);
        return view('posts.show')->with([
            "post" => $post,
            "similarPosts" => $similarPosts
        ]);
    }
    /**
     * @return View
     */
    public function projects(): View
    {
        return view('projects')->with([
            "projects" => Project::paginate(6)
        ]);
    }
    /**
     * @return View
     * @param int $id
     * @param string $slug
     */
    public function showProject($id, $slug): View
    {
        $project = Project::findOrFail($id);
        $otherProjects = Project::inRandomOrder()->take(4)->get();
        return view('show-project')->with([
            'project' => $project,
            'otherProjects' => $otherProjects,
        ]);
    }
}
