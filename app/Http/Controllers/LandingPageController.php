<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Room;
use App\Models\User;
use App\Models\Alumni;
use App\Models\Student;
use App\Models\Teacher;
use Illuminate\Http\Request;


class LandingPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $teachers = Teacher::count();
        $students = Student::count();
        $rooms = Room::count();
        $alumnus = Alumni::count();
        $blogs = Blog::with(['galleries'])->latest()->get();

        return view('pages.landingpage.index', compact('teachers','students','rooms','alumnus', 'blogs'));
    
    }
    public function about(Request $request)
    {
        return view('pages.landingpage.about');
    }

    public function infoPpdb(Request $request){

        $data = User::where('status', 'active');

        return view('pages.ppdb.index', compact('data'));
    }

    public function blog(Request $request){

        $blogs = Blog::with(['galleries'])->latest()->get();
        $recents = Blog::with(['galleries'])->inRandomOrder()->limit(4)->get();

        return view('pages.landingpage.blog.index', compact('blogs', 'recents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function details($slug){

        $blog = Blog::with(['galleries'])->where('slug', $slug)->first();
        $recents = Blog::with(['galleries'])->inRandomOrder()->limit(4)->get();
        // dd($blog);

        return view('pages.landingpage.blog.details', compact('blog', 'recents'));
    }

    public function siswa(Request $request)
    {
        return view ('pages.landingpage.siswa.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
