@extends('layouts.app')

@section('title', 'Home Page')

@section('content')
    <h3>Welcome to the Home Page</h3>
    <p>This is the content of the home page.</p>

    <a class="btn btn-primary" href="{{ route('tasks.index') }}">Task list</a>
@endsection

