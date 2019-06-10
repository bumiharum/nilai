<?php

namespace App\Http\Controllers;

use App\PKN;
use App\Imports\PKNImport;
use App\Exports\PKNExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;

class PKNController extends Controller
{
  public function index()
  {
    $pkn = PKN::latest()->get();
    return view('pages.pkn', ['pkn' => $pkn]);
  }

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
  $file->move('nilai_pkn',$nama_file);

  // import data
  Excel::import(new PKNImport, public_path('/nilai_pkn/'.$nama_file));

  return redirect('/pkn');
  }

  public function export_excel()
  {
    return Excel::download(new PKNExport, 'pkn.xlsx');
  }
}
