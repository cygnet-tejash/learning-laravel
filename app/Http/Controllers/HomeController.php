<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Exceptions\BlogException;
use App\Notifications\CommentAddedNotification;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {

        $blogs = Blog::latest()->take(5)->get();
        return view('home', ['blogs' => $blogs]);
    }
}
