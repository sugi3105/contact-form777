<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact.index');
    }
    public function confirm(Request $request)
    {
         $inputs = $request->all();
        return view('contact.confirm', compact('inputs'));
    }
    public function store(Request $request)
    {
        Contact::create($request->all());
        return view('contact.thanks');
    }
    public function admin()
    {
        return view('contact.admin');
    }
}
