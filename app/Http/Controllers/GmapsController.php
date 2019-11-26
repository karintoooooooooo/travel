<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class GmapsController extends Controller
{
    public function view()
    {
      //札幌駅を表示
      $address = "北海道札幌市北区北6条西4丁目";
      //return view('gmaps/view', compact('address'));
      return view('gmaps/view', compact('address'));
    }
}
