@extends('app')

@section('content')
    <div class="container mt-5">
        <div class="position-absolute top-50 start-50 translate-middle">
            <div class="card shadow" style="width: 18rem;">
                <div class="card-header">
                    <h3 class="m-0 text-center">Login</h3>
                </div>
                <div class="card-body">
                    <form action="/login" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" id="email">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" id="password">
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" name="remember" class="form-check-input" id="remember">
                            <label class="form-check-label" for="remember">Remember me</label>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
