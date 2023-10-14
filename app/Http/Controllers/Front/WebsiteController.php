<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Backend\Blog;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function home()
    {
        return view('frontend.home.home');
    }
    public function blogCategory($id)
    {
        return view('frontend.blogs.category',[
            'blogs' => Blog::where('blog_category_id',$id)->where('status',1)->get(),
            'blog'  => Blog::find($id)
        ]);
    }
    public function blogDetails($id)
    {
        return view('frontend.blogs.details',[
            'blog' => Blog::find($id)
        ]);
    }
    public function about()
    {
        return view('frontend.about.about');
    }
    public function contact()
    {
        return view('frontend.contact.contact');
    }
}
