
@extends('layouts.main')

@section('container')


<div class="container">
    <div class="row justify-content-center mb-5">
        <div class="col-md-8">
            <h1 class="mb-3">{{ $post->title }}</h1>

            <p>By <a href="/blog?author={{ $post->author->username}}" class="text-decoration-none">{{ $post->author->name }}</a> in 
                <a href="/blog?category={{ $post->category->slug }}" class="text-decoration-none">
                    {{ $post->category->name }}
                </a></p>

            @if ($post->image)
                <div style="max-height: 350px; overflow:hidden">
                    <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}" class="img-fluid">
                </div>
            @else
                <img src="https://picsum.photos/seed/{{ urlencode($post->category->name) }}/1200/400" class="card-img-top" alt="{{ $post->category->name }}" class="img-fluid">
                
            @endif

                
            <article class="my-3 fs-5">
                {!! $post->body !!}
            </article>
           

            <a href="/blog" class="d-block mt-3">Back to Blog</a>

        </div>
    </div>
</div>


        
@endsection


