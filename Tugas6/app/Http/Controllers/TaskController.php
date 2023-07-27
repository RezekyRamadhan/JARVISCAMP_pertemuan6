<?php

namespace App\Http\Controllers;

use App\Models\tesk;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $taskss = tesk::getAll();

        return view('tasks/index', ['tasks' => $taskss]);
    }

    public function show($id)
    {
        return view('tasks/main', ['tasks' => tesk::getById($id)]);
       

       

    }

    
        

    
    
}
