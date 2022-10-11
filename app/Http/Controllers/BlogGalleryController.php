<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\User;
use App\Models\BlogGallery;
use Illuminate\Http\Request;
use App\Http\Requests\BlogGalleryRequest;

class BlogGalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $blog = Blog::find($id);
        $blogGalleries = BlogGallery::where('blogs_id', $id)->get();
        // dd($blogGalleries);
        $users = User::first();

        return view('pages.dashboard.admin.gallery.index', compact('blogGalleries', 'blog', 'users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Blog $blog)
    {
        $users = User::first();
        return view('pages.dashboard.admin.gallery.create', compact('blog', 'users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BlogGalleryRequest $request, Blog $blog)
    {
        $files = $request->file('files');

        if($request->hasFile('files')){
            foreach ($files as $file) {
                $path = $file->store('public/gallery');

                BlogGallery::create([
                    'blogs_id' => $blog->id,
                    'url' => $path
                ]);
            }
        }
        return redirect()->route('dashboard.blog.gallery.index', $blog->id)->with('success', 'Data Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BlogGallery  $blogGallery
     * @return \Illuminate\Http\Response
     */
    public function show(BlogGallery $blogGallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BlogGallery  $blogGallery
     * @return \Illuminate\Http\Response
     */
    public function edit(BlogGallery $blogGallery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BlogGallery  $blogGallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BlogGallery $blogGallery)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BlogGallery  $blogGallery
     * @return \Illuminate\Http\Response
     */
    public function destroy(BlogGallery $blogGallery)
    {
        //
    }
}
