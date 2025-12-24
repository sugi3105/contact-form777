<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Contact;
use App\Models\Category;

class AdminController extends Controller
{
    public function index(Request $request)
    {
        $contacts = Contact::with('category')
           ->KeywordSearch($request->keyword)
           ->GenderSearch($request->gender)
           ->CategorySearch($request->category_id)
           ->DateSearch($request->date)
           ->paginate(7);

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
}
