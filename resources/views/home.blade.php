@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    You are logged In
                    
                </div>

                {!! Form::open(['action' => 'FilesController@store', 'method' => 'POST']) !!}
                <div class="form-group">
                    {{Form::label('title', 'Title')}}
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection
