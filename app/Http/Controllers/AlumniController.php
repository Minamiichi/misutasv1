<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\User;
use App\Models\Alumni;
use App\Models\Student;
use App\Models\Teacher;
use Illuminate\Http\Request;
use App\Http\Requests\AlumniRequest;
use Cviebrock\EloquentSluggable\Services\SlugService;

class AlumniController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $alumnus = Alumni::all();
        $students = Student::all();
        $alumni = Alumni::count();
        $student = Student::count();
        $rooms = Room::count();
        $teachers = Teacher::count();
        $user = User::first();
        
        return view('pages.dashboard.admin.alumni.index', compact('alumnus', 'students', 'alumni', 'student', 'rooms' , 'teachers', 'user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = User::first();

        return view('pages.dashboard.admin.alumni.create', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AlumniRequest $request)
    {
        $data = $request->all();

        Alumni::create($data);

        return redirect()->route('dashboard.alumni.index')->with('success', 'Data Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Alumni  $alumni
     * @return \Illuminate\Http\Response
     */
    public function show(Alumni $alumni)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Alumni  $alumni
     * @return \Illuminate\Http\Response
     */
    public function edit(Alumni $alumni, $id)
    {
        $alumni = Alumni::findOrFail($id);
        $user = User::first();
        // dd($students);

        return view('pages.dashboard.admin.alumni.edit', [
            'alumni' => $alumni
        ],compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Alumni  $alumni
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Alumni $alumni, $id)
    {

        $data = Alumni::find($id)->update($request->all()); 

        return redirect()->route('dashboard.alumni.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Alumni  $alumni
     * @return \Illuminate\Http\Response
     */
    public function destroy(Alumni $alumni, $id)
    {
        $alumni = Alumni::find($id);
        $alumni->delete();
        
        return redirect()->route('dashboard.alumni.index');
    }

    
}
