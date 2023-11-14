<?php

namespace App\Http\Controllers;
use App\Models\Writer;
use Illuminate\Http\Request;


class WriterController extends Controller
{
    public function index()
    {
        $writers=Writer::all();
        return response()->json($writers);;
    }
    /*public function show($id)
    {
        $writers=response()->json(Writer::find($id));
        return $writers;
    }*/
    public function destroy($id)
    {
        $writers=Writer::find($id)->delete();
        return response()->json(['message'=>'Sikeres törlés'],201);
    }
    public function store(Request $request)
    {
        $record=new Writer();
        $record->nev=$request->nev;
        $record->szuletes=$request->szuletes;
        $record->save();
        return Writer::find($record->id);
    }
    public function update(Request $request, $id){
        $writers= Writer::find($id);
        $writers->nev=$request->nev;
        $writers->szuletes=$request->szuletes;
        $writers->save();
        //return redirect('api/writer');
    }

}
