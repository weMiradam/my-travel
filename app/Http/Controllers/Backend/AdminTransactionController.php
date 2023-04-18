<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\TrTravelOrder;
use Illuminate\Http\Request;

class AdminTransactionController extends Controller
{
    public function getIndex(Request $request) {
        $search = $request->get('search');
        $data['title'] = 'List Travel';
        $data['list'] = TrTravelOrder::query()
            ->leftJoin('travel','travel.id','=','tr_travel_order.travel_id')
            ->select('tr_travel_order.*','travel.name as travel_name')
            ->where(function ($q) use ($search) {
                if (isset($search)) {
                    $q->where('travel.name','like','%'.$search.'%');
                }
            })->paginate(10);
        return view('backend.page.transaction.index',$data);
    }

    public function getDelete($id) {
        $find = TrTravelOrder::find($id);
        $find->delete();

        return redirect()->back()->with(["message"=>"Success Hapus"]);
    }
}
