<?php

namespace App\Http\Controllers;

class ContactController extends Controller
{
    public function form(\Illuminate\Http\Request $request)
    {
        
        $rules = array(
            'username' => 'int'
        );

        $data = $request->validate($rules);
        
    }
}