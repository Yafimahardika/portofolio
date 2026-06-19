@extends('layouts.app')

@section('content')
<div class="container my-2">
    <h2>My Projects</h2>
    <div class="row">
        <div class="col-md-4">
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">Portfolio Website</h5>
                    <p class="card-text">Laravel-based portfolio showcasing my skills and projects.</p>
                    <a href="#" class="btn btn-outline-primary">View Project</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">Bank Sampah System</h5>
                    <p class="card-text">A web app for managing deposits and withdrawals in a waste bank.</p>
                    <a href="#" class="btn btn-outline-primary">View Project</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
