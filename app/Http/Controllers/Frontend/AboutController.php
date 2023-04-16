<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function getIndex() {
        $data['page_title'] = "About - Storeies - Bandung Guide Travelling";
        $data['active'] = "about";

        return view('frontend.page.about',$data);
    }
}
