@extends('layouts.app')

@section('title', 'Tasks List')
@section('content')
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h3> Task list </h3>
            <a class="btn btn-primary mb-3" href="{{ route('tasks.create')}}">create new task</a>
        </div>
        <div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>S/N</th>
                        <th>ID</th>
                        <th>Category ID</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tasks as $task)
                        <tr>
                            @php
                                static $number = 0;
                            @endphp
                            <td>{{ $number++ }}</td>
                            <td>{{ $task->id }}</td>
                            <td>{{ $task->category_id }}</td>
                            <td>{{ $task->title }}</td>
                            <td>{{ $task->description }}</td>
                            <td>{{ $task->status }}</td>
                            <td>
                                <a class="btn btn-sm btn-warning" href="{{ route('tasks.edit', $task->id) }}">Edit</a>
                                <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
@endsection
