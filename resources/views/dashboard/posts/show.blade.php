@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="row my-4">
        <div class="col-lg-8 ">
            <h1 class="mb-3">{{ $post->title }} </h1>
                <a href="/dashboard/posts" class="btn btn-success"><span class="mb-1 me-1" data-feather="eye"></span>Back To All Posts </a>
                <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning"> <span class="mb-1 me-1" data-feather="edit" ></span>Edit</a>
                <form action="/dashboard/posts/{{ $post->slug }}" class=" d-inline" method="post">
                  @method('delete')
                  @csrf
                  <button class="btn btn-danger border-0" onclick=" return confirm('Yakin untuk menghapus data?')"><span data-feather="x-circle" class="mb-1 me-1"></span>Delete</button>
                </form>
            
                @if ($post->image)
                    <div style="max-height: 350px; overflow:hidden;">
                        <img src="{{ asset('storage/'. $post->image )}}" alt="{{ $post->category->name }}" class="img-fluid mt-4">

                    </div>
                @else
                    <img src="https://source.unsplash.com/1200x400? {{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid mt-4">
                    
                @endif

                <article class='my-3 fs-4'>
                    {!! $post->body !!} <!-- Menghilangkan hmtl special chracter -->
                </article>
                
                 </div>
                
        </div>
</div>
@endsection