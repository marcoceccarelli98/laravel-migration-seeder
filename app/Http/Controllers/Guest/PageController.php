<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\Train;

class PageController extends Controller
{
    public function index()
    {
        $trains = Train::all();

        // $today = Carbon::today()->toDateString();
        // $trains = Train::where('departure_date', $today)->get();

        return view('homepage', compact('trains'));
    }
}
