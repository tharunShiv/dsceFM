@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4 sidebar">
            <h3>Navigate</h3>
            <hr width:80%>
            <p><a href="home">Upload File</a></p>
            <p><a href="files">Search File</a></p>
        </div>
        <div class="col-md-8">
            <h3>Upload File</h3>
            {!! Form::open(['action' => 'FilesController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                <div class="form-group">
                    {{Form::label('title', 'Title')}}
                    {{Form::text('title', '', ['class'=>'form-control', 'placeholder'=>'Title', 'required' => 'required'])}}
                </div>
                <div class="form-group">
                    {{Form::label('category', 'Category ')}}
                    {{Form::select('category', ['0' => '--Select--', 'document' => 'Document', 'image' => 'Image', 'other' => 'Others'])}}
                    {{Form::label('semester', 'Semester')}}
                    {{Form::select('semester', ['0' => '--Select--', '1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5', '6' => '6', '7' => '7', '8' => '8'])}}
                </div>
                <div class="form-group">
                        {{Form::label('tags', 'Tags')}}
                        {{Form::text('tags', '', ['class'=>'form-control', 'placeholder'=>'Tags - Seperate using comma or space', 'required' => 'required'])}}
                </div>
                <div class="form-group">
                    {{Form::label('description', 'Description (optional)')}}
                    {{Form::textarea('description', '', ['class'=>'form-control', 'placeholder'=>'Description'])}}
                </div>
                <div class="form-group">
                    {{Form::label('filename', 'Upload File Here')}}
                    {{Form::file('filename', ['required' => 'required'])}}
                </div>
                {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
            {!! Form::close() !!}
            </div>
        </div>
    </div>

@endsection
