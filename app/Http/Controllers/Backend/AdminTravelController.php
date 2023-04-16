<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Trainer;
use App\Models\Travel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class AdminTravelController extends Controller
{
    public function getIndex(Request $request) {
        $search = $request->get('search');
        $data['title'] = 'List Travel';
        $data['travel'] = Travel::query()
            ->leftJoin('trainer','trainer.id','=','travel.traner_id')
            ->select('travel.*','trainer.name as trainer_name')
            ->where(function ($q) use ($search) {
                if (isset($search)) {
                    $q->where('name','like','%'.$search.'%');
                }
            })->paginate(10);
        return view('backend.page.travel.index',$data);
    }
    public function getAdd() {
        $data['title'] = 'Add Travel';
        $data['trainer'] = Trainer::all();

        return view('backend.page.travel.add',$data);
    }

    public function getEdit($id) {
        $data['title'] = 'Edit Travel';
        $data['row'] = Travel::find($id);
        $data['trainer'] = Trainer::all();

        return view('backend.page.travel.edit',$data);
    }
    public function postSave(Request $request) {

        $uploadPath = public_path("uploads");

        if (!$request->get('id')) {
            $save = new Travel();
        }else{
            $save = Travel::find($request->get('id'));
        }
        $save->name = $request->get('name');
        $save->traner_id = $request->get('traner_id');
        $save->price = $request->get('price');
        $save->seat_available = $request->get('seat_available');
        $save->description = $request->get('description');
        $save->slug = \Str::slug($request->get('name').'-'.time());
        if (!File::isDirectory($uploadPath)) {
            File::makeDirectory($uploadPath,755, true, true);
        }
        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $ext = $photo->getClientOriginalExtension();
            $rename = 'file_'.time().'.'.$ext;
            $save->photo = 'uploads/'.$rename;
            $photo->move($uploadPath,$rename);
        }
        $save->save();

        return redirect('admin/travel')->with(["message"=>"Success Simpan"]);
    }

    public function getDelete($id) {
        $find = Travel::find($id);
        $find->delete();

        return redirect()->back()->with(["message"=>"Success Hapus"]);
    }
}
