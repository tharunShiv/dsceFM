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
                    @if(count($results)>0)
                    @foreach($results as $result=>$f)
                      <div class="card card-body bg-light">
                          <h4><a href="/files/{{$f->id}}">{{$f->title}}</a></h4>
                          <small>Category: {{$f->category}} </small>
                          <small>Semester:  {{$f->semester}} </small>
                          <p> <small>Tags: {{$f->tags}}</small></p>
                          <small>Uploaded on {{$f->created_at}}</small>
                      </div>
                      <br>
                    @endforeach
                    {{$results->links()}}
                  @else
                    <h3>Sorry! No match found!</h3>
  
                  @endif
            </div>
        </div>
    </div>   
@endsection