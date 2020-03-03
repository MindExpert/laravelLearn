@extends('layout')

@section('content')
    <h1 class="title">{{ $project->title}}</h1>
    <div class="content">{{ $project->description}}</div>
    <p>
        <a href="/projects/{{ $project->id }}/edit">Edit</a>
    </p>

    @if ($project->tasks->count() )
        <div class="content">
            @foreach ($project->tasks as $task)

                <div>
                    <form method="POST" action="/tasks/{{ $task->id }}">
                        @method('PATCH')
                        @csrf
                        <label for="completed" class="checkbox {{ $task->completed ? 'is-complete' : ''}}">
                            <input name="completed" type="checkbox" onchange="this.form.submit()" {{ $task->completed ? 'checked' : ''}}>
                            {{ $task->description}}
                        </label>
                    </form>
                </div>

            @endforeach
        </div>
    @endif
@endsection