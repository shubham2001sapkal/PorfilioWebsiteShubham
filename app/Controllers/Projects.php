<?php

namespace App\Controllers;

use App\Models\ProjectModel;

class Projects extends BaseController
{
    public function index()
    {
        $objProjectModel = new ProjectModel();
        $arrProjects = $objProjectModel->getAllProjects();

        $arrData = [
            'title' => 'Projects | Portfolio Shubham Sapkal',
            'projects' => $arrProjects
        ];

        return view('projects/index', $arrData);
    }
}

