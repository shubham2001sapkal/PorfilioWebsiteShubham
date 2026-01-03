<?php

namespace App\Controllers;

class Experience extends BaseController
{
    public function index()
    {
        $arrData = [
            'title' => 'Experience | Portfolio Shubham Sapkal'
        ];

        return view('experience/index', $arrData);
    }
}

