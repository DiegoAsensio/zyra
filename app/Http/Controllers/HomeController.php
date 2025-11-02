<?php

namespace App\Http\Controllers;

// use App\Models\Post;
// use App\Models\Service;
// use Illuminate\View\View;

class HomeController extends Controller
{
      public function home(){
        return view('home');
    }
    public function about(){
        return view('about');
    }
    public function opinions(){
        return view ('opinions');
    }
    // public function index(): View
    // {
    //     $services = Service::where('active', true)->take(3)->get();
    //     $latestPosts = Post::published()
    //         ->with('author')
    //         ->latest('published_at')
    //         ->take(3)
    //         ->get();

    //     return view('home', compact('services', 'latestPosts'));
    // }
}
