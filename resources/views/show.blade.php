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
                <a href="/storage/files/{{$file->filename}}">Click here to View in a new tab/Download</a><br>
                <?php 
                
                $extension = pathinfo($file->filename, PATHINFO_EXTENSION); 
               
                ?>

                
                <?php 
                    if($extension == 'pdf'){
                ?>
                    <iframe src = "/ViewerJS/#../storage/files/{{$file->filename}}" width='724' height='1024' allowfullscreen webkitallowfullscreen></iframe> 
                    <br>
                <?php
                    } 
                ?>

                <?php 
                if($extension == 'jpg' or $extension == 'jpeg' or $extension == 'png'){
                ?>
                    <img src="/storage/files/{{$file->filename}}" style="max-width:1080px"/>
                <?php
                } 
                ?>

                    <p>Tags: {{$file->tags}}</p>

            </div>
        </div>
    </div>   
@endsection