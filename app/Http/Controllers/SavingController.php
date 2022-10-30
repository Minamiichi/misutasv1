<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\User;
use App\Models\Alumni;
use App\Models\Saving;
use App\Models\Student;
use App\Models\Teacher;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use App\Http\Requests\SavingRequest;

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
        $users = auth()->user();
        $savings = Saving::where('user_id', '=', $users->id)->get();
        
        $userId = auth()->user();
        $totalSavings = Saving::where('user_id', '=', $userId->id)->sum('paid');
        // dd($totalSavings);

        return view('pages.dashboard.siswa.saving.index', [
            'totalSavings' => $totalSavings
        ],

         compact('students', 'savings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $students = Student::all();
        $user = User::first();
        return view('pages.dashboard.siswa.saving.create', compact('students', 'user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SavingRequest $request, Student $student)
    {
        $data = $request->all();

        Saving::create($data);

        return redirect()->route('dashboard.saving.index', $student->id)->with('success', 'Data Added Successfully');
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
        $user = User::first();
        // dd($students);

        return view('pages.dashboard.siswa.saving.edit', [
            'saving' => $saving,
            'students' => $students
        ],compact('user'));
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

    public function cetak_pdf()
    {
    	$students = Student::all();
        $users = auth()->user();
        $savings = Saving::where('user_id', '=', $users->id)->get();
        
        $userId = auth()->user();
        $totalSavings = Saving::where('user_id', '=', $userId->id)->sum('paid');
        // dd($savings);
 
    	$pdf = PDF::loadview('pages.dashboard.siswa.saving.print', [
            'totalSavings' => $totalSavings
        ],
         compact('students', 'savings'));
    	return $pdf->download('laporan-tabungan.pdf');
    }
}
