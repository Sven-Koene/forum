@extends('layouts.app')

@section('content')
    <h1>Create Post</h1>
    {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('title', 'Title')}}
            {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}
        </div>
        <div class="form-group">
            {{Form::label('body', 'Body')}}
            {{Form::textarea('body', '', ['id' =>'article-ckeditor','class' => 'form-control', 'placeholder' => 'Body Text'])}}
        </div>
        <div class="form-group">
            {{Form::file('cover_image')}}
        </div>
        
        
        
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



        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}

@endsection