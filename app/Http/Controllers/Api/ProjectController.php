<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    //
    public function index(Request $request){
        $results = Project::paginate(10);

        return response()->json([
            'projects' => $results,
            'success' => true,
        ]);
    }

}
