<?php

namespace App\Http\Controllers;

use App\Models\Alumni;
use App\Models\Room;
use App\Models\Student;
use App\Models\Teacher;
use Illuminate\Http\Request;

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

        return view('pages.dashboard.admin.alumni.index', compact('alumnus', 'students', 'alumni', 'student', 'rooms' , 'teachers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $students = Student::all();

        return view('pages.dashboard.admin.alumni.create', compact('students'));
    }

    public function getDetails($id = 0)
    {
        $data = Student::where('id', $id)->first();
        return response()->json($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Student $student)
    {
        $data = $request->all();

        Alumni::create($data);

        return redirect()->route('dashboard.alumni.index', $student->id);
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
    public function edit(Alumni $alumni)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Alumni  $alumni
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Alumni $alumni)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Alumni  $alumni
     * @return \Illuminate\Http\Response
     */
    public function destroy(Alumni $alumni)
    {
        //
    }
}
