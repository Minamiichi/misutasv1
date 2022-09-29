<?php

namespace App\Http\Controllers;

use App\Models\Inmutation;
use App\Models\Outmutation;
use Illuminate\Http\Request;

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
        return view('pages.dashboard.admin.mutasiMasuk.index', compact('inmutations','inmutation','outmutation'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.dashboard.admin.mutasiMasuk.create');
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

        Inmutation::create($data);

        return redirect()->route('dashboard.inmutation.index');
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

        return view('pages.dashboard.admin.mutasiMasuk.edit', [
            'inmutation' => $inmutation
        ]);
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
