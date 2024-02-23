<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;

use App\Models\Dogs;

use App\Models\Weekly;

use File;

class DogProfileController extends Controller
{
    public function index()
    {
        $data['dogs'] = Dogs::get();
        return view('admin/dogs_profile/index', $data);
    }

    public function create(){
        $data['dogs'] = Dogs::get();
        return view('admin/dogs_profile/create', $data);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'description' => 'required',
            'main_image' => 'required|image:jpg,png',
            'main_video' => 'required',
            'other_image1' => 'required|image:jpg,png',
            'other_image2' => 'required|image:jpg,png',
            'other_image3' => 'required|image:jpg,png',
            'other_image4' => 'required|image:jpg,png',
            'pedigree_image' => 'required|image:jpg,png',
        ]);
    
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        
        $mainImage = null;
    
        if ($request->hasFile('main_image')) {
            $mainImage = time().'.'.$request->main_image->extension();
            $request->main_image->move(public_path('uploads/Dogsimage/'),  $mainImage);
        }

        $mainVideo = null;
    
        if ($request->hasFile('main_video')) {
            $mainVideo = time().'.'.$request->main_video->extension();
            $request->main_video->move(public_path('uploads/Dogsimage/'), $mainVideo);
        }

        $otherimage1 = null;
    
        if ($request->hasFile('other_image1')) {
            $otherimage1 = time() . '1.'.$request->other_image1->extension();
            $request->other_image1->move(public_path('uploads/Dogsimage/'), $otherimage1);
        }

        $otherimage2 = null;
    
        if ($request->hasFile('other_image2')) {
            $otherimage2 = time(). '2.'.$request->other_image2->extension();
            $request->other_image2->move(public_path('uploads/Dogsimage/'), $otherimage2);
        }


        $otherimage3 = null;
    
        if ($request->hasFile('other_image3')) {
            $otherimage3 = time().'3.'.$request->other_image3->extension();
            $request->other_image3->move(public_path('uploads/Dogsimage/'), $otherimage3);
        }

        $otherimage4 = null;
    
        if ($request->hasFile('other_image4')) {
            $otherimage4 = time().'4.'.$request->other_image4->extension();
            $request->other_image4->move(public_path('uploads/Dogsimage/'), $otherimage4);
        }

        $pedigreeimage = null;
    
        if ($request->hasFile('pedigree_image')) {
            $pedigreeimage = time() . '55.'.$request->pedigree_image->extension();
            $request->pedigree_image->move(public_path('uploads/Dogsimage/'), $pedigreeimage);
        }

       

        Dogs::create([
            'title' => request()->input('title'),
            'description' => request()->input('description'),
            'main_image' => $mainImage,
            'main_video' => $mainVideo,
            'other_image1' =>  $otherimage1,
            'other_image2' =>  $otherimage2,
            'other_image3' =>  $otherimage3,
            'other_image4' =>  $otherimage4,
            'pedigree_image' =>  $pedigreeimage,
        ]);

        return redirect()->to('admin/dogs_profile');
    }

    public function destroy($id)
    {
        $dogs = Dogs::find($id);
        File::delete(public_path('uploads/dogs/').$dogs->image);
            
        $dogs->delete();
        
        

        return redirect()->back()->with('success', 'Data deleted successfully');
    }

    public function edit($id)
    {

        $data['dogs'] = Dogs::find($id);
        return view('admin/dogs_profile/edit', $data);
    }

    
    public function update($id, Request $request)
    {
       
        
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'description' => 'required',
            'main_image' => 'required|image:jpg,png',
            'main_video' => 'required',
            'other_image1' => 'required|image:jpg,png',
            'other_image2' => 'required|image:jpg,png',
            'other_image3' => 'required|image:jpg,png',
            'other_image4' => 'required|image:jpg,png',
            'pedigree_image' => 'required|image:jpg,png',
        ]);
    
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        
        $mainImage = null;
    
        if ($request->hasFile('main_image')) {
            $mainImage = time().'.'.$request->main_image->extension();
            $request->main_image->move(public_path('uploads/Dogsimage/'),  $mainImage);
        }

        $mainVideo = null;
    
        if ($request->hasFile('main_video')) {
            $mainVideo = time().'.'.$request->main_video->extension();
            $request->main_video->move(public_path('uploads/Dogsimage/'), $mainVideo);
        }

        $otherimage1 = null;
    
        if ($request->hasFile('other_image1')) {
            $otherimage1 = time() . '1.'.$request->other_image1->extension();
            $request->other_image1->move(public_path('uploads/Dogsimage/'), $otherimage1);
        }

        $otherimage2 = null;
    
        if ($request->hasFile('other_image2')) {
            $otherimage2 = time(). '2.'.$request->other_image2->extension();
            $request->other_image2->move(public_path('uploads/Dogsimage/'), $otherimage2);
        }


        $otherimage3 = null;
    
        if ($request->hasFile('other_image3')) {
            $otherimage3 = time().'3.'.$request->other_image3->extension();
            $request->other_image3->move(public_path('uploads/Dogsimage/'), $otherimage3);
        }

        $otherimage4 = null;
    
        if ($request->hasFile('other_image4')) {
            $otherimage4 = time().'4.'.$request->other_image4->extension();
            $request->other_image4->move(public_path('uploads/Dogsimage/'), $otherimage4);
        }

        $pedigreeimage = null;
    
        if ($request->hasFile('pedigree_image')) {
            $pedigreeimage = time() . '55.'.$request->pedigree_image->extension();
            $request->pedigree_image->move(public_path('uploads/Dogsimage/'), $pedigreeimage);
        }
    
        $dogs = Dogs::find($id);  
        $dogs->update([
            'title' => request()->input('title'),
            'description' => request()->input('description'),
            'main_image' => $mainImage,
            'main_video' => $mainVideo,
            'other_image1' =>  $otherimage1,
            'other_image2' =>  $otherimage2,
            'other_image3' =>  $otherimage3,
            'other_image4' =>  $otherimage4,
            'pedigree_image' =>  $pedigreeimage,
        ]);
       
        return redirect()->to('admin/dogs_profile');
    }

    public function show($id)
    {

    $dogs = Dogs::findOrFail($id); // Retrieve the dogs link by its ID
    return view('admin/dogs_profile/edit', compact('dogs')); // Pass the dogs link to the show view
    
    }

    public function weekly()
    {

        $data['weeklys'] = Weekly::get();
        return view('/admin/weekly/index', $data);

    }
   

}
