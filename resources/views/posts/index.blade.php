@extends('layouts.app')

@section('title', 'Posts')

@section('content')
    @each('posts.partials.post', $posts, 'post', 'posts.partials.no-posts')
    {{--@foreach($posts as $post)
        <div>{{ $post['title'] }}</div>
    @endforeach--}}
    {{--@if (count($posts))
        @foreach($posts as $key => $post)--}}
            {{--@break($key == 2)--}}
            {{--@if($loop->even)
                <div>even</div>
            @endif--}}
                {{--@include('posts.partials.post')
        @endforeach
    @else
        <div>No post found!</div>
    @endif--}}

    {{--@php $done = false @endphp
    @while(!$done)
            <div>not done yet</div>
            @php
                if (random_int(0, 1) == 1) $done = true
            @endphp
    @endwhile--}}

@endsection
