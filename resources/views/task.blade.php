@extends('layouts.app')

@section('content')

  <div class="container">
    <section class="section">
      <form class="" action="{{ route('task.post') }}" method="post">
        {{ csrf_field() }}
        <div class="field is-grouped">
          <p class="control is-expanded">
            <input class="input" name="task" type="text" placeholder="New task">
          </p>
          <p class="control">
            <button class="button is-warning">Submit</button>
          </p>
        </div>

      </form>
    @foreach ($tasks as $task)
    <div class="notification is-success">

      <a href="/task/{{ $task->id }}" class="delete"></a>
      <p class="is-size-4">{{ $task->name }}</p>
      <p>Created at : {{ $task->created_at }}</p>
      <p class="is-marginless	">Updated at : {{ $task->updated_at }}</p>
    </div>
    @endforeach
    </section>
    {{ $tasks }}
  </div>




@endsection
