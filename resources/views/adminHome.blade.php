@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4 sidebar">
            <h3>Navigate</h3>
            <hr width:80%>
            <p><a href="/home">Upload File</a></p>
            <p><a href="/files">Search Regular File</a></p>
            <p><a href="/Pfiles">Search for Preveliged Files</a></p>
            <p><a href="/Hfiles">Search for HOD Only Files</a></p>
            <p><a href="/addPM">Add/Remove Preveliged Members</a></p>
            <p><a href="/addHOD">Add HOD</a></p>
        </div>
        <div class="col-md-8">
            <h3>Upload File</h3>
            {!! Form::open(['action' => 'FilesController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                <div class="form-group">
                    {{Form::label('title', 'Title')}}
                    {{Form::text('title', '', ['class'=>'form-control', 'placeholder'=>'Title', 'required' => 'required'])}}
                </div>
                <div class="form-group">
                    {{Form::label('fileFormat', 'File Format ')}}
                    {{Form::select('fileFormat', ['0' => '--Select--', 'document' => 'Document', 'image' => 'Image', 'other' => 'Others'])}}
                    {{Form::label('category', 'Category')}}
                    {{Form::select('category', ['others' => '--Select--', 'nba' => 'NBA', 'faculty' => 'Faculty', 'students' => 'Students', 'kea' => 'KEA'])}}
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
                    <br/><small><a href="/about">Find out the supported File Formats</a></small>
                </div>
                <div class="form-group">
                    {{Form::label('access', 'Who can view this File in their Search Results?')}}
                    {{Form::select('access', ['0' => 'Public', '1' => 'Only the Preveliged', '2' => 'Only the HOD', '3' => 'Only Me'])}}
                    <br/><small><a href="/about">Learn more about Access Categories</a></small>
                </div>
                
                {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
            {!! Form::close() !!}
            </div>
        </div>
    </div>

@endsection
