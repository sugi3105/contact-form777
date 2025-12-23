<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Contact;

class AdminController extends Controller
{
    public function index(Request $request)
    {
    $query = Contact::query();

      if ($request->filled('name')) {
        $query->where('name', 'like', '%' . $request->name . '%');
    }

     if ($request->filled('email')) {
        $query->where('email', 'like', '%' . $request->name . '%');
    }

    $contacts = $query->paginate(10);

    return view('admin.index', compact('contacys'));

    public function destroy($id)
    {
        Contact::find0rFail($id)->delete();
        return redirect()->route('admin.index');
    }
}


    //
}
