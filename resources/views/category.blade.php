@extends('templating.main')

@section('container')
    <h1>My Work Category : {{ $category }}</h1>
    @foreach($project as $data)
        <div class="container m-3">
            <div class="card">
                <div class="row g-0">
                <div class="col-md-4">
                    <img src="{{ asset('/img/'.$data->image.'.jpg') }}" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="m-4">
                        <div class="card-body">
                            <h5 class="card-title">{{ $data->title }}</h5>
                            <p class="card-text">{{ $data->excerpt }}</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                            <div class="text-end">
                                <a href="/mywork/{{ $data->slug }}" class="btn btn-primary">Details</a>
                            </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    @endforeach()

@endsection
{{-- Mywork::create([
    'category_id' => 1,
    'title' => 'Project Ketiga',
    'slug' => 'project-ketiga',
    'image' => 'desktop',
    'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos laudantium delectus ut laborum. Voluptatem, maiores officiis iste, veniam cum temporibus accusamus dolore, cumque voluptates maxime recusandae quos sequi! Ipsam, est.',
    'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quisquam delectus blanditiis vel quae soluta enim, ullam reiciendis at laudantium quibusdam maiores harum quo recusandae officia. Accusantium, inventore commodi labore, animi mollitia odit ullam perspiciatis reiciendis ea ipsa provident modi nesciunt omnis quisquam amet at. Dolores velit at ad illum expedita doloribus enim tenetur? Impedit officia reprehenderit ipsum omnis, distinctio minus iure at, autem dolorum nihil odio qui hic, voluptates obcaecati.'
]);
Category::create([
    'name' => 'Web App',
    'slug' => 'web-app',
]); --}}