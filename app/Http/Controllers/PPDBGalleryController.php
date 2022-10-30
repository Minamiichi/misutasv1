<?php

namespace App\Http\Controllers;

use App\Http\Requests\PPDBGalleryRequest;
use App\Models\Ppdb;
use App\Models\PPDBGallery;
use Illuminate\Http\Request;
use App\Models\User;

class PPDBGalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $ppdb = Ppdb::find($id);
        $ppdbGalleries = ppdbGallery::where('ppdbs_id', $id)->get();
        // dd($ppdbGalleries);
        $user = User::first();

        return view('pages.dashboard.siswa.pgallery.index', compact('ppdbGalleries', 'ppdb', 'user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Ppdb $ppdb)
    {
        $users = User::first();
        return view('pages.dashboard.siswa.pgallery.create', compact('ppdb', 'users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PPDBGalleryRequest $request, Ppdb $ppdb)
    {
        $files = $request->file('files');

        if($request->hasFile('files')){
            foreach ($files as $file) {
                $path = $file->store('public/gallery');

                PPDBGallery::create([
                    'ppdbs_id' => $ppdb->id,
                    'url' => $path
                ]);
            }
        }
        return redirect()->route('dashboard.ppdb.pgallery.index', $ppdb->id)->with('success', 'Data Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PPDBGallery  $pPDBGallery
     * @return \Illuminate\Http\Response
     */
    public function show(PPDBGallery $pPDBGallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PPDBGallery  $pPDBGallery
     * @return \Illuminate\Http\Response
     */
    public function edit(PPDBGallery $pPDBGallery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PPDBGallery  $pPDBGallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PPDBGallery $pPDBGallery)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PPDBGallery  $pPDBGallery
     * @return \Illuminate\Http\Response
     */
    public function destroy(PPDBGallery $ppdbGallery, $id)
    {
        $ppdbGallery = PPDBGallery::findOrFail($id);
        $ppdbGallery->delete();
        
        return redirect()->back();
    }
    public function infoPpdbAdminGallery($id)
    {
        $ppdb = Ppdb::find($id);
        $ppdbGalleries = ppdbGallery::where('ppdbs_id', $id)->get();
        // dd($ppdbGalleries);
        $user = User::first();

        return view('pages.dashboard.admin.ppdbGallery.index', compact('ppdbGalleries', 'ppdb', 'user'));
    }
}
