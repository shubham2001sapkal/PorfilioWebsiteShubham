<?php

namespace App\Models;

use CodeIgniter\Model;

class SkillModel extends Model
{
    protected $strJsonPath;

    public function __construct()
    {
        parent::__construct();
        $this->strJsonPath = ROOTPATH . 'public/skills.json';
    }

    public function getAllSkills()
    {
        $arrSkills = [];

        if (file_exists($this->strJsonPath)) {
            $strJsonContent = file_get_contents($this->strJsonPath);
            $arrSkills = json_decode($strJsonContent, true);

            if (!is_array($arrSkills)) {
                $arrSkills = [];
            }
        }

        return $arrSkills;
    }
}

