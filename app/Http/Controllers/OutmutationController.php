<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Student;
use App\Models\Inmutation;
use App\Models\Outmutation;
use Illuminate\Http\Request;
use App\Http\Requests\OutmutationRequest;

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
        $users = User::first();

        return view('pages.dashboard.admin.mutasiKeluar.index', compact('outmutations', 'students', 'outmutation', 'inmutation', 'users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $students = Student::all();
        $users = User::first();
        return view('pages.dashboard.admin.mutasiKeluar.create', compact('students', 'users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(OutmutationRequest $request, Student $student)
    {
        $data = $request->all();

        Outmutation::create($data);

        return redirect()->route('dashboard.outmutation.index', $student->id)->with('success', 'Data Added Successfully');
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
    public function edit($id)
    {
        $outmutation = Outmutation::findOrFail($id);

        return view('pages.dashboard.admin.mutasiKeluar.edit', [
            'outmutation' => $outmutation
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Outmutation  $outmutation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $data = Outmutation::find($id)->update($request->all()); 

        return redirect()->route('dashboard.outmutation.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Outmutation  $outmutation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Outmutation $outmutation)
    {
        $outmutation->delete();
        
        return redirect()->route('dashboard.outmutation.index');
    }
}
