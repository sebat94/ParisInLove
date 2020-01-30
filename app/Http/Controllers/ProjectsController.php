<?php

namespace App\Http\Controllers;

use App\Project as Project;
use App\Images as Images;
use App\Infoprojects as Infoprojects;

class ProjectsController extends Controller {

    public function readAll(){
        $projects = Project::all();
        $data = array(
          'projects' => $projects
        );
        return view('projects', $data);
    }

    public function read($id){
        $project = Project::where('id', '=', $id)->first();
        $images = Images::where('project', '=', $id)->get();
        $info = Infoprojects::where('project', '=', $id, 'and', 'language', '=', 'ES')->first();

        if(isset($project)){

            $data = array(
              'p' => $project,
              'images' => $images,
              'info' => $info
            );
            return view('project', $data);
        } else {
            return view('error.404');
        }


    }

}
