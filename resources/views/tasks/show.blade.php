@extends('app')

@section('content')

    <div class="container mt-5">
        <div class="col-md-12">
            <a href="{{ route('tasks.index') }}" class="btn btn-danger shadow">Kembali</a>
        </div>

        <div class="col-md-12">
            <h2>Show Task</h2>
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
                    <div class="mb-3">
                        <h4 class="card-title">{{ $task->title }}</h4>
                    </div>
                    <div class="mb-3">
                        <p class="card-text">{{ $task->description }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
