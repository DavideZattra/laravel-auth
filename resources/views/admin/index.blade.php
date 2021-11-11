@extends('layouts.app')

@section('content')
    <section class="container">
        <div class="row">

            @forelse ($posts as $post)
                
                <div class="col-12">
                    <h4>titolo {{ $post->title}}</h4>
                    <h5>autore {{ $post->author }}</h5>
                    <p>Data di pubblicazione {{ $post->post_date }}</p>
                </div>

            @empty
                
                <h2>there are no posts!</h2>
        
            @endforelse
        </div>
    </section>

@endsection