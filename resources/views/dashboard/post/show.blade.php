@extends('dashboard.layouts.main')


@section('container')
<div class="container">
    <div class="row  my-3">
        <div class="col-lg-8">
            <h1 class="mb-3" >{{ $post->title }}</h1>

            <a href="/dashboard/post" class="btn btn-success "> <span data-feather="arrow-left" class="black-icon"></span> Back To all my post</a>

            <a href="/dashboard/post/{{ $post->slug }}/edit" class="btn btn-warning"> <span data-feather="edit" class="black-icon"></span> Edit</a>
         
            <form action="/dashboard/post/{{ $post->slug }}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button class="btn btn-danger mb" onclick="return confirm('Are you sure?')">
                    <span data-feather="x-circle"></span>Delete
                </button>
                </form>



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