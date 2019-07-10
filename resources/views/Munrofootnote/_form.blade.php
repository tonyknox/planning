
	<div class="row">
		<div class="col">

		<div class="form-group">
			{!! Form::label('mfnnumber', 'Number:') !!}
			{!! Form::text('mfnnumber', NULL, ['class' => 'form-control' ]) !!}
		</div>
			
		<div class="form-group">
			{!! Form::label('mfnchapter', 'Chapter:') !!}
			{!! Form::text('mfnchapter', NULL, ['class' => 'form-control' ]) !!}
		</div>

		<div class="form-group">
		{!! Form::label('mfnpage', 'Page:') !!}
		{!! Form::text('mfnpage', NULL, ['class' => 'form-control' ]) !!}
		</div>
		
		<div class="form-group">
			{!! Form::submit($SubmitButtonText, ['class' => 'fbtn, btn-primary form-control' ]) !!}
		</div>
	
	</div>

	<div class="col">
		
		<div class="form-group">
			{!! Form::label('mfninfo', 'Info:') !!}
			{!! Form::textarea('mfninfo', NULL, ['class' => 'form-control', 'rows' => 32 ]) !!}
		</div>
	
	</div>
</div>