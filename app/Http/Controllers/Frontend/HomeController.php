<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Trainer;
use App\Models\Travel;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function getIndex() {
        $data['page_title'] = "Storeies - Bandung Guide Travelling";
        $data['active'] = "home";
        $data['trainer'] = Trainer::query()->take(3)->get();
        $data['travel'] = Travel::query()->take(3)->get();

        return view('frontend.page.home',$data);
    }
}
