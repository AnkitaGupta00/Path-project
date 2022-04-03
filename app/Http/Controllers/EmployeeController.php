<?php

namespace App\Http\Controllers;

use App\Models\employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    //
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $student = employee::all();
        // $subjects = subject::all();

        return view('register');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {

        // $request->validate(['birthday'=>new ageValidation(18)]);
        $profile = $request->input("profile");
        $name = $request->input("Name");
        $username = $request->input("userName");
        $email = $request->input("Email");
        $age = $request->input("dob");

        $password = $request->input("password");
        // $age = $request->input("birthday");
        // $section = $request->input("section");
        // $subjectList = $request->input("subject");
        // $subjects = implode(",", (array)$subjectList);

        // $student = employee::where('email', $email)->first();


        // if ($student != null) {
        //     return redirect()->back()->with('alert', 'Registration failed!  User already exist..');
        // } else {
        //     if (empty($name)) {
        //         return back()->with('warning', 'Failed! Name is required');
        //     } elseif (empty($email)) {
        //         return back()->with('warning', 'Failed! email is required');
        //     } elseif (empty($password)) {
        //         return back()->with('warning', 'Failed! Password is required');
        //     } else {
        //         \dd('dkcbusdvc');
                $student = new employee();
                $student->profile = $profile;
                $student->Name = $name;
                $student->userName = $username;
                $student->email = $email;
                $student->dob = $age;
                // dd($student->dob);

                $student->password = $password;

                $student->save();


                return redirect('/');
        //     }
        // }
    }
}
