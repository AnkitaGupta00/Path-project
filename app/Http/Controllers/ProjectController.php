<?php

namespace App\Http\Controllers;

use App\Models\department;
use App\Models\employee;
use App\Models\pod;
use App\Models\project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $project = project::all();
        return view('Index', ['project' => $project]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        //
        $project = project::find($id)->status;
        if ($project == 0) {
            $status = 'Processing';
        } else {
            $status = 'complete';
        }
        return redirect()->back();
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
        $pro = $request->input('project');


        if ($pro != null) {
            $project = new project();
            $project->title = $pro;
            $project->save();

        }
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\project $project
     * @return \Illuminate\Http\Response
     */
    public function show(project $project)
    {
        //

        $employee1 = employee::where('department_id', 2)->get();
        $employee2 = employee::where('pod_id', 1)->get();
        return view('pod', ['employee' => $employee1, 'employee2' => $employee2]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\project $project
     * @return \Illuminate\Http\Response
     */
    public function edit(project $project)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\project $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, project $project)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\project $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(project $project)
    {
        //
    }

    public function department(Request $request)
    {

        $depart = $request->input('department');
        if ($depart != null) {
            $department = new department();
            $department->name = $depart;
            $department->status = 1;
            $department->save();
            return redirect()->back();
        }
    }

    public function pod(Request $request)
    {

        $pod = $request->input('pod');
        if ($pod != null) {
            $pods = new pod();
            $pods->name = $pod;
            $pods->save();
            return redirect()->back();
        }
    }
}
