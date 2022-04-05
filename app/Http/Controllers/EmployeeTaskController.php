<?php

namespace App\Http\Controllers;

use App\Models\employee_task;
use App\Models\project;
use App\Models\tasks;
use Illuminate\Http\Request;

class EmployeeTaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tasks = tasks::all();
        $project = project::all();
        return view('tasksList',['task'=>$tasks ,'project'=>$project]);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\employee_task  $employee_task
     * @return \Illuminate\Http\Response
     */
    public function show(employee_task $employee_task)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\employee_task  $employee_task
     * @return \Illuminate\Http\Response
     */
    public function edit(employee_task $employee_task)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\employee_task  $employee_task
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, employee_task $employee_task)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\employee_task  $employee_task
     * @return \Illuminate\Http\Response
     */
    public function destroy(employee_task $employee_task)
    {
        //
    }
}
