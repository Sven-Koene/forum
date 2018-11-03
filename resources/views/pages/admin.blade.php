@extends('layouts.app')

@section('content')
    <h1>Admin pagina</h1>

    <div class="container">
            <div class="col-md-12">
	    <div class="card" style="margin:50px 0">
                <!-- Default panel contents -->
                <div class="card-header">Admin paneel om posts onzichtbaar te maken</div>

        @if(count($posts) > 0)
@foreach($posts as $post)
    <div class="card">
        <div class="row">
            <div class="col-md-8 col-sm-8">
            <ul class="list-group list-group-flush">
                
                    <li class="list-group-item">
                <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                <p>Categorie: {{$post->category}}</p>
                <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
        <label class="switch ">
          <input type="checkbox" class="danger">
          <span class="slider round"></span>
        </label>
            </div>
        </div>
    </div>
@endforeach
            
                
                        
       
@else
<p>Geen posts gevonden</p>
@endif

@endsection
