<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Travel;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class TravelsController extends Controller
{
    public function create()
    {
      return view('travels/create')->with('travel', new Travel());
    }

    public function store(Request $request)
    {
      $travel = new Travel();
      $travel->fill($request->all());
      $travel->save();
      return redirect()->route('travels.index');
    }

    public function index()
    {
      $travels = Travel::orderBy('updated_at', 'desc')->get();
      return view('travels/index')->with('travels', $travels);
    }

    public function gmaps($id)
    {
      //$travel = 'test';
      //札幌駅を表示
      $travel = Travel::find($id);
      //$travel->fill($request->all());

      //$travel = 'test';
      //return view('gmaps/view', compact('address'));
      return view('travels/gmaps')->with('travel', $travel);
      //$travel = Travel::find($id);
      //return view('travels/gmaps')->with('address', $address);
    }

    public function show($id)
    {
      $travel = Travel::find($id);
      return view('travels/show')->with('travel', $travel);
    }

    public function edit($id)
    {
      $travel = Travel::find($id);
      return view('travels/edit')->with('travel', $travel);
    }

    public function update(Request $request, $id)
    {
      $travel = Travel::find($id);
      $travel->fill($request->all());
      $travel->save();
      return redirect()->route('travels.index');
    }

    public function destroy($id)
    {
      $travel = Travel::find($id);
      $travel->delete();
      return redirect()->route('travels.index');
    }

}
