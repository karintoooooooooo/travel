<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\JapanTravelTask;
use App\Http\Requests;

class JapanTravelTasksController extends Controller
{
    public function create()
    {
        return view('travels/create')->with('japanTravelTask', new JapanTravelTask());
    }

    public function store(Request $request)
    {
        $japanTravelTask = new JapanTravelTask();
        $japanTravelTask->fill($request->all());
        $japanTravelTask->save();
        return redirect()->route('travels.index');
    }

    public function index()
    {
        $japanTravelTask = japan_travel_data::orderBy('updated_at', 'desc')->get();
        return view('travels/index')->with('japanTravelTasks', $japanTravelTasks);
    }
}
