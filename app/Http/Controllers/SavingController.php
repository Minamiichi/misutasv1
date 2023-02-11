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
use Carbon\Carbon;

class SavingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = auth()->user();
        $savings = Saving::where('user_id', '=', $users->id)->get();
        
        $userId = auth()->user();
        $totalSavings = Saving::where('user_id', '=', $userId->id)->sum('paid');
        // dd($totalSavings);

        return view('pages.dashboard.siswa.saving.index', [
            'totalSavings' => $totalSavings
        ],

         compact('savings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('pages.dashboard.siswa.saving.create');
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
        
        // dd($students);

        return view('pages.dashboard.admin.saving.edit', [
            'saving' => $saving,
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

        return redirect()->route('dashboard.tabungan');
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

    public function tabungan(){
        $savings = Saving::all();

        return view('pages.dashboard.admin.saving.index', compact('savings'));
    }
    public function cetak_pdfAdmin()
    {
        $savings = Saving::all();

        $totalSavings = Saving::where('created_at', '=', Carbon::now())->sum('paid');
        // dd($savings);
 
    	$pdf = PDF::loadview('pages.dashboard.admin.saving.print', [
            'totalSavings' => $totalSavings
        ],
         compact('savings'));
    	return $pdf->download('laporan-tabungan.pdf');
    }
}
