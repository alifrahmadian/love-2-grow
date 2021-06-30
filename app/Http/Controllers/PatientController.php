<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input; 
use App\Models\Patient;
use App\Models\User;
use Auth;
use DB;
use Carbon\Carbon;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $patients = Patient::find($patient_id);
        // $patient = Patient::find($user_id);

        // return view('member.add_patient',['patient'=>$patient]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($user_id)
    {   
        $user = User::find($user_id);

        return view('member.add_patient', ['user'=>$user]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $request->validate([
            'full_name' => 'required|string',
            'nickname' => 'required|string',
            'gender' => 'required',
            'date_of_birth' => 'required|date',
            'gestation' => 'required|integer',
            'birth_weight' => 'required|integer',
            'food_allergy' => 'nullable|string',
            'drug_allergy' => 'nullable|string',
            'other_allergy' => 'nullable|string'

        ]);

        $patient = Patient::create([
            // 'user_id' => $request->input(Auth::user()->user_id),
            'user_id' => $request->input('user_id'),
            'full_name' => $request->input('full_name'),
            'nickname' => $request->input('nickname'),
            'gender' => $request->input('gender'),
            'date_of_birth' =>
             $request->input('date_of_birth'),
             'gestation' => $request->input('gestation'),
             'birth_weight' => $request->input('birth_weight'),
             'food_allergy' => $request->input('food_allergy'),
             'drug_allergy' => $request->input('drug_allergy'),
             'other_allergy' => $request->input('other_allergy')
        ]);

        return redirect("/member/{user_id}/patient_data");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($user_id)
    {
        $user = User::find($user_id);
        $patients = Patient::all();
        $dateOfBirth = Patient::where('patient_id','user_id')->value('date_of_birth');

        return view('member.patient_data', ['user'=>$user, 'patients'=>$patients, 'dateOfBirth'=>$dateOfBirth]);
    }

    public function showAll(){
        $patients = Patient::all();
        return $patients;

        return view('dashboard.dashboardPages.patient_data');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
