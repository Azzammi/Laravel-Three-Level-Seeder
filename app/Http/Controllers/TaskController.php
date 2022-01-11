<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Inertia\Inertia;

class TaskController extends Controller
{
    public function index(Request $request)
    {
        $tasks = Task::paginate();
        return Inertia::render('Tasks/index', [
            'tasks' => $tasks
        ]);
    }
}
