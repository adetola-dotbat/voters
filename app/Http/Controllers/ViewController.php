<?php

namespace App\Http\Controllers;

use App\Models\President;
use App\Models\Reps;
use App\Models\Senate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ViewController extends Controller
{
    public function viewPresidential() {
        $presidentials = President::get();
       return view('pages.presidential_details', compact('presidentials'));
    }

    public function reportDetails(){
        $reps = Reps::whereIn('lg_id', [1,15])->get();
        return view('pages.report_details',compact('reps'));

    }

    public function sort(){
        $reps = Reps::whereIn('lg_id', [1,15])->get();
        return view('pages.sort',compact('reps'));
        
    }
    public function repsData(){
      
        // binji
        $binji_report = Reps::whereIn('lg_id', [1,15]);
        // Dange
        $dange_report = Reps::whereIn('lg_id', [2,3]);
        // goronyo
        $goronyo_report = Reps::whereIn('lg_id', [4,5]);
        // illela
        $illela_report = Reps::whereIn('lg_id', [7,8]);
        // isah
        $isah_report = Reps::whereIn('lg_id', [9,13]);
        // kebbe
        $kebbe_report = Reps::whereIn('lg_id', [18,11]);
        // kware
        $kware_report = Reps::whereIn('lg_id', [10,21]);
        // snorth
        $snorth_report = Reps::whereIn('lg_id', [16,17]);
        // tangaza
        $tangaza_report = Reps::whereIn('lg_id', [6,19]);
        // wurno
        $wurno_report = Reps::whereIn('lg_id', [12,22]);
        // yabo
        $yabo_report = Reps::whereIn('lg_id', [23,14]);

        return view('pages.reps_data',compact(
            'binji_report', 'dange_report', 'goronyo_report', 'illela_report', 'isah_report', 'kebbe_report', 'kware_report',
            'snorth_report', 'tangaza_report', 'wurno_report', 'yabo_report'
           
        ));

    }

    public function senateListOne(){
        $senateLists = Senate::where('senate', '=', '1')->get();
        return view('pages.senate_list_one',compact('senateLists'));
    }

    public function senateListTwo(){
        $senateLists = Senate::where('senate', '=', '2')->get();
        return view('pages.senate_list_two',compact('senateLists'));
    }

    public function senateListThree(){
        $senateLists = Senate::where('senate', '=', '3')->get();
        return view('pages.senate_list_three',compact('senateLists'));
    }

    public function scoreData(){

        $senate1_apc = DB::table('senate')->where('senate', '=', '1')->get()->sum('apc');
        $senate1_pdp = DB::table('senate')->where('senate', '=', '1')->get()->sum('pdp');
        $senate1_nnpp = DB::table('senate')->where('senate', '=', '1')->get()->sum('nnpp');
        $senate1_lp = (int) DB::table('senate')->where('senate', '=', '1')->get()->sum('lp');
        $senate1_others = DB::table('senate')->where('senate', '=', '1')->get()->sum('others');

        $senate2_apc = DB::table('senate')->where('senate', '=', '2')->get()->sum('apc');
        $senate2_pdp = DB::table('senate')->where('senate', '=', '2')->get()->sum('pdp');
        $senate2_nnpp = DB::table('senate')->where('senate', '=', '2')->get()->sum('nnpp');
        $senate2_lp = DB::table('senate')->where('senate', '=', '2')->get()->sum('lp');
        $senate2_others = DB::table('senate')->where('senate', '=', '2')->get()->sum('others');

        $senate3_apc = DB::table('senate')->where('senate', '=', '3')->get()->sum('apc');
        $senate3_pdp = DB::table('senate')->where('senate', '=', '3')->get()->sum('pdp');
        $senate3_nnpp = DB::table('senate')->where('senate', '=', '3')->get()->sum('nnpp');
        $senate3_lp = DB::table('senate')->where('senate', '=', '3')->get()->sum('lp');
        $senate3_others = DB::table('senate')->where('senate', '=', '3')->get()->sum('others');

        return view('pages.senate_data',compact(
        'senate1_apc',
        'senate1_pdp',
        'senate1_nnpp',
        'senate1_lp',
        'senate1_others',
        'senate2_apc',
        'senate2_pdp',
        'senate2_lp',
        'senate2_nnpp',
        'senate2_others',
        'senate3_apc',
        'senate3_pdp',
        'senate3_lp',
        'senate3_nnpp',
        'senate3_others',

    ));
    }

    public function graph() {
        $apc_graph = President::sum('apc');
        $pdp_graph = President::sum('pdp');
        $nnpp_graph = President::sum('nnpp');
        $lp_graph = President::sum('lp');
        $others_graph = President::sum('others');
        return view('pages.graph', compact(
            'apc_graph',
            'pdp_graph',
            'nnpp_graph',
            'lp_graph',
            'others_graph',
        ));
    }
}