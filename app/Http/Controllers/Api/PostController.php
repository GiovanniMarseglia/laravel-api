<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
class PostController extends Controller
{
    public function index(){
        $project = Project::with('technologias','type')->get();
        return response()->json([
            'success'=> true,
            'project'=> $project
        ]);
    }


    public function show($slug){
        $project = Project::with('technologias','type')->where('slug',$slug)->first();
        if($project){
            return response()->json([
                'success'=> true,
                'project'=> $project
            ]);
        }else{
            return response()->json([
                'success'=> false,
                'error'=> "progetto non trovato"
            ]);
        }

    }
}
