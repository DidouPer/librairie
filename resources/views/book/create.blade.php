<?php
$route = 'book_store';
$method = 'POST';
?>

<div class="tab group-edit">
		<div id="group" class="tab-pane fade in active">
			<div class="title">
				<h3>BOOK</h3>
			</div>
			<div class="tab-content">
				{!! Form::model($book, array('route' => $route, 'method' => $method)) !!}

					<div>
						{!! Form::label('title', 'titre:') !!}
						{!! Form::text('title') !!}

					</div>
          <div>
						{!! Form::label('price', 'prix:') !!}
						{!! Form::number('price') !!}

					</div>
          <div>
            {!! Form::label('quantity', 'quantité:') !!}
            {!! Form::number('quantity') !!}

          </div>
					<div class="btn-create">
						{!! Form::submit() !!}
					</div>

				{!! Form::close() !!}
			</div>
		</div>
	</div>
