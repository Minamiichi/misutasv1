<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Alumni;
use App\Models\Room;
use App\Models\Student;
use App\Models\Teacher;


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
        return view('pages.landingpage.index', compact('teachers','students','rooms','alumnus'));
    
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

        return view('pages.landingpage.blog.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function details(Request $request){
        return view('pages.blog.details');
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
