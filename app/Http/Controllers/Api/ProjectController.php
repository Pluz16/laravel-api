<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ProjectController extends Controller
{
    public function index(Request $request)
    {
        $projects = Project::all();
        return response()->json($projects, Response::HTTP_OK);
    }
}
