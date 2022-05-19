<?php

namespace App\Http\Controllers;

use App\Models\Midsemester;
use Illuminate\Http\Request;


class UtsController extends Controller
{
    public function index()
    {
        $data = Midsemester::all();
        return view('mid/index', compact('data'));
    }
    public function create()
    {
        return view('mid/add');
    }
    public function ambilData(Request $request)
    {
        $this->validate($request, [
            'id' => 'required|numeric|unique:midsemesters',
            'kolom_judul' => 'required|min:2|max:20',
            'kolom_isi' => 'required|min:2|max:255',
            'kolom_penulis' => 'required|min:2|max:20',
            'kolom_keterangan' => 'required|min:2|max:255'
        ]);
        $data = Midsemester::create($request->all());
        // redirect
        return redirect('mid/index');
        // dd($request->all());
    }
    public function destroy(Midsemester $id)
    {
        $id->delete();
        return redirect(url('mid/index'));
    }
    public function edit($id)
    {
        $data = Midsemester::find($id);
        // dd($data);
        return view('mid/edit', compact('data'));
    }
    public function update($id, Request $request)
    {
        $data = Midsemester::find($id);
        //    validasi update Blog
        $midValid = [
            'kolom_judul' => 'required|min:2|max:20',
            'kolom_isi' => 'required|min:2|max:255',
            'kolom_penulis' => 'required|min:2|max:20',
            'kolom_keterangan' => 'required|min:2|max:255'
        ];
        // validasi id untuk id agar tidak sama dengan id yg lain(unique)

        if ($request->id != $data->id) {
            $midValid['id'] = 'required|unique:midsemesters|max:10';
        }
        $validatedData = $request->validate($midValid);
        // end validasi blog
        $data->update($request->all());
        // redirect
        return redirect(url('mid/index'));
        // dd($request->all());
    }
}
