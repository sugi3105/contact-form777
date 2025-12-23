<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class ContactController extends Controller
{
    public function index()
    {
        $categorues = Category::all();
        return view('contact.index', compact('categories'));
    }
    public function confirm(Request $request)
    {
         $contact = $request->all();
         $catagory = Category::find($request->category_id);
        return view('contact.confirm', compact('contact', 'category'));
    }
    public function store(Request $request)
    {
        //Contact::create($request->all());
        Contact::create([
            'category_id' => $request->category_id,
            'name' => $request->name,
            'gender' => $request->gender,
            'email' => $request->email,
            'postcode' => $request->postcode,
            'address' => $request->address,
            'buildling' => $request->buildling_name,
            'detail' => $request->detail,
        ]);
        return view('contact.thanks');
    }
    public function admin()
    {
        return view('contact.admin');
    }
}
