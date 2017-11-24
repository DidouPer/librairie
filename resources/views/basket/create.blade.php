<?php
$route = 'basket_store';
$method = 'POST';
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Add in your basket</title>
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">

            <nav class="navbar navbar-inverse">
                <ul class="nav navbar-nav">
                    <li><a href="{{ URL::to('basket') }}">View Your basket</a></li>
                </ul>
            </nav>

            <h1>Add books in your basket</h1>

            {{ Form::open(array('route' => $route, 'method' => $method)) }}

                <div class="form-group">
                    {{ Form::label('book_tittle', 'Book Tittle') }}
                    {{ Form::text('book_tittle', null, array('class' => 'form-control')) }}
                </div>

                {{ Form::submit('Add the book', array('class' => 'btn btn-primary')) }}

            {{ Form::close() }}
        </div>
    </body>
</html>