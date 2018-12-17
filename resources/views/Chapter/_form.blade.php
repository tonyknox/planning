<div class="row">
	<div class="col">
		
			<div class="form-group">
				{!! Form::label('chapname', 'Name:') !!}
				{!! Form::text('chapname', NULL, ['class' => 'form-control' ]) !!}
			</div>			

		
			<div class="form-group">
				{!! Form::label('book_bkid', 'Book ID:') !!}
				{!! Form::text('book_bkid', NULL, ['class' => 'form-control' ]) !!}
			</div>
		
			<div class="form-group">
				{!! Form::label('sort_order', 'Sort:') !!}
				{!! Form::text('sort_order', NULL, ['class' => 'form-control' ]) !!}
			</div>
			<div class="form-group">
				{!! Form::submit($SubmitButtonText, ['class' => 'fbtn, btn-primary form-control' ]) !!}
			</div>
	</div>
	<div class="col">
			<div class="form-group">
				{!! Form::label('chapinfo', 'Info:') !!}
				{!! Form::textarea('chapinfo', NULL, ['class' => 'form-control', 'rows' => 10 ]) !!}
			</div>
		
	</div>
</div>