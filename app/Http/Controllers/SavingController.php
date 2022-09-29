<?php

namespace App\Http\Controllers;

use App\Models\Saving;
use App\Models\Student;
use App\Models\Room;
use App\Models\Alumni;
use App\Models\Teacher;
use Illuminate\Http\Request;

class SavingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all();
        $savings = Saving::all();
        $alumni = Alumni::count();
        $student = Student::count();
        $room = Room::count();
        $teachers = Teacher::count();

        return view('pages.dashboard.admin.saving.index', compact('students', 'savings','alumni', 'student', 'room' , 'teachers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $students = Student::all();

        return view('pages.dashboard.admin.saving.create', compact('students'));
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

        Saving::create($data);

        return redirect()->route('dashboard.saving.index', $student->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Saving  $saving
     * @return \Illuminate\Http\Response
     */
    public function show(Saving $saving)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Saving  $saving
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $saving = Saving::findOrFail($id);
        $students = Student::all();
        // dd($students);

        return view('pages.dashboard.admin.saving.edit', [
            'saving' => $saving,
            'students' => $students
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Saving  $saving
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $data = Saving::find($id)->update($request->all()); 

        return redirect()->route('dashboard.saving.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Saving  $saving
     * @return \Illuminate\Http\Response
     */
    public function destroy(Saving $saving)
    {
        $saving->delete();
        
        return redirect()->route('dashboard.saving.index');
    }
}
