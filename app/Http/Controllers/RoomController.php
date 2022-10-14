<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\User;
use App\Models\Alumni;
use App\Models\Student;
use App\Models\Teacher;
use Illuminate\Http\Request;
use App\Http\Requests\RoomRequest;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rooms = Room::all();
        $alumni = Alumni::count();
        $student = Student::count();
        $room = Room::count();
        $teachers = Teacher::count();
        $user = User::first();
        
        return view('pages.dashboard.admin.room.index', compact('rooms','alumni', 'student', 'room' , 'teachers', 'user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = User::first();
        return view('pages.dashboard.admin.room.create', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RoomRequest $request)
    {
        $data = $request->all();

        Room::create($data);

        return redirect()->route('dashboard.room.index')->with('success', 'Data Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $rooms = Room::where('id', $id)->first();
        $students = Student::where('room_id', $id)->get();
        // dd($students);

        return view('pages.dashboard.admin.room.show', [
            'room' => $rooms,
            'students' => $students
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $room = Room::findOrFail($id);
        $user = User::first();
        // dd($students);

        return view('pages.dashboard.admin.room.edit', [
            'room' => $room
        ],compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $data = Room::find($id)->update($request->all()); 

        return redirect()->route('dashboard.room.index');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function destroy(Room $room)
    {
        $room->delete();
        
        return redirect()->route('dashboard.room.index');
    }
}
