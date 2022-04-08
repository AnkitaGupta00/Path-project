<?php

namespace App\Http\Controllers;

use App\Models\comments;
use App\Models\commits;
use App\Models\department;
use App\Models\employee;
use App\Models\employee_task;
use App\Models\pod;
use App\Models\project;
use App\Models\tasks;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $task = tasks::all();
        $project = project::all();
        return view('makeTask', ['project' => $project]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id, $taskid)
    {
        //
        $taskid = tasks::find($taskid)->id;
        $employee = employee::find($id)->id;
        $assign = new employee_task();
        $assign->employee_id = $employee;
        $assign->task_id = $taskid;
        $assign->save();
        return redirect('tasks');

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
        $title = $request->input('title');
        $description = $request->input('decs');
        $projecttitle = $request->input('project');

        $date = $request->input('exp');
        $code = $request->input('code');

        $project = project::where('title', $projecttitle)->first();
        $projectid = $project->id;;
        if ($title != null) {
            $task = new tasks();
            $task->title = $title;
            $task->decs = $description;
            $task->last_date = $date;
            $task->security_code = $code;
            $task->status = 'success';
            $task->project_id = $projectid;

            $task->save();
            return redirect()->route('index');
        } else {

            return redirect()->back()->with('alert', 'Give a valid title');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\tasks $tasks
     * @return \Illuminate\Http\Response
     */
    public function show(tasks $tasks)
    {
        //
        $status = tasks::all();
        dd($status);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\tasks $tasks
     * @return \Illuminate\Http\Response
     */
    public function edit(tasks $tasks)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\tasks $tasks
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tasks $tasks)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\tasks $tasks
     * @return \Illuminate\Http\Response
     */
    public function destroy(tasks $tasks)
    {
        //
    }

    public function task()
    {
        $tasks = tasks::all();
        $project = project::all();
        $department = department::all();
        $pod = pod::all();


        return view('tasksList', ['task' => $tasks, 'project' => $project, 'department' => $department, 'pod' => $pod]);
    }
    public function createTask(Request $request , $taskid , $empid)
    {

        $commit = $request->input('commit');
        if($commit) {
            $commitTask = new comments();
            $commitTask->comment = $commit;
            $commitTask->employee_id = $empid;
            $commitTask->task_id = $taskid;

            $commitTask->save();

            return redirect('/home');
        }
    }
}
