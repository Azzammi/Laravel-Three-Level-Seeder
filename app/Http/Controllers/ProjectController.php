<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ProjectController extends Controller
{
    public function index(Request $request)
    {
        $projects = Project::paginate();
        return Inertia::render('Projects/index', [
            'projects' => $projects
        ]);
    }
}
