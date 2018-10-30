<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Delivery;

class SuratController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $deliveries = Delivery::where('keterangan', 'surat')->get();
        return view('backend.surat.index', compact('deliveries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.surat.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'no_delivery' => 'required',
            'nama' => 'required',
            'daerah' => 'required',
            'keterangan' => 'required',
            'status' => 'required',
        ]);

        Delivery::create([
            'no_delivery' => $request['no_delivery'],
            'nama' => $request['nama'],
            'daerah' => $request['daerah'],
            'keterangan' => $request['keterangan'],
            'status' => $request['status'],
        ]);

        return redirect()->route('surat.create')->with('success', 'Input success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $delivery=Delivery::find($id);
        return view('backend.surat.edit', compact('delivery'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $delivery=Delivery::find($id);

        $delivery->update([
            'no_delivery' => request('no_delivery'),
            'nama' => request('nama'),
            'daerah' => request('daerah'),
            'keterangan' => request('keterangan'),
            'status' => request('status'),
        ]);

        return redirect()->route('surat.index')->with('update', 'Data telah diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delivery=Delivery::find($id);
        $delivery->delete();

        return redirect()->route('surat.index')->with('delete', 'Data telah dihapus');
    }
}
