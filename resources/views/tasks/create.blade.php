@extends('layouts.app')

@section('title', 'Create Task')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h3> Create Task </h3>
    </div>

    <form action="{{ route('tasks.store') }}" method="POST">
        @csrf
        {{-- <div class="mb-3">
            <label for="category_id" class="form-label">Category ID</label>
            <input type="number" class="form-control" id="category_id" name="category_id" required>
        </div> --}}
        <div>
            <label for="category_id" class="form-label">Category</label>
            <select class="form-select" id="category_id" name="category_id" required>
                @foreach(App\Models\Category::all() as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description"></textarea>
        </div>
        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select class="form-select" id="status" name="status" required>
                <option value="pending">Pending</option>
                <option value="completed">Completed</option>
            </select>
        </div>
        <a href="{{ route('tasks.store') }}" class="btn btn-primary">Create Task</a>
        {{-- <button type="submit" class="btn btn-primary">Create Task</button> --}}
    </form>
@endsection
