<!-- app/views/nerds/create.blade.php -->

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
        <a class="navbar-brand" href="{{ URL::to('nerds') }}">Nerd Alert</a>
    </div>
    <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('book') }}">View All Book</a></li>
        <li><a href="{{ URL::to('book/create') }}">Create a Book</a>
    </ul>
</nav>

<h1>Create a Nerd</h1>


{{ Form::open(array('url' => 'book')) }}

    <div class="form-group">
        {{ Form::label('book_title', 'Book title') }}
        {{ Form::text('book_title', Input::old('book_title'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('book_price', 'Book Price') }}
        {{ Form::float('book_price', Input::old('book_price'), array('class' => 'form-control')) }}
    </div>

    {{ Form::submit('Create the Book!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

</div>
</body>
</html>
