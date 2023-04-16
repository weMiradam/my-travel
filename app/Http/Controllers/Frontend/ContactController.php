<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function getIndex() {
        $data['page_title'] = "Contact - Storeies - Bandung Guide Travelling";
        $data['active'] = "contact";

        return view('frontend.page.contact',$data);
    }
}
