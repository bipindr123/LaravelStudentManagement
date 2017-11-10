<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\stu_data;

class submitController extends Controller
{
  public function submit(Request $request)
  {
    $this->validate($request,[
      'usn' => 'required',
      'student' => 'required',
      'class' => 'required',
      'division' => 'required',
      'branch' => 'required',
      'cie1' => 'required',
      'cie2' => 'required'
    ]);

    $data = new stu_data;
    $data->usn=$request->input('usn');
    $data->student=$request->input('student');
    $data->class=$request->input('class');
    $data->division=$request->input('division');
    $data->branch=$request->input('branch');
    $data->cie1=$request->input('cie1');
    $data->cie2=$request->input('cie2');

    $data->save();

    return redirect('/')->with('success','DONE!');
  }

  public function getData()
  {
    $data = stu_data::all();
    return view('/studata')->with('data',$data);
  }
}
