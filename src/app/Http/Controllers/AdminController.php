<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Category;

class AdminController extends Controller
{
    public function index(Request $request)
    {
        $query = Contact::query();

        if ($request->filled('name')){
            $query->where('name', 'like', '%'. $request->name . '%');
        }

        if ($request->filled('email' )){
            $query->where('email', 'like', '%'. $request->email . '%');
        }

        if ($request->filled('gender')){
            $query->where('gender',  $request->gender);
        }
        
        if ($request->filled('category_id')){
            $query->where('category_id',  $request->category_id);
        }
        
        $contacts = $query->with('category_id')->paginate(10);
        $categories = Category::all();
        
    
    return view('admin.index', compact('contacts', 'categories'));
    }
    public function destroy($id)
    {
        Contact::find0rFail($id)->delete();
        return redirect()->route('admin.index');
    }
}
        

    //

