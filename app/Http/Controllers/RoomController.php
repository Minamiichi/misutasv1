<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\Student;
use App\Models\Alumni;
use App\Models\Teacher;
use Illuminate\Http\Request;

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

        return view('pages.dashboard.admin.room.index', compact('rooms','alumni', 'student', 'room' , 'teachers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.dashboard.admin.room.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        Room::create($data);

        return redirect()->route('dashboard.room.index');
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
        // dd($students);

        return view('pages.dashboard.admin.room.edit', [
            'room' => $room
        ]);
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
