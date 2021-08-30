<?php

namespace App\Http\Controllers;

use App\Mail\VisitorContact;
use App\Post;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class WebsiteController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('id', 'DESC')->where('post_type', 'post')->where('is_published', '1')->paginate(5);
        return view('website.index', compact('posts'));
    }

    public function post($slug)
    {
        $post = Post::where('slug', $slug)->where('post_type', 'post')->where('is_published', '1')->first();
        if ($post) {
            return view('website.post', compact('post'));
        } else {
            return \Response::view('website.errors.404', array(), 404);
        }
    }

    public function list_content()
    {
        $posts = Post::orderBy('id', 'DESC')->where('post_type', 'post')->where('is_published', '1')->paginate(5);
        return view('website.list_content', compact('posts'));
    }

    public function page($slug)
    {
        $page = Post::where('slug', $slug)->where('post_type', 'page')->where('is_published', '1')->first();
        if ($page) {
            return view('website.page', compact('page'));
        } else {
            return \Response::view('website.errors.404', array(), 404);
        }
    }

    public function showContactForm()
    {
        return view('website.contact');
    }

    public function submitContactForm(Request $request)
    {
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'tel' => $request->tel,
            'message' => $request->message,
        ];

        Mail::to('server323499@server323499.nazwa.pl')->send(new VisitorContact($data));

        Session::flash('message', 'Dziękujemy za Twój email :)');
        return redirect()->route('contact.show');
    }
}
