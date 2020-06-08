<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

class ProjectsController extends Controller
{
    public function index() {

        $projects = Project::all();

        return view('app.projects', ['projects' => $projects]);

    }

    public function store() {

        Project::create(
            [
                'title' => request('title'),
                'description' => request('description')
            ]
        );

        return redirect('/projects');
    }
}
