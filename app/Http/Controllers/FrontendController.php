<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cms;
use App\Models\Partner;
use App\Models\Testimonial;
use App\Models\Contact;
use App\Models\Gallery;
use App\Models\Dogs;
use App\Models\BulldogStrongerSlider;

class FrontendController extends Controller
{
    public function home()
    {
        $homee = Cms::where('page', 'like', '%Home Section# %')->get()->unique('page');
        $home = count($homee) + 1;
        for($homei = 0; $homei < $home; $homei++)
        {
            $page = 'Home Section# '.$homei;
            // print_r($page);
            $section = Cms::where('page',$page)->get();
            for($i = 0; $i < count($section); $i++)
            {
                $data['section'. $homei . $i] = json_decode($section[$i]->meta_value);
            }
        }
        // die;
        $data['partner'] = Partner::get();
        $data['testimonials'] = Testimonial::get();
        
        return view('home',$data);
    }

    

    public function about()
    {
        $aboute = Cms::where('page', 'like', '%About Section# %')->get()->unique('page');
        $about = count($aboute) + 1;
        for($abouti = 0; $abouti < $about; $abouti++)
        {
            $page = 'About Section# '.$abouti;
            // print_r($page);
            $section = Cms::where('page',$page)->get();
            for($i = 0; $i < count($section); $i++)
            {
                $data['section'. $abouti . $i] = json_decode($section[$i]->meta_value);
            }
        }
        // die;
        $data['partner'] = Partner::get();
        $data['testimonials'] = Testimonial::get();
        
        return view('about',$data);
    }

    public function get_a_puppy()
    {
        $get_a_puppye = Cms::where('page', 'like', '%G.A.P Section# %')->get()->unique('page');
        $get_a_puppy = count($get_a_puppye) + 1;
        for($get_a_puppyi = 0; $get_a_puppyi < $get_a_puppy; $get_a_puppyi++)
        {
            $page = 'G.A.P Section# '.$get_a_puppyi;
            // print_r($page);
            $section = Cms::where('page',$page)->get();
            for($i = 0; $i < count($section); $i++)
            {
                $data['section'. $get_a_puppyi . $i] = json_decode($section[$i]->meta_value);
            }
        }
        // die;
        $data['partner'] = Partner::get();
        $data['testimonials'] = Testimonial::get();
        
        return view('get_a_puppy',$data);

        // return view('get_a_puppy');
    }

    public function available_pups()
    {
        
        $homee = Cms::where('page', 'like', '%Pups Available Section# %')->get()->unique('page');
        $home = count($homee) + 1;
        for($homei = 0; $homei < $home; $homei++)
        {
            $page = 'Pups Available Section# '.$homei;
            // print_r($page);
            $section = Cms::where('page',$page)->get();
            for($i = 0; $i < count($section); $i++)
            {
                $data['section'. $homei . $i] = json_decode($section[$i]->meta_value);
            }
        }
        // die;
        $data['partner'] = Partner::get();
        $data['gallerys'] = Gallery::get();
        
        return view('available_pups',$data);

        // return view('available_pups');
    }

    public function planned_breeding()
    {
        $homee = Cms::where('page', 'like', '%Planned Breed Section# %')->get()->unique('page');
        $home = count($homee) + 1;
        for($homei = 0; $homei < $home; $homei++)
        {
            $page = 'Planned Breed Section# '.$homei;
            // print_r($page);
            $section = Cms::where('page',$page)->get();
            for($i = 0; $i < count($section); $i++)
            {
                $data['section'. $homei . $i] = json_decode($section[$i]->meta_value);
            }
        }
        // die;
        $data['partner'] = Partner::get();
        $data['testimonials'] = Testimonial::get();
        
        return view('planned_breeding',$data);

        // return view('planned_breeding');
    }

    public function bulldog_stronger()
    {
        $homee = Cms::where('page', 'like', '%Bulldog Stronger Section# %')->get()->unique('page');
        $home = count($homee) + 1;
        for($homei = 0; $homei < $home; $homei++)
        {
            $page = 'Bulldog Stronger Section# '.$homei;
            // print_r($page);
            $section = Cms::where('page',$page)->get();
            for($i = 0; $i < count($section); $i++)
            {
                $data['section'. $homei . $i] = json_decode($section[$i]->meta_value);
            }
        }
        // die;
        $data['partner'] = Partner::get();
        $data['sliders'] = BulldogStrongerSlider::get();
        
        return view('bulldog_stronger',$data);

        // return view('bulldog_stronger');
    }

    public function puppy_questionnaire()
    {
        return view('puppy_questionnaire');
    }

    public function visitors_login()
    {
        return view('visitors_login');
    }
    
    public function join_bulldog_stronger()
    {
        return view('join_bulldog_stronger');
    }

    public function contact_us(){
        return view('contact_us');
    }

    public function contact_submit(Request $request)
    {
        $input = $request->except(['_token'],$request->all());
        $data = Contact::create($input);
        return redirect()->back()->with(['success'=>true,'message'=>'Your Request has been Sent']);
    }


    public function junior(){

        $dogs = Dogs::get();
        return view('junior');
    }
}
