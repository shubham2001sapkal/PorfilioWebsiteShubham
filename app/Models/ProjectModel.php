<?php

namespace App\Models;

use CodeIgniter\Model;

class ProjectModel extends Model
{
    protected $strJsonPath;

    public function __construct()
    {
        parent::__construct();
        $this->strJsonPath = ROOTPATH . 'public/projects.json';
    }

    public function getAllProjects()
    {
        $arrProjects = [];

        if (file_exists($this->strJsonPath)) {
            $strJsonContent = file_get_contents($this->strJsonPath);
            $arrProjects = json_decode($strJsonContent, true);

            if (!is_array($arrProjects)) {
                $arrProjects = [];
            }
        }

        return $arrProjects;
    }

    public function getFeaturedProjects()
    {
        $arrAllProjects = $this->getAllProjects();
        
        // Return first 4 projects as featured
        return array_slice($arrAllProjects, 0, 4);
    }

    public function getProjectByCategory($strCategory)
    {
        $arrAllProjects = $this->getAllProjects();
        $arrFilteredProjects = [];

        foreach ($arrAllProjects as $arrProject) {
            if (isset($arrProject['category']) && $arrProject['category'] === $strCategory) {
                $arrFilteredProjects[] = $arrProject;
            }
        }

        return $arrFilteredProjects;
    }
}

