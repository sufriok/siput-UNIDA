<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Delivery;

class FrontendController extends Controller
{
    public function index()
    {
        $pakets = Delivery::where('keterangan', 'paket')->where('status', 'belum diambil')->orderBy('created_at')->get();
        $surats = Delivery::where('keterangan', 'surat')->where('status', 'belum diambil')->orderBy('created_at')->get();
        return view('frontend.index', compact('pakets', 'surats'));
    }
}
