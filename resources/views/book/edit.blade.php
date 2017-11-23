<!-- app/views/nerds/edit.blade.php -->

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

{{ Form::model($book, array('route' => array('book_update', $book->id), 'method' => 'PUT')) }}

    <div class="form-group">
        {{ Form::label('book_title', 'Book Title') }}
        {{ Form::text('book_title', null, array('class' => 'form-control')) }}
        {{ Form::label('book_price', 'Book Price') }}
        {{ Form::text('book_price', null, array('class' => 'form-control')) }}
        {{ Form::label('book_quantity', 'Book Quantity') }}
        {{ Form::text('book_quantity', null, array('class' => 'form-control')) }}
    </div>



    {{ Form::submit('Edit the Book!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

</div>
</body>
</html>
