<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WeddingBands;

class BandsController extends Controller
{
    public function show()
    {
        $data = WeddingBands::all();
        return view('bands',($data));
    }
}
