<?php

namespace App\Http\Controllers\API;

use App\Models\profile_page;
use App\Models\profile_identity;
use App\Models\profile_experience;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Facades\Image;
use Intervention\Image\Facades\Image as FacadesImage;;

class ProfileController extends Controller
{


    // public function SaveProfile(Request $request){
    //     $profile = new profile_page;
    //     $profile ->name = $request -> input ('name');
    //     $profile ->age = $request -> input ('age');
    //     $profile ->job = $request -> input ('job');
    //     $profile ->startdate = $request -> input ('startdate');
    //     $profile ->enddate = $request -> input ('enddate');
    //     $profile ->companyname = $request -> input ('companyname');

    //     if($request->hasfile('companylogo')){
    //         $file = $request -> file('companylogo');
    //         $extention = $file->getClientOriginalExtension();
    //         $filename = time().'.'.$extention;
    //         $file->move('profile_images/CompanyLogo/',$filename);
    //         $profile->companylogo = $filename;
    //     }

    //     $profile ->jobdescript = $request -> input ('jobdescript');

    //     if($request->hasFile('image')){
    //         $file = $request -> file('image');
    //         $extention = $file->getClientOriginalExtension();
    //         $filename = time().'.'.$extention;
    //         $file->move('profile_images/profile/',$filename);
    //         $profile->image = $filename;
    //     }

    //     $profile ->save();

    //     return response() -> json([
    //         'status'=> 200,
    //         'message'=>'Student added successfully'
    //     ]);
    // }

    public function SaveIdentity(Request $request)
    {


        $request->validate([
            'name' => 'required',
            'age' => 'required',
        ]);

        $profile_identity = new profile_identity;
        $profile_identity->name = $request->input('name');
        $profile_identity->age = $request->input('age');
        $profile_identity->image = $request->input('image');

        $profile_identity->save();

        return response()->json([
            'status' => 200,
            'message' => 'Identity added successfully'
        ]);
    }

    public function SaveExperienceEndDate(Request $request)
    {
        $request->validate([
            'name'  => 'required',
            'job'  => 'required',
            'startdate'  => 'required',
            'enddate'  => 'required',
            'companyname'  => 'required',
            'jobdescript'  => 'required'
        ]);

        $profile_experience = new profile_experience;
        $profile_experience->name = $request->input('name');
        $profile_experience->job = $request->input('job');
        $profile_experience->startdate = $request->input('startdate');
        $profile_experience->enddate = $request->input('enddate');
        $profile_experience->companyname = $request->input('companyname');
        $profile_experience->companylogo = $request->input('companylogo');
        $profile_experience->jobdescript = $request->input('jobdescript');

        $profile_experience->save();

        return response()->json([
            'status' => 200,
            'message' => 'Experience added successfully'
        ]);
    }

}
