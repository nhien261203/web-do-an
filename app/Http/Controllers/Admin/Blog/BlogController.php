<?php

namespace App\Http\Controllers\Admin\Blog;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->search;
        $blogs = Blog::when($search, function ($query, $search) {
            return $query->where('title', 'like', "%{$search}%")
                ->orWhere('subtitle', 'like', "%{$search}%")
                ->orWhere('category', 'like', "%{$search}%");
        })
            ->orderBy('created_at', 'desc')
            ->paginate(10); // This returns a pagination instance instead of Collection

        return view('admin.blog.index', compact('blogs'));
    }

    public function create()
    {
        return view('Admin.blog.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|integer',
            'title' => 'required|string|max:255',
            'subtitle' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpg,jpeg,png|max:2048',
            'category' => 'required|string|max:255',
            'content' => 'required',
        ]);

        $imagePath = $request->file('image')->store('blog_images', 'public');

        Blog::create([
            'user_id' => $request->user_id,
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'image' => $imagePath,
            'category' => $request->category,
            'content' => $request->content,
        ]);

        return redirect()->route('admin.blog.index')->with('success', 'Thêm blog thành công!');
    }

    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        return view('Admin.blog.edit', compact('blog'));
    }

    public function update(Request $request, $id)
    {
        $blog = Blog::findOrFail($id);

        $request->validate([
            'title' => 'required|string|max:255',
            'subtitle' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'content' => 'required',
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('blog_images', 'public');
            $blog->image = $imagePath;
        }

        $blog->update([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'category' => $request->category,
            'content' => $request->content,
            'image' => $blog->image,
        ]);

        return redirect()->route('admin.blog.index')->with('success', 'Cập nhật blog thành công!');
    }

    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);
        $blog->delete();

        return redirect()->route('admin.blog.index')->with('success', 'Xóa blog thành công!');
    }

    public function show($id)
    {
        $blog = Blog::findOrFail($id);
        return view('admin.blog.show', compact('blog'));
    }
}
