<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Travel;
use Illuminate\Http\Request;

class TravelController extends Controller
{
    public function getIndex() {
        $data['page_title'] = "Travel - Storeies - Bandung Guide Travelling";
        $data['active'] = "travel";
        $data['travel'] = Travel::all();

        return view('frontend.page.travel-list',$data);
    }
    public function getDetail($id) {
        $data['page_title'] = "Travel Detail - Storeies - Bandung Guide Travelling";
        $data['active'] = "travel";
        $data['travel'] = Travel::where('slug',$id)
            ->leftJoin('trainer','trainer.id','=','travel.traner_id')
            ->select('travel.*','trainer.name as trainer_name')
            ->firstOrFail();

        return view('frontend.page.travel-detail',$data);
    }
}
