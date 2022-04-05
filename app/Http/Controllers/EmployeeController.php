<?php

namespace App\Http\Controllers;

use App\Models\employee;
use App\Models\employee_task;
use App\Models\tasks;
use App\Rules\emailValidation;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $employee = employee::all();

        return view('welcome');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $employee = employee::all();
        return view('login')->with('employee', $employee);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // $request->validate(['birthday'=>new ageValidation(18)]);
//        $profile = $request->input("profile");
        $name = $request->input("name");
        $username = $request->input("username");
        $email = $request->input("email");
        $age = $request->input("birthday");
        $password = $request->input("password");
        $department = $request->input("department");
        $branch = $request->input("branch");
        $admin = $request->input('admin');


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
        $employee = new employee();
//        $student->profile = $profile;
        $employee->fullname = $name;
        $employee->userName = $username;
        $employee->email = $email;
        $employee->password = $password;
        $employee->department = $department;
        $employee->branch = $branch;
        $employee->dob = $age;
        if ($admin != null) {
            $employee->pannel =1;
        }else{
        $employee->pannel =0;
     }

        $employee->save();
        return \redirect('login');
        //     }
        // }
    }


    /**
     * Display the specified resource.
     *
     * @param \App\Models\employee $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        //
        $request->validate(['email' => new emailValidation()]);
        $employee = $request->get('user');

            if (filled($employee)) {
                foreach ($employee as $employeeDataItem) {
                    session(['id' => $employeeDataItem['id']]);
                    session(['email' => $employeeDataItem['email']]);
                    session(['name' => $employeeDataItem['fullName']]);
                    session(['password' => $employeeDataItem['password']]);
                }
                $empid = session('id');
                $task = employee_task::where('employee_id', $empid)->get();
                $employeePannel = $request->get('user')->first();
                if ($employeePannel->pannel == 1) {
                    return redirect('tasks');
                }else {
                    return redirect('/');
                }
            } else {
                return redirect()->back()->with('alert', 'Have not any account.. please enter a valid mail');
            }
        }



    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\employee $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(employee $employee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\employee $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, employee $employee)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\employee $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(employee $employee)
    {
        //
        session()->flush();
        return view('login');
    }

    public function register()
    {
        $employee = employee::all();
        return view('register');
    }

    public function assign($id)
    {
        $task = tasks::find($id);
        $employee = employee::all();
        return view('assignTask', ['employee' => $employee], ['task' => $task]);
    }
}
