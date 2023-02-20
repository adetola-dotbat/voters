<?php

namespace App\Http\Controllers;

use App\Models\President;
use App\Models\Presidential;
use Illuminate\Http\Request;
use Symfony\Component\CssSelector\Node\FunctionNode;

class PresidentialController extends Controller
{
    public function index() {
        $presidentials = President::get();
        // dd($presidential);
       return view('pages.presidential_details', compact('presidentials'));
    }

    public function graph(){
        return 'graph';
    }

    public function scoreData(){
        return 'scoreData';
    }

    public function reportDetails(){
        return view('pages.report_details', compact('presidentials'));

    }
}