<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Outmutation;
use App\Models\Inmutation;
use Illuminate\Http\Request;

class OutmutationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $outmutations = Outmutation::all();
        $students = Student::all();
        $inmutation = Inmutation::count();
        $outmutation = Outmutation::count();
        return view('pages.dashboard.admin.mutasiKeluar.index', compact('outmutations', 'students', 'outmutation', 'inmutation'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $students = Student::all();

        return view('pages.dashboard.admin.mutasiKeluar.create', compact('students'));
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

        Outmutation::create($data);

        return redirect()->route('dashboard.outmutation.index', $student->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Outmutation  $outmutation
     * @return \Illuminate\Http\Response
     */
    public function show(Outmutation $outmutation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Outmutation  $outmutation
     * @return \Illuminate\Http\Response
     */
    public function edit(Outmutation $outmutation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Outmutation  $outmutation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Outmutation $outmutation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Outmutation  $outmutation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Outmutation $outmutation)
    {
        //
    }
}
