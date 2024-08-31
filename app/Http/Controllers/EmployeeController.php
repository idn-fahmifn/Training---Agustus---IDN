<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        $data_karyawan = 'Fahmi FN'; 
        return view('employee.index', compact('data_karyawan'));
    }
}
