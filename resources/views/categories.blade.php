@extends('templating.main')

@section('container')
    @foreach($categories as $data)
        <div class="container m-3">
            <ul>
                <li>
                    <h2><a href="/categories/{{ $data->slug }}">{{ $data->name }}</a></h2>
                </li>
            </ul>
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