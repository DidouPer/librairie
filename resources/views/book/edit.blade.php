<?php

$route = 'book_update';
$method = 'PUT';
//dd($book);
?>

<div class="tab group-edit">
		<div id="group" class="tab-pane fade in active">
			<div class="title">
				<h3>BOOK</h3>
			</div>
			<div class="tab-content">
				{!! Form::model($book, array('route' => $route, 'method' => $method)) !!}
					<div>
						{!! Form::label('book_title', 'titre:') !!}
						{!! Form::text('book_title') !!}

					</div>
          <div>
						{!! Form::label('book_price', 'prix:') !!}
						{!! Form::number('book_price') !!}

					</div>
          <div>
            {!! Form::label('book_quantity', 'quantité:') !!}
            {!! Form::number('book_quantity') !!}

          </div>
					<div class="btn-create">
						{!! Form::submit() !!}
					</div>

				{!! Form::close() !!}
			</div>
		</div>
	</div>
