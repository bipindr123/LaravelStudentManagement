<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\stu_data;

class submitController extends Controller
{
  public function submit(Request $request)
  {
    $this->validate($request,[
      'student' => 'required',
      'class' => 'required',
      'division' => 'required'
    ]);

    $data = new stu_data;
    $data->student=$request->input('student');
    $data->class=$request->input('class');
    $data->division=$request->input('division');

    $data->save();

    return redirect('/')->with('success','DONE!');
  }
    
  public function getData()
  {
    $data = stu_data::all();
    return view('/studata')->with('data',$data);
  }
}
