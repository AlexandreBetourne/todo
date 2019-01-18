<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Task;

class TaskController extends Controller
{
  public function index(Task $task)
  {
      $tasks = $task->all();
      return view('task', ['tasks' => $tasks]);
  }

  public function post()
  {
      return view('task');
  }

  public function delete(Task $task, Request $request)
  {
      $task->find($request->id)->delete();
      return redirect('/task');
  }
}
