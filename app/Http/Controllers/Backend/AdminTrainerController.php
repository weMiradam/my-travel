<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Trainer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class AdminTrainerController extends Controller
{
    public function getIndex(Request $request) {
        $search = $request->get('search');
        $data['title'] = 'List Trainer';
        $data['trainer'] = Trainer::query()
            ->where(function ($q) use ($search) {
                if (isset($search)) {
                    $q->where('name','like','%'.$search.'%');
                }
            })->paginate(10);
        return view('backend.page.trainer.index',$data);
    }
    public function getAdd() {
        $data['title'] = 'Add Trainer';
        $data['trainer'] = DB::table('trainer')->get();

        return view('backend.page.trainer.add',$data);
    }

    public function getEdit($id) {
        $data['title'] = 'Edit Trainer';
        $data['row'] = Trainer::find($id);

        return view('backend.page.trainer.edit',$data);
    }
    public function postSave(Request $request) {

        $uploadPath = public_path("uploads");

        if (!$request->get('id')) {
            $save = new Trainer();
        }else{
            $save = Trainer::find($request->get('id'));
        }
        $save->name = $request->get('name');
        $save->info_name = $request->get('info_name');
        $save->instagram = $request->get('instagram');
        $save->twitter = $request->get('twitter');
        $save->facebook = $request->get('facebook');
        $save->email = $request->get('email');
        $save->description = $request->get('description');
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

        return redirect('admin/trainer')->with(["message"=>"Success Simpan"]);
    }

    public function getDelete($id) {
        $find = Trainer::find($id);
        $find->delete();

        return redirect()->back()->with(["message"=>"Success Hapus"]);
    }
}
