<?php

namespace App\Http\Controllers;

use App\Events\firstsEvent;
use App\Models\comments;
use App\Models\department;
use App\Models\employee;
use App\Models\employee_task;
use App\Models\pod;
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

        $task = employee::find(session('id'))->tasks()->get();
        $employee = employee::find(session('id'))->id;
        $taskid = employee::find(session('id'))->tasks()->get();
        $comment = comments::where('task_id',$taskid)->first();
        $taskCount = tasks::count('id');

        return view('welcome', ['task' => $task, 'employee' => $employee, 'taskid' => $taskid,'comment'=>$comment,'taskCount'=>$taskCount]);

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

        $profile = time() . '.' . $request->profile->extension();
        $request->profile->move(storage_path('app/public/images'), $profile);
        $name = $request->input("name");
        $username = $request->input("username");
        $email = $request->input("email");
        $age = $request->input("birthday");
        $password = $request->input("password");
        $department = $request->input("department");
        $pod = $request->input("pod");
        $admin = $request->input('admin');

        $department_id = department::all()->where('name', $department)->first()->id;
        $pod_id = pod::all()->where('name', $pod)->first()->id;
        if (empty($name)) {
            return back()->with('warning', 'Failed! Name is required');
        } elseif (empty($email)) {
            return back()->with('warning', 'Failed! email is required');
        } elseif (empty($password)) {
            return back()->with('warning', 'Failed! Password is required');
        } else {

            $employee = new employee();

            $employee->fullname = $name;
            $employee->userName = $username;
            $employee->email = $email;
            $employee->password = $password;
            $employee->dob = $age;
            $employee->pod_id = $pod_id;
            $employee->department_id = $department_id;
            $employee->profile =$profile;

            $employee->dob = $age;
            if ($admin != null) {
                $employee->pannel = 1;
            } else {
                $employee->pannel = 0;
            }

            $employee->save();
            return \redirect('login');
        }

    }


    /**
     * Display the specified resource.
     *
     * @param \App\Models\employee $employee
     * @return \Illuminate\Http\Response
     */
    public
    function show(Request $request)
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
                session(['profile' => $employeeDataItem['profile']]);
            }

//            $empid = session('id');

//            $task = employee_task::where('employee_id', $empid)->get();
            $employeePannel = $request->get('user')->first()->pannel;
            if (!$employeePannel) {

                return redirect('/home');
            } else {

                return redirect()->route('index');

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
    public
    function edit(employee $employee)
    {
        //
        event(
            new firstsEvent(employee::all()->toArray())

        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\employee $employee
     * @return \Illuminate\Http\Response
     */
    public
    function update(Request $request, employee $employee)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\employee $employee
     * @return \Illuminate\Http\Response
     */
    public
    function destroy(employee $employee)
    {
        //
        session()->flush();
        return redirect('login');
    }

    public function register()
    {
        $employee = employee::all();
        $department = department::all();
        $pod = pod::all();
        return view('register', ['department' => $department, 'pod' => $pod]);
    }

    public
    function assign($id)
    {
        $task = tasks::find($id);
        $employee = employee::all();
        return view('assignTask', ['employee' => $employee], ['task' => $task]);
    }
}
