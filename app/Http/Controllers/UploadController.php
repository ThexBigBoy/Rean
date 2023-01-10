<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function index()
    {
        return view('upload');
    }

    public function save(Request $r)
    {
        //go to config/filesystems.php
        //custom = clone public and rename it to custom or whatever you want and change 'app/public' to '../public'
        // $file= $r->file('photo') -> store('upload', 'custom');
        
        if($r->photo)
        {
            $file= $r->file('photo') -> store('uploads', 'custom');
            $r->session()->flash('success', 'File has been Uploaded');
            return redirect('upload');
            
        }
        else
        {
            return redirect('upload')
                ->with('error', 'Please select a file!');
        }
    }

}
