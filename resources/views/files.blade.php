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
                {!! Form::open(['action' => 'FilesController@search', 'method' => 'GET', 'enctype' => 'multipart/form-data']) !!}
                <div class="form-group">
                    {{Form::label('key', 'Search')}}
                    {{Form::text('key', '', ['class'=>'form-control', 'placeholder'=>'Search for files ( type anything related to it )', 'required'])}}
                </div>
                {{Form::submit('Search', ['class'=>'btn btn-primary'])}}
            
                {!! Form::close() !!}
                <br>
                
                <h3 style="text-align:center">Recently Uploaded Files</h3>
                
                <hr width=80%>
                
                @if(count($files)>0)
                  @foreach($files as $file=>$f)
                    <div class="card card-body bg-light">
                        <h4><a href="/files/{{$f->id}}">{{$f->title}}</a></h4>
                        <small>Category: {{$f->category}} </small>
                        <small>Semester:  {{$f->semester}} </small>
                        <p> <small>Tags: {{$f->tags}}</small></p>
                        <small>Uploaded on {{$f->created_at}}</small>
                    </div>
                    <br>
                  @endforeach
                  {{$files->links()}}
                @else
                  <h3>Sorry! No recent Posts!</h3>

                @endif
        </div>
    </div>
</div>
@endsection