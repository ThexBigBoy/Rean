<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function index()
    {
        $data['total']= "";
        return view('calculator', $data);
    }
    
    public function sell(Request $r)
    {
        $qty = $r->qty;
        $price = $r->price;
        $name = $r->pname;
        $total = $qty * $price;
        $data['total']=$total;
        return view('calculator', $data);

    }
}
