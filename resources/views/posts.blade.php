@extends('layouts.main')

@section('container')
    <h1 class="mb-3 text-center">{{ $title }}</h1>

    <div class="row justify-content-center mb-3">
        <div class="col-md-6">
            <form action="/blog">
                @if (request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                @endif
                @if (request('author'))
                    <input type="hidden" name="author" value="{{ request('author') }}">
                @endif
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search.." name="search" value="{{ request('search') }}">
                    <button class="btn btn-danger" type="submit">Search</button>
                </div>
            </form>
        </div>
    </div>

    @if ($posts->count())
    <div class="card mb-3" style="max-width: 950px; margin: 0 auto;"> <!-- Menyesuaikan ukuran max-width dan center card -->
        @if ($posts[0]->image)
            <div style="max-height: 300px; overflow:hidden;"> <!-- Mengurangi tinggi gambar -->
                <img src="{{ asset('storage/' . $posts[0]->image) }}" alt="{{ $posts[0]->category->name }}" class="img-fluid w-100">
            </div>
        @else
            <img src="https://picsum.photos/seed/{{ urlencode($posts[0]->category->name) }}/700/300" class="card-img-top" alt="{{ $posts[0]->category->name }}">
        @endif
        <div class="card-body text-center" style="padding: 1rem;"> <!-- Mengurangi padding di card-body -->
            <h3 class="card-title"><a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none text-dark">{{ $posts[0]->title }}</a></h3>
            <p>
                <small class="text-body-secondary">
                    By. <a href="/blog?author={{ $posts[0]->author->username}}" class="text-decoration-none">{{ $posts[0]->author->name }}</a> in
                    <a href="/blog?category={{ $posts[0]->category->slug }}" class="text-decoration-none"> {{ $posts[0]->category->name }} </a> {{ $posts[0]->created_at->diffForHumans() }}
                </small>
            </p>
            <p class="card-text">{{ $posts[0]->excerpt }}</p>
            <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-primary btn-sm">read more</a> <!-- Mengubah ukuran tombol -->
        </div>
    </div>

        <!-- Other Posts -->
        <div class="container">
            <div class="row justify-content-center">
                @foreach ($posts->skip(1) as $post)
                    <div class="col-md-9 mb-3">
                        <div class="card">
                            <div class="d-flex">
                                <!-- Gambar Card -->
                                <div style="flex-shrink: 0; width: 200px; height: auto;">
                                    <div class="position-absolute px-3 py-2 text-white" style="background-color: rgba(0, 0, 0, 0.3)">
                                        <a href="/blog?category={{ $post->category->slug }}" class="text-white text-decoration-none">{{ $post->category->name }}</a>
                                    </div>
                                    <a href="/posts/{{ $post->slug }}" style="text-decoration: none;">
                                        @if ($post->image)
                                            <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}" class="img-fluid" >
                                        @else
                                            <img src="https://picsum.photos/seed/{{ urlencode($post->category->name) }}/500/400" class="card-img-top" alt="{{ $post->category->name }}">
                                        @endif
                                    </a>
                                </div>

                                <!-- Konten Teks Card -->
                                <div class="card-body d-flex flex-column justify-content-between">
                                    <div>
                                        <a href="/posts/{{ $post->slug }}" style="text-decoration: none;">
                                            <h5 class="card-title text-dark">{{ $post->title }}</h5>
                                        </a>
                                        <p>
                                            <small class="text-body-secondary">
                                                By. <a href="/blog?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> {{ $post->created_at->diffForHumans() }}
                                            </small>
                                        </p>
                                        <a href="/posts/{{ $post->slug }}" style="text-decoration: none; color: black;">
                                            <p class="card-text">{{ $post->excerpt }}</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

    @else
        <p class="text-center fs-4">No Post Found</p>
    @endif

    <div class="d-flex justify-content-center">
        {{ $posts->links() }}
    </div>

@endsection
