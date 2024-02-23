<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;

use File;

class ContactController extends Controller
{

    public function index()
    {
        $data['contacts'] = Contact::get();
        return view('admin.contact', $data);
    }

    

    public function destroy($id)
    {
        $contact = Contact::find($id);
        File::delete(public_path('uploads/contact/').$contact->image);
            
        $contact->delete();
        
        return redirect()->back()->with('success', 'Data deleted successfully');
    }
   
}
