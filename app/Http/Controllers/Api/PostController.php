<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
class PostController extends Controller
{
    public function index(){
        $project = Project::all();
        return response()->json([
            'success'=> true,
            'project'=> $project
        ]);
    }
}