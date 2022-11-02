@extends('templating.main')

@section('container')
        <div class="container m-3">
            <div class="card">
                <div class="row g-0">
                <div class="col-md-4">
                    <img src="{{ asset('/img/'.$project->image.'.jpg') }}" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="m-4">
                        <div class="card-body">
                            <h5 class="card-title">{{ $project->title }}</h5>
                            <p>By Edwin Duta Ramadhan in <a href="/categories/{{ $project->category->slug }}">{{ $project->category->name }}</a></p>
                            <p class="card-text">{{ $project->body }}</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                            <div class="text-end">
                                <a href="/mywork/" class="btn btn-primary">Details</a>
                            </div>
                    </div>
                </div>
                </div>
            </div>
        </div>

@endsection
