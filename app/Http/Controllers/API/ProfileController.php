<?php

namespace App\Http\Controllers\API;


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


    
    public function GetIdentity()
    {
        $profile_identity = profile_identity::latest('created_at')->first();
        return response()->json($profile_identity);
    }

    public function GetExperience()
    {
        $search_text = request()->query('profile_name');
        $profile_experience = profile_experience::where('name','LIKE','%'.$search_text.'%')->get();
        return response()->json($profile_experience);
    }



    public function EditIdentity($id, Request $request)
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

        return response()->json([
            'status' => 422,
            'message' => 'Please, Make sure all fields are completed!!'
        ]);
    }


}
