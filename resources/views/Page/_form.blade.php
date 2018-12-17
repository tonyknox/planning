
	<div class="row">
		<div class="col">
			
		<div class="form-group">
			{!! Form::label('pname', 'Page Name:') !!}
			{!! Form::text('pname', NULL, ['class' => 'form-control' ]) !!}
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
			{!! Form::label('pdescription', 'Page Description:') !!}
			{!! Form::text('pdescription', NULL, ['class' => 'form-control' ]) !!}
		</div>
		
		
		<div class="form-group">
			{!! Form::label('chapter_name', 'Chapter Name:') !!}
			{!! Form::text('chapter_name', NULL, ['class' => 'form-control' ]) !!}
		</div>
		
		<div class="form-group">
			{!! Form::submit($SubmitButtonText, ['class' => 'fbtn, btn-primary form-control' ]) !!}
		</div>
	
	</div>

	<div class="col">
		
		<div class="form-group">
			{!! Form::label('pinfo', 'Info:') !!}
			{!! Form::textarea('pinfo', NULL, ['class' => 'form-control', 'rows' => 32 ]) !!}
		</div>
	
	</div>
</div>