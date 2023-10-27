<?php

namespace App\Http\Controllers;
use App\Models\Student;

use Illuminate\Http\Request;

class CrudController extends Controller
{
    public function form_submit(Request $request){
        $data = new Student;
        $data->name = $request->get('name');
        $data->marks1 = $request->get('marks1');
        $data->marks2 = $request->get('marks2');
        $data->marks3 = $request->get('marks3');
        $data->save();
        return "hrllo";
    }
}
