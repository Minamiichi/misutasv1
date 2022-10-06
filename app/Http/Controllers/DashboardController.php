<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\User;
use App\Models\Alumni;
use App\Models\Ppdb;
use App\Models\Student;
use App\Models\Teacher;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request){
        $teachers = Teacher::count();
        $students = Student::count();
        $rooms = Room::count();
        $alumnus = Alumni::count();
        $users = User::first();
        $ppdbs = Ppdb::all();

        return view('dashboard', compact('teachers','students','rooms','alumnus','users', 'ppdbs'));
    }
}
