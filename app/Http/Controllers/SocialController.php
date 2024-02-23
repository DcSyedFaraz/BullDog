<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;

use App\Models\Social;

use File;

class SocialController extends Controller
{
    public function create(){

        $data['socials'] = Social::get();
        return view('admin.social.create', $data);
    }

    public function index(){
        $data['socials'] = Social::get();
        return view('admin.social.index', $data);

    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'social_link' => 'required',
            'image' => 'required|image:jpg,png',
        ]);
    
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
    
        $fileName1 = null;
    
        if ($request->hasFile('image')) {
            $fileName1 = time().'.'.$request->image->extension();
            $request->image->move(public_path('uploads/social'), $fileName1);
        }
    
        
            Social::create([
                'social_link' => $request->input('social_link'),
                'image' => $fileName1,
            ]);

        
    
        return redirect()->to('admin/social');
    }
    
 

    public function edit($id)
    {

        $data['social'] = Social::find($id);
        return view('admin.social.edit', $data);
    }

    public function update($id, Request $request)
    {
        $social = Social::find($id);   
        
        $fileName1 = null;
    
        if ($request->hasFile('image')) {
            $fileName1 = time().'.'.$request->image->extension();
            $request->image->move(public_path('uploads/social'), $fileName1);
        File::delete(public_path('uploads/social/').$social->image); 

        }
    
    

        
        $social->update([
            'social_link' => $request->input('social_link'),
            'image' => $fileName1,
        ]);
    

    return redirect()->to('admin/social');
    }

    public function show($id)
    {

    $social = Social::findOrFail($id); // Retrieve the social link by its ID
    return view('admin.social.edit', compact('social')); // Pass the social link to the show view
    
    }

    public function destroy($id)
    {
        $social = Social::find($id);
        File::delete(public_path('uploads/social/').$social->image);
            
        $social->delete();
        
        

        return redirect()->back()->with('success', 'Data deleted successfully');
    }
}
