<?php

namespace App\Http\Controllers;
use App\Models\Writer;
use Illuminate\Http\Request;


class WriterController extends Controller
{
    public function index()
    {
        $writers=response()->json(Writer::all());
        return $writers;
    }
    public function show($id)
    {
        $writers=response()->json(Writer::find($id));
        return $writers;
    }
    public function destroy($id)
    {
        Writer::find($id)->delete();
    }
    public function store(Request $request)
    {
        $writers=new Writer();
        $writers->nev=$request->nev;
        $writers->szuletes=$request->szuletes;
        $request->save();
    }
}
