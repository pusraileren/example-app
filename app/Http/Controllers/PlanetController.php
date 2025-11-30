<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PlanetController extends Controller
{
    public function index()
    {
        $planets = DB::table('planets')->get();
        return view('planets', ['planeten' => $planets]);
    }

    public function show($planet)
    {
        $planeet = DB::table('planets')
            ->where('name', $planet)
            ->first();

        if (!$planeet) {
            abort(404);
        }

        return view('planet', ['planeet' => $planeet]);
    }
}
