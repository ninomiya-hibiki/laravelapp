<?php

namespace App\Http\Controllers;

use App\Person;
use Illuminate\Http\Request;

class Kouka2_1Controller extends Controller
{
    public function index()
    {
        $items = Person::all();
        $param = ['input' => '','items' => $items];
        return view('kouka2_1.index', $param);
    }
    public function find(Request $request)
    {
        //where()メソッドを利用すること。
        $item = where('Name',$request->input)->first();
        return view('kouka2_1/find', ['item' => $item]);
    }
}
