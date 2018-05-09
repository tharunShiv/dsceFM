@extends('layouts.app')
@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4 sidebar">
                <h3>Navigate</h3>
                <hr width=80%>
                <p><a href="/home">Upload File</a></p>
                <p><a href="/files">Search File</a></p>
            </div>
            <div class="col-md-8">
                <h3>{{$file->title}}</h3>   
                <br>

                    <p>Category: {{$file->category}} </p>
                    <p>Semester: {{$file->semester}} </p>
                    <div>
                        <p>{{$file->description}}</p>
                    </div>
                    <br>
                    <p>Tags: </p><p>{{$file->tags}}</p>

            </div>
        </div>
    </div>   
@endsection