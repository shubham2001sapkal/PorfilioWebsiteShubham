<?php

namespace App\Controllers;

use App\Models\ProjectModel;
use App\Models\SkillModel;

class Home extends BaseController
{
    public function index()
    {
        $objSkillModel = new SkillModel();
        $arrSkills = $objSkillModel->getAllSkills();

        $objProjectModel = new ProjectModel();
        $arrProjects = $objProjectModel->getFeaturedProjects();

        $arrData = [
            'title' => 'Portfolio | Shubham Sapkal',
            'skills' => $arrSkills,
            'projects' => $arrProjects
        ];

        return view('home/index', $arrData);
    }

    public function error404()
    {
        $arrData = [
            'title' => 'Got Lost! Page Not Found'
        ];

        return view('errors/404', $arrData);
    }
}

