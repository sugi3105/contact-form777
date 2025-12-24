<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class ContactController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('contact.index', compact('categories'));
    }
    public function confirm(ContactRequest $request)
    {
       
         $contact = $request->all();
         $category = Category::find($request->category_id);
        return view('contact.confirm', compact('contact', 'category'));
    }
    public function store(ContactRequest $request)
    {
       
        Contact::create([
            'category_id' => $request->category_id,
            'name' => $request->name,
            'gender' => $request->gender,
            'email' => $request->email,
            'tel' => $request->tel,
            'postcode' => $request->postcode,
            'address' => $request->address,
            'building' => $request->building_name,
            'detail' => $request->detail,
        ]);
        return view('contact.thanks');
    }
    public function admin()
    {
        return view('contact.admin');
    }
}
