<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
    
	public function upload(Request $request)
    {
        $filename = uniqid() . '_' . str_replace(' ', '_', $request->file->getClientOriginalName());
        $path = Storage::disk('public')->putFileAs('uploads', $request->file, $filename);

        if (Storage::disk('public')->exists($path)) {
            return $path;
        }

        return null;
    }

}
