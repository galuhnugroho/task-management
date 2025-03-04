@extends('app')

@section('content')
    <div class="d-flex justify-content-end m-3">
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="nav-icon fa-solid fa-user"></i>
                {{ auth()->user()->name }}
            </button>
            <ul class="dropdown-menu center">
                <li>
                    <a href="/logout" class="dropdown-item text-center">
                        <i class="nav-icon fa-solid fa-power-off"></i>
                        Logout
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="container mt-5">
        <div class="col-md-12">
            <h2>Task Management</h2>
        </div>



        @session('success')
            <div class="col-md-12">
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            </div>
        @endsession

        <div class="col-md-12">
            <a href="{{ route('tasks.create') }}" class="btn btn-sm btn-primary shadow mb-2">Tambah Task</a>
        </div>

        <div class="col-md-12">
            <div class="card shadow">
                <div class="card-header">
                    <h6 class="m-0">Daftar Task</h6>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr class="text-center">
                                    <th>No.</th>
                                    <th>Judul</th>
                                    <th>Deskripsi</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                    <th>Updated</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($tasks as $task)
                                    <tr class="text-center">
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $task->title }}</td>
                                        <td>{{ Str::limit($task->description, 50, '...') }}</td>
                                        <td>{{ $task->is_completed ? 'Selesai' : 'Belum' }}</td>
                                        <td>
                                            <a href="{{ route('tasks.edit', $task->slug) }}"
                                                class="btn btn-sm btn-warning">Edit</a>
                                            <a href="{{ route('tasks.show', $task->slug) }}"
                                                class="btn btn-sm btn-info">Show</a>
                                            <form action="{{ route('tasks.destroy', $task->id) }}" method="POST"
                                                class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger"
                                                    onclick="Yakin, ingin menghapus?">Delete</button>
                                            </form>
                                        </td>
                                        <td>{{ $task->updated_at->diffForHumans() }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
