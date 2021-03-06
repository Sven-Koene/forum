@extends('layouts.app')

@section('content')


<form action="{{route('search')}}" method="GET" class="search-form">

        <label for="search">Zoek op titel of recept:</label>
        <br>
        <input type="text" name="search" class="form control" id="search">
        <br>
        <br>
        <div class="form-group">
            <label for="sel1">Selecteer categorie:</label>
            <select name="category" class="form-control" id="sel1">
                <option>Alle categoriën</option>
                <option>Zoet</option>
                <option>Hartig</option>
                <option>Taart</option>
                <option>Gebak</option>
                <option>Anders</option>
            </select>
        </div>
    <button class="" type="submit"> Zoek! </button>
</form>

    <h1>Bak recepten!</h1>
    @if(count($posts) > 0)
        @foreach($posts as $post)
            @if($post->hidden == 0)
                <div class="card">
                    <div class="row">
                        <div class="col-md-4 col-sm-4">
                            <img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}">
                        </div>
                        <div class="col-md-8 col-sm-8">
                            <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                            <p>Categorie: {{$post->category}}</p>
                            <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
                        </div>
                    </div>
                </div>
            @endif
        @endforeach
        {{$posts->links()}}
    @else
        <p>Geen posts gevonden</p>
    @endif
@endsection