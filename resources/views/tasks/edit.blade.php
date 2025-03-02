@extends('app')

@section('content')

    <div class="container mt-5">
        <div class="col-md-12">
            <a href="{{ route('tasks.index') }}" class="btn btn-danger shadow">Kembali</a>
        </div>

        <div class="col-md-12">
            <h2>Tambah Task</h2>
        </div>


        @session('success')
            <div class="col-md-12">
                <div class="alert  alert-success">
                    {{ session('success') }}
                </div>
            </div>
        @endsession

        <div class="col-md-12">
            <div class="card shadow">
                <div class="card-body">
                    <form action="{{ route('tasks.update', $task->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control" id="title" name="title"
                                value="{{ $task->title }}">
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control" id="description" name="description">{{ $task->description }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="is_completed" class="form-label">Status</label>
                            <select name="is_completed" class="form-control" id="is_completed">
                                <option value="0" {{ $task->is_completed ? 'selected' : '' }}>Belum</option>
                                <option value="1" {{ $task->is_completed ? 'selected' : '' }}>Selesai</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-success">Update</button>
                        <a href="{{ route('tasks.index') }}" class="btn btn-secondary">Batal</a>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
