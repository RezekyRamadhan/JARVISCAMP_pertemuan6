<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index() {
        //Mengambi semua data tasks di modul
        $tasks = Task::getAll();

        //Mengirim data tasks ke view
        return view('tasks/index', [
            'tasks' => $tasks,
        ]);
    }
    
    public function show($id)
    {
        // masukkan logicnya
        
    }
}
