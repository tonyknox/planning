@extends('layouts/app')

@section('content')

	<div class="block w100">
		@include('includes.headings')
	</div>
<div class="row">
	<!-- col 1 - sidebar -->
	<div class="d-none d-sm-block col-sm-3">
		@include('/includes.nextPrevPage', ['tble'=>'Munros', 'editTable'=>$page->amid, 'id'=>'amid', 'text'=>'Page'])<br />
		<h4 class="blu" style="font-style:italic;">Pages</h4>
				@foreach ($pages as $pge)
					<p><a href="{!! action('MunrosController@show', ['amid'=>$pge->amid]) !!}">{!! $pge->amdescription !!}</a></p>
				@endforeach
	</div>	

<!-- col 2 - main content -->

	<div class="col" style="max-width:520px;">		
	
	@include('includes.searches', ['tble' => 'SearchMunros'])
	<h3>{!! $page->amchapter !!}</h3>
		<table width="100%" ><tr><td width="10%" >
			<div class="d-sm-none">
			@if(isset($page->chapters->chapname))
	<h3 class="blu" style="font-style:italic;">{{ $page->chapters->chapname }}</h3>
	@endif
	</div>
	
	<div class="hyphenate" id="fnote" style="hyphenate; text-align:justify;">
			{!! $page->aminfo !!}
	</div>		
		</td></tr><tr><td>
		<span style="text-align:center">@include('/includes.nextPrev', ['tble'=>'Munros', 'editTable'=>$page->amid, 'id'=>'amid', 'textBook'=>'Chapter', 'textChap'=>'Page'])</span>
	</td></tr></table>
		</div>
		
	<div class="d-none d-sm-block col-sm-1">
	</div>
	</div> 
	<!-- ------------------- -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Footnote</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
     
<script>
	$(function() {

		$('#myModal').on('show.bs.modal', function (event) {
			
			var id = $(event.relatedTarget).data('myid')
			$.get( "/munrofootnotes/" + id, function( data ) {
				var fn = $(data).find("#fnote").text()
				fn = $.trim(fn);
				// var myid = fn.match(/^.*? /)
				// myid = $.trim(myid)
				// fn = fn.replace(/^.*? /,'')
				// myid = "<h4>" + myid + "</h4>"
				// fn = "<p>" + fn + "</p>"
				var modal = $('#myModal');
				modal.find('#message-text').html(fn);
				// (myid + fn);

			});
			
		});
	});
  </script>

<!-- - - - - -->		


@stop
