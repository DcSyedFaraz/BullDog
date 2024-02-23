<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;

use App\Models\BulldogStrongerSlider;

use File;

class BulldogStrongerSliderController extends Controller
{
    public function index()
    {
        $data['sliders'] = BulldogStrongerSlider::get();
        return view('admin.slider.index', $data);
    }

    public function create(){
        $data['sliders'] = BulldogStrongerSlider::get();
        return view('admin.slider.create', $data);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'heading' => 'required',
            'description' => 'required',
            'image' => 'required|image:jpg,png',
        ]);
    
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
    
        $fileName1 = null;
    
        if ($request->hasFile('image')) {
            $fileName1 = time().'.'.$request->image->extension();
            $request->image->move(public_path('uploads/slider'), $fileName1);
        }
    
        
        BulldogStrongerSlider::create([
                'title' => $request->input('title'),
                'heading' => $request->input('heading'),
                'description' => $request->input('description'),
                'image' => $fileName1,
            ]);

        
    
        return redirect()->to('admin/bulldog_stronger_slider');
    }

    public function destroy($id)
    {
        $slider = BulldogStrongerSlider::find($id);
        File::delete(public_path('uploads/slider/').$slider->image);
            
        $slider->delete();
        
        

        return redirect()->back()->with('success', 'Data deleted successfully');
    }


// DO Work
    

    public function edit($id)
    {

        $data['slider'] = BulldogStrongerSlider::find($id);
        return view('admin.slider.edit', $data);
    }

    public function update($id, Request $request)
    {
        $slider = BulldogStrongerSlider::find($id);   
        
        $fileName1 = null;
    
        if ($request->hasFile('image')) {
            $fileName1 = time().'.'.$request->image->extension();
            $request->image->move(public_path('uploads/slider'), $fileName1);
            File::delete(public_path('uploads/slider/').$slider->image); 

        }
 
        $slider->update([
            'title' => $request->input('title'),
            'heading' => $request->input('heading'),
            'description' => $request->input('description'),
            'image' => $fileName1,
        ]);
    
        return redirect()->to('admin/bulldog_stronger_slider');
    }

    public function show($id)
    {

    $slider = BulldogStrongerSlider::findOrFail($id); // Retrieve the social link by its ID
    return view('admin.slider.edit', compact('slider')); // Pass the social link to the show view
    
    }
}
