<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Inmutation;
use App\Models\Outmutation;
use Illuminate\Http\Request;
use App\Http\Requests\InmutationRequest;

class InmutationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $inmutations = Inmutation::all();
        $inmutation = Inmutation::count();
        $outmutation = Outmutation::count();
        $users = User::first();
        return view('pages.dashboard.admin.mutasiMasuk.index', compact('inmutations','inmutation','outmutation','users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::first();
        return view('pages.dashboard.admin.mutasiMasuk.create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(InmutationRequest $request)
    {
        $data = $request->all();

        Inmutation::create($data);

        return redirect()->route('dashboard.inmutation.index')->with('success', 'Data Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Inmutation  $inmutation
     * @return \Illuminate\Http\Response
     */
    public function show(Inmutation $inmutation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Inmutation  $inmutation
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $inmutation = Inmutation::findOrFail($id);
        $users = User::first();

        return view('pages.dashboard.admin.mutasiMasuk.edit', [
            'inmutation' => $inmutation
        ],compact('users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Inmutation  $inmutation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $data = Inmutation::find($id)->update($request->all()); 

        return redirect()->route('dashboard.inmutation.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Inmutation  $inmutation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Inmutation $inmutation)
    {
        $inmutation->delete();
        
        return redirect()->route('dashboard.inmutation.index');
    }
}
