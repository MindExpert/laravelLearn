@extends('layout')

@section('content')
    <h1 class="title">Projects Folder</h1>
    <ul>
        @foreach ($projects as $project)
            <li>{{$project->title}}</li> 
        @endforeach
    </ul>
@endsection