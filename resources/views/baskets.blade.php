<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Basket</title>
    </head>

    <body>
        <h1>{{{ Auth::user()->id }}}</h1>
        <table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>ID</td>
            <!--<td>Date création</td>-->
            <td>User</td>
            <td>Book</td>
            <td>Num Panier</td>
        </tr>
    </thead>
    <tbody>
    @foreach($baskets as $key => $value)
        <tr>
            <td>{{ $value->id }}</td>
            <td>{{ $value->users_id }}</td>
            <td>{{ $value->books_id }}</td>
            <td>{{ $value->baskets_token }}</td>
        </tr>
    @endforeach
    </tbody>
</table>

    </body>
</html>
<!--<div class="panel-body">
  
    <title>Basket</title>
    <p> hello world </p>
    <form action="/task" method="POST" class="form-horizontal">
        {{ csrf_field() }}
        <label for="task" class="col-sm-3 control-label">Book</label>
        <div class="col-sm-6">
            <input type="text" name="basketbook" id="book-name" class="form-control">
        </div>
        
        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-6">
                <button type="submit" class="btn btn-default">
                    <i class="fa fa-plus"></i> Add Task
                </button>
            </div>
        </div>

    </form>
</div>-->