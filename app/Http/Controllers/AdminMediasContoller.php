<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Photo;
use Illuminate\Support\Facades\Session;

class AdminMediasContoller extends Controller
{
     public function index()
    {
    	$photos = Photo::paginate(6);
    	return view('admin.media.index' , compact('photos'));
    }

    public function create()
    {
    	return view('admin.media.create');
    }

    public function store(Request $request)
    {
    	$file = $request->file('file');
        $name = time() . $file->getClientOriginalName();
        $file->move('images' , $name);
        Photo::create(['file'=>$name]);

    }


      public function destroy($id)
    {
         $photo = Photo::FindOrFail($id);
        unlink(public_path() . $photo->file);
        $photo->delete();
        Session::flash('delete_photo' , 'The photo has been deletd');
        return back();
    }

}
