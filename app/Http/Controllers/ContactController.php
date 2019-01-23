<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\contact;

class ContactController extends Controller
{
    public function store(Request $request)
    {
    	   	$validatedData = $request->validate([
                'name' => 'required|string|max:50',
                'email' => 'required|email|max:50' ,
                'subject' => 'required|string|max:100',
                'message' => 'required|string|max:500',
            ]);
            $contact = new contact($validatedData) ; 
           	$contact->save() ; 
           	return view('index') ; 
    }
}
