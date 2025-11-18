<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class ManagementController extends Controller
{
    public function index()
    {
        $management = Employee::where('type', 'management')->get();
        $trainers = Employee::where('type', 'trainer')->get();
        
        return view('management', compact('management', 'trainers'));
    }
}
