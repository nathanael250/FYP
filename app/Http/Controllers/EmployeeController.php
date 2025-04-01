<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Emplooye;

class EmployeeController extends Controller
{
    public function insertEmp(Request $request){
        $employee = new Emplooye;
        $employee ->name = $request->input('name');
        $employee ->age = $request->input('age');
        $employee->save();

        return redirect('/');


    }
}
