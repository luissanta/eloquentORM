<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Level;

class LevelController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $levels = Level::all();
        return $levels;
    }

    public function store(Request $request)
    {
        $level = new Level();
        $level->name = $request->name;
        $level->save();
    }
}
