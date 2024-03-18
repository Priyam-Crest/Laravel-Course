@extends('layouts.app')

@section('title','The list of titles')
    
@section('content')
    
<div>
  {{-- @if(count($tasks)) --}}
  <nav class="mb-4">
    <a href="{{ route('tasks.create') }}" class="btn">Add Task!</a>
  </nav>

  @forelse ($tasks as $task)
  <div>
    <a href="{{ route('tasks.show', ['task' => $task->id]) }}"
      @class(['line-through' => $task->completed])>{{ $task->title }}</a>
  </div>
  @empty
      <div>There are no tasks !</div>
  @endforelse
</div>
{{ $tasks->links() }}
@endsection
