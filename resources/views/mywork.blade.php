@extends('templating.main')

@section('container')
    
    @foreach($project as $data)
        <div class="container">
            <div class="card mb-8">
                <div class="row g-0">
                <div class="col-md-4">
                    <img src="..." class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                    <h5 class="card-title">{{ $data['title'] }}</h5>
                    <p class="card-text">{{ $data['body'] }}</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
                </div>
            </div>
        </div>
    @endforeach()

@endsection
