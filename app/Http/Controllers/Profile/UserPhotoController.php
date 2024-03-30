<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserPhotoController extends Controller
{
    public function update(Request $request){

        
    $validated = $request->validate([
        'user_image' => 'required',
        
    ]);
        dd($request->all());
    }
}
