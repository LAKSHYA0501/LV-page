<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WeddingBands;

class BandsController extends Controller
{

    public function index()
    {
        $bands = WeddingBands::all();
        return view('bands')->with(['bands' => $bands]);
    }
}
