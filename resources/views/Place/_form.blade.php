<div class="form-group">
	{!! Form::label('plid', 'ID:') !!}
	{!! Form::text('plid', NULL, ['class' => 'form-control' ]) !!}
</div>
<div class="form-group">
	{!! Form::label('plname', 'Name:') !!}
	{!! Form::text('plname', NULL, ['class' => 'form-control' ]) !!}
</div>
<div class="form-group">
	{!! Form::label('plimage', 'Image:') !!}
	{!! Form::textarea('plimage', NULL, ['class' => 'form-control', 'rows'=> 3 ]) !!}
</div>
<div class="form-group">
	{!! Form::label('plinfo', 'Info:') !!}
	{!! Form::textarea('plinfo', NULL, ['class' => 'form-control', 'rows'=> 8 ]) !!}
</div>
<div class="form-group">
	{!! Form::label('address_adrid', 'Address ID:') !!}
	{!! Form::text('address_adrid', NULL, ['class' => 'form-control' ]) !!}
</div>
<div class="form-group">
	{!! Form::label('plauthor', 'Author/Credit:') !!}
	{!! Form::text('plauthor', NULL, ['class' => 'form-control' ]) !!}
</div>
<div class="form-group">
	{!! Form::label('plcaption', 'Caption:') !!}
	{!! Form::text('plcaption', NULL, ['class' => 'form-control' ]) !!}
</div>
<div class="form-group">
	{!! Form::label('pltag', 'Tag:') !!}
	{!! Form::text('pltag', NULL, ['class' => 'form-control' ]) !!}
</div>
<div class="form-group">
	{!! Form::label('created_at', 'Created:') !!}
	{!! Form::text('created_at', NULL, ['class' => 'form-control' ]) !!}
</div>
<div class="form-group">
	{!! Form::label('updated_at', 'Updated:') !!}
	{!! Form::text('updated_at', NULL, ['class' => 'form-control' ]) !!}
</div>
<div class="form-group">
	{!! Form::submit($SubmitButtonText, ['class' => 'fbtn, btn-primary form-control' ]) !!}
</div>