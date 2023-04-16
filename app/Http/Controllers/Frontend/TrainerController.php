<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Trainer;
use Illuminate\Http\Request;

class TrainerController extends Controller
{
    public function getIndex() {
        $data['page_title'] = "Trainer - Storeies - Bandung Guide Travelling";
        $data['active'] = "trainer";
        $data['trainer'] = Trainer::all();

        return view('frontend.page.trainer-list',$data);
    }
}
