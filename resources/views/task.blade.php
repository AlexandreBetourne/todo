@extends('layouts.app')

@section('content')

  <div class="container">
    <section class="section">
      <form class="" action="{{ route('task.post') }}" method="post">
        {{ csrf_field() }}
        <input type="text" name="task" value="" required>
        <button type="submit" name="button">sub</button>
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
