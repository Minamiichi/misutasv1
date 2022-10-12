<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\User;
use App\Models\Alumni;
use App\Models\Student;
use App\Models\Teacher;
use Illuminate\Http\Request;
use App\Http\Requests\StudentRequest;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rooms = Room::all();
        $students = Student::all();
        $alumni = Alumni::count();
        $student = Student::count();
        $room = Room::count();
        $teachers = Teacher::count();
        $users = User::first();

        return view('pages.dashboard.admin.student.index', compact('rooms', 'students','alumni', 'student', 'room' , 'teachers', 'users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $rooms = Room::all();
        $users = User::first();
        return view('pages.dashboard.admin.student.create', compact('rooms', 'users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StudentRequest $request, Room $room)
    {
        $data = $request->all();

        Student::create($data);

        return redirect()->route('dashboard.student.index', $room->id)->with('success', 'Data Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = Student::findOrFail($id);
        $rooms = Room::all();
        $users = User::first();
        // dd($students);

        return view('pages.dashboard.admin.student.edit', [
            'student' => $student,
            'rooms' => $rooms
        ],compact('users'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $data = Student::find($id)->update($request->all()); 

        return redirect()->route('dashboard.student.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        $student->delete();
        
        return redirect()->route('dashboard.student.index');
    }
}
