@extends('layouts.app')

@section('content')
<section class="section">
  <div class="container">
    @foreach ($tasks as $task)
    <div class="notification is-success">

      <a href="/task/{{ $task->id }}" class="delete"></a>
      <p class="is-size-4">{{ $task->name }}</p>
      <p>Created at : {{ $task->created_at }}</p>
      <p class="is-marginless	">Updated at : {{ $task->updated_at }}</p>
    </div>
    @endforeach
  </div>
</section>
@endsection
