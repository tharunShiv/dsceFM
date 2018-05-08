@extends('layouts.app') 
@section('content')
	
	<div class="jumbotron container-fluid">
		<div class="container">
			<h3>Manage PDFs, PhotoCopies and Docs all at one place</h3>
			<p>All secured with resistance against major security attacks</p>
		</div>
	</div>
	
	<div class="container">
		<div class="row">
				<div class=" col-sm-12 col-md-4 card">
						<h3 class="card-header primary-color white-text">Featured</h3>
						<div class="card-body">
							<h4 class="card-title">Upload Document</h4>
							<p class="card-text">Upload files, PhotoCopies of the document you want to store securely.</p>
							<a class="btn btn-primary text-white">Upload</a>
						</div>
				</div>
				<div class="card col-sm-12 col-md-4">
						<h3 class="card-header primary-color white-text">Featured</h3>
						<div class="card-body">
							<h4 class="card-title">Search Docs</h4>
							<p class="card-text">Search for saved Files, PhotoCopies of the document you have stored securely.</p>
							<a class="btn btn-primary text-white">Search</a>
						</div>
				</div>
				<div class="card col-sm-12 col-md-4">
						<h3 class="card-header primary-color white-text">Featured</h3>
						<div class="card-body">
							<h4 class="card-title">Coming Soon...</h4>
							<p class="card-text">Other Exciting features rolling out soon</p>
							<a class="btn btn-primary text-white">Home</a>
						</div>
				</div>
		</div>
		
	</div>
@endsection