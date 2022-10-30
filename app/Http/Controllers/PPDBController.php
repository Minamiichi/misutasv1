<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ppdb;
use App\Models\PPDBGallery;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class PpdbController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = auth()->user();
        $ppdbs = Ppdb::where('user_id', '=', $users->id)->get();
        // dd($ppdbs);
        return view('home', compact('ppdbs', 'users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::first();
        return view('create', compact('users'));
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
        Ppdb::create($data);
        DB::table('users')
            ->update(['status' => 'ACTIVE']);
        // dd($request);
        return redirect()->route('dashboard.ppdb.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ppdb  $PPDB
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ppdb = Ppdb::where('id', $id)->first();

        return view('pages.landingpage.ppdb.show', [
            'ppdb' => $ppdb,
            
        ],compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ppdb  $PPDB
     * @return \Illuminate\Http\Response
     */
    public function edit(Ppdb $ppdb)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ppdb  $PPDB
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PPDB $ppdb)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ppdb  $PPDB
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ppdb $ppdb)
    {
        $ppdb->delete();
        DB::table('users')
            ->update(['status' => 'INACTIVE']);

        return redirect()->route('dashboard.index');
    }

    public function infoPpdbAdmin()
    {
        $ppdbs = Ppdb::all();
        $user = User::first();

        return view('pages.dashboard.admin.ppdb.index', compact('ppdbs', 'user'));
    }
    
}

