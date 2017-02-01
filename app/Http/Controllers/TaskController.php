<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Task;

class TaskController extends Controller
{
    public function index(){
       // $tasks = DB::table('tasks')->get();
        $tasks = Task::all();
        //return $tasks;
       // dd($tasks);
        return view('tasks.index',compact('tasks'));//compact('tasks') == with('tasks',$tasks)
    }

    public function showTask($id){
        //$task = DB::table('tasks')->find($id);
        $task = Task::find($id);
        return view('tasks.show')->with(compact('task'));
    }

    public function addTask(){
        //$task = DB::table('tasks')->find($id);
        $task = new Task();
        $task->body = 'Learn this shit';
        $task->save();
        return 'ok';
    }
}
