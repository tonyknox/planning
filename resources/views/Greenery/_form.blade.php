
	<div class="row">
		<div class="col">
			
		<div class="form-group">
			{!! Form::label('grname', 'Page Name:') !!}
			{!! Form::text('grname', NULL, ['class' => 'form-control' ]) !!}
		</div>


		<div class="form-group">
			{!! Form::label('chapter_chapid', 'Chapter ID:') !!}
			{!! Form::text('chapter_chapid', NULL, ['class' => 'form-control' ]) !!}
		</div>

		<div class="form-group">
		{!! Form::label('book_bkid', 'Book ID:') !!}
		{!! Form::text('book_bkid', NULL, ['class' => 'form-control' ]) !!}
		</div>
		
		<div class="form-group">
			{!! Form::label('grdescription', 'Page Description:') !!}
			{!! Form::text('grdescription', NULL, ['class' => 'form-control' ]) !!}
		</div>
		
		
		<div class="form-group">
			{!! Form::label('chap_name', 'Chapter Name:') !!}
			{!! Form::text('chap_name', NULL, ['class' => 'form-control' ]) !!}
		</div>
		
		<div class="form-group">
			{!! Form::submit($SubmitButtonText, ['class' => 'fbtn, btn-primary form-control' ]) !!}
		</div>
	
	</div>

	<div class="col">
		
		<div class="form-group">
			{!! Form::label('grinfo', 'Info:') !!}
			{!! Form::textarea('grinfo', NULL, ['class' => 'form-control', 'rows' => 32 ]) !!}
		</div>
	
	</div>
</div>