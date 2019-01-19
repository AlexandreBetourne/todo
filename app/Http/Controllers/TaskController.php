<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Task;

class TaskController extends Controller
{
  public function index(Task $task)
  {
    if (Auth::check()) {
      $tasks = $task::paginate(5);
      return view('task', ['tasks' => $tasks]);
    } else {
      return redirect('/login');
    }

  }

  public function post(Task $task, Request $request)
  {
    if (Auth::check()) {
      $task->forceCreate([
        'name' => $request->input('task')
      ]);
      return redirect('/task');
    } else {
      return redirect('/login');
    }
  }

  public function delete(Task $task, Request $request)
  {
    if (Auth::check()) {
      $task->find($request->id)->delete();
      return redirect('/task');
    } else {
      return redirect('/login');
    }

  }
}
