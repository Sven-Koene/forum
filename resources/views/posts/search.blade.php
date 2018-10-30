@extends('layouts.app')

@section('content')

<form action="{{route('search')}}" method="GET" class="search-form">
    <i class="fa fa-search search-icon"></i>
    <input type="text" name="search" class="search-box" placeholder="Zoek op naam of email">
</form>

<div class="search-container">
    <h1>resultaten</h1>

    @if(count($posts) > 0)
        @foreach($posts as $post)
            <div class="well">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}">
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                        <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
                    </div>
                </div>
            </div>
        @endforeach
    @else
        <p>Geen posts gevonden</p>
    @endif
</div>
@endsection