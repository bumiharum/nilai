<?php

namespace App\Http\Controllers;

use App\PAI;
use App\Imports\PAIImport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;

class PAIController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $pai = PAI::all();
		  return view('pages.pai', ['pai' => $pai]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function import_excel(Request $request)
    {
      // validasi
    $this->validate($request, [
      'file' => 'required|mimes:csv,xls,xlsx'
    ]);

    // menangkap file excel
    $file = $request->file('file');

    // membuat nama file unik
    $nama_file = rand().$file->getClientOriginalName();

    // upload ke folder file_siswa di dalam folder public
    $file->move('nilai_pai',$nama_file);

    // import data
    Excel::import(new PAIImport, public_path('/nilai_pai/'.$nama_file));

    return redirect('/pai');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\pai  $pai
     * @return \Illuminate\Http\Response
     */
    public function show(pai $pai)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\pai  $pai
     * @return \Illuminate\Http\Response
     */
    public function edit(pai $pai)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\pai  $pai
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, pai $pai)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\pai  $pai
     * @return \Illuminate\Http\Response
     */
    public function destroy(pai $pai)
    {
        //
    }
}
