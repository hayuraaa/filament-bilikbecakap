@extends('frontend.layout')

@section('content')
    
    <section class="blog-post">
    <div class="featured-image">
        <img src="{{ Storage::url($blog->thumbnail) }}" alt="{{ ($blog->title) }}">
    </div>
    <div class="post-content">
        <h2>{{ ($blog->title) }}</h2>
        <p>{!! ($blog->artikel) !!}</p>
        <!-- Tambahkan konten artikel sesuai kebutuhan -->
    </div>
</section>

@endsection