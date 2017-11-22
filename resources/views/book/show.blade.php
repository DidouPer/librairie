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

<h1>Showing {{ $book->book_title }}</h1>

    <div class="jumbotron text-center">
        <h2>{{ $book->book_title }}</h2>
        <p>
            <strong>Price:</strong> {{ $book->book_price }}<br>
        </p>
    </div>

</div>
</body>
</html>
