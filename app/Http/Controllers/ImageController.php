<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\ImageModel;
use Str;

class ImageController extends Controller
{
    public function home() {
        $images = ImageModel::all();
        return view('frontend.homepage.home', compact('images'));
    }

    public function list() {
        $data['getRecord'] = ImageModel::getRecord();
        $data['header_title'] = "List Image ";
        return view('frontend.homepage.list', $data);
    }

    public function add() {
        return view('frontend.homepage.add');
    }

    public function edit($id) {
        $photo = ImageModel::getSingle($id);
        if(!empty($photo)) {
            $data['photo'] = $photo;
            $data['header_title'] = "Edit Product";
            return view('frontend.homepage.edit', $data);
        }
    }

    public function insert(Request $request) {
        if(!empty($request->file('image'))) {
            foreach($request->file('image') as $value) {
                if($value->isValid()) {
                    $ext = $value->getClientOriginalExtension();
                    $randomStr = date('Ymdhis').Str::random(10);
                    $filename = strtolower($randomStr).'.'.$ext;
                    $value->move('upload/images/', $filename);

                    $imageupload = new ImageModel;
                    $imageupload->image_name = $filename;
                    $imageupload->image_extension = $ext;
                    $imageupload->save();
                    return redirect('frontend/homepage/list')->with('success', "Category Updated Successfully");
                }
            }
        }
    }

    public function update($id, Request $request) {
        $image = ImageModel::getSingle($id);
        if(!empty($request->file('image'))) {
            foreach($request->file('image') as $value) {
                if($value->isValid()) {
                    File::delete(public_path('upload/images/'.$image->image_name));
                    $ext = $value->getClientOriginalExtension();
                    $randomStr = date('Ymdhis').Str::random(10);
                    $filename = strtolower($randomStr).'.'.$ext;
                    $value->move('upload/images/', $filename);

                    $imageupload = ImageModel::getSingle($id);
                    $imageupload->image_name = $filename;
                    $imageupload->image_extension = $ext;
                    $imageupload->save();
                    return redirect('frontend/homepage/list')->with('success', "Category Updated Successfully");
                }
            }
        }
    }

    public function delete($id) {
        $image = ImageModel::getSingle($id);
        if(!empty($image->getImage())) {
            unlink(('upload/images/'.$image->image_name));
        }
        $image->delete();
        return redirect()->back()->with('success', "Product Image Successfully Deleted");
    }
}
