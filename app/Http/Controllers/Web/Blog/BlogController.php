<?php

namespace App\Http\Controllers\Web\Blog;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    //
    public function index()
    {
        $categories = Category::all();
        $blogs = Blog::all();
        return view('FrontEnd.blog.blog', compact('categories', 'blogs'));
    }

    public function show($id)
    {
        // Find the blog post or throw 404
        $blog = Blog::findOrFail($id);
        
        // Get the categories for the navigation menu
        $categories = Category::all();
        
        // Get related blogs from same category
        $relatedBlogs = Blog::where('category', $blog->category)
            ->where('id', '!=', $id)
            ->latest()
            ->take(3)
            ->get();

        return view('FrontEnd.blog.blog-details', compact('blog', 'relatedBlogs', 'categories'));
    }
}
