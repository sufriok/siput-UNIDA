<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Delivery;

class PaketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $deliveries = Delivery::where('keterangan', 'paket')->get();
        return view('backend.paket.index', compact('deliveries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.paket.create');
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

        return redirect()->route('paket.create')->with('success', 'Input success');
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
        return view('backend.paket.edit', compact('delivery'));
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

        return redirect()->route('paket.index')->with('update', 'Data telah diperbarui');
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

        return redirect()->route('paket.index')->with('delete', 'Data telah dihapus');
    }
}
