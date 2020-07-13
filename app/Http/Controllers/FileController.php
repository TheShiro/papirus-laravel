<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
    
	public function upload(Request $request)
    {
        $filename = uniqid() . '_' . str_replace(' ', '_', $request->file->getClientOriginalName());
        $path = Storage::putFileAs('uploads', $request->file, $filename, 'public');

        if (Storage::exists($path)) {
            return $path;
        }

        return null;
    }

}
