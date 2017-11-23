<?php
$route = 'book_store';
$method = 'POST';
?>

	<!DOCTYPE html>
	<html>
	<head>
	    <title>Look! I'm CRUDding</title>
	    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
	</head>
	<body>
	<div class="container">

	<nav class="navbar navbar-inverse">
	    <div class="navbar-header">
	        <a class="navbar-brand" href="{{ URL::to('book') }}">Book Alert</a>
	    </div>
	    <ul class="nav navbar-nav">
	        <li><a href="{{ URL::to('book') }}">View All Book</a></li>
	        <li><a href="{{ URL::to('book/create') }}">Create a Book</a>
	    </ul>
	</nav>

	{!! Form::model($book, array('route' => $route, 'method' => $method)) !!}

	    <div class="form-group">
	        {{ Form::label('title', 'Book Title') }}
	        {{ Form::text('title', null, array('class' => 'form-control')) }}
	        {{ Form::label('price', 'Book Price') }}
	        {{ Form::text('price', null, array('class' => 'form-control')) }}
	        {{ Form::label('quantity', 'Book Quantity') }}
	        {{ Form::text('quantity', null, array('class' => 'form-control')) }}
	    </div>



	    {{ Form::submit('Ajouter the Book!', array('class' => 'btn btn-primary')) }}

	{{ Form::close() }}

	</div>
	</body>
	</html>
