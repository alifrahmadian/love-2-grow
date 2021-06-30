<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Auth\RegisterController;


class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/login';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'phone_number' => ['required', 'string'],
            'address' => ['required'],
            'member_job' => ['required'],
            'patient_relation' => ['required']
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    // protected function create(array $data)
    // {   
    //     dd($data);
    //     return User::create([
    //         'name' => $data['name'],
    //         'email' => $data['email'],
    //         'password' => Hash::make($data['password']),
    //         'phone_number' => $data['phone_number'],
    //         'address' => $data['address'],
    //         'member_job' => $data['member_job'],
    //         'patient_relation' => $data['patient_relation']
    //     ]);
    // }

        public function register(Request $request)
        {   
            // dd($request);
            $user = User::create([
                'name' => $request['name'],
                'email' => $request['email'],
                'password' => Hash::make($request['password']),
                'phone_number' => $request['phone_number'],
                'address' => $request['address'],
                'member_job' => $request['member_job'],
                'patient_relation' => $request['patient_relation'],
        
            ]);

            return view('auth.login');
        }

        public function show(){
            $users = User::all();
            return $users;

            return view('dashboard.dashboardPages.member_data');
        }

        // public function showCertainUser($user_id){
        //     $user = User::find($user_id);

        //     return $user;

        //     return view('dashboard.dashboardPages.memberData.edit_member');
        // }

        public function destroy($user_id){
            $user = User::find($user_id);
            $user->delete();
            return response()->json([
                'status' => 200,
                'message' => "Data member berhasil dihapus"
            ]);
        }

        public function edit($user_id){
            $user = User::find($user_id);

            return $user;
            return view('dashboard.dashboardPages.memberData.edit_member');
        }

        public function update(Request $request, $user_id) {
        //    $request->validate([
        //         'name' => ['string', 'max:255'],
        //         'email' => ['string', 'email', 'max:255', 'unique:users'],
        //         'password' => ['string', 'min:8'],
        //         'phone_number' => ['string'],
        //         'address' => ['string']
        //     ]);

            try {
                 $user = User::where('user_id', $user_id)->update([
                    'name' => $request->input('name'),
                    'email' => $request->input('email'),
                    // 'password' => $request->input('password'),
                    'phone_number' => $request->input('phone_number'),
                    'address' => $request->input('address')
                ]);

                $response['message']= "Data berhasil diperbarui!";
                $response['success']= true;

            } catch (\Exception $e) {
                $response['message']= $e->getMessage();
                $response['success']= false;
            }

          

            return $response;
            

        }

        


}
