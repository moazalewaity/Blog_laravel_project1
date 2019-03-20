<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Setting;

class Settings extends Controller
{
    public function setting() {

    	$Setting = Setting::all()->first();
		return view('admin.settings',compact('Setting'));
	}
	public function setting_save() {
		
		$data = request()->except(['_token', '_method']);
		Setting::orderBy('id', 'desc')->create($data);
		session()->flash('success', 'admin.updated_record');
		return redirect('admin/settings');
	}
}
