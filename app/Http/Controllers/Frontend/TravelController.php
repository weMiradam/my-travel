<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Travel;
use App\Models\TrTravelOrder;
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
    public function postOrder(Request $request) {
        $new = new TrTravelOrder();
        $new->code_transaction = "TRX-".time();
        $new->travel_id = $request->get('travel_id');
        $new->name = $request->get('name');
        $new->no_phone = $request->get('no_phone');
        $new->email = $request->get('email');
        $new->ticket_qty = $request->get('ticket_qty');
        $new->date_booking = $request->get('date_booking');
        $new->session_time = $request->get('session');
        $new->save();

        return redirect()->back()->with(["msg"=>"Berhasil melakukan pembelian, silahkan tunggu hingga admin menghubungi anda.","msg_type"=>"success"]);
    }
}
