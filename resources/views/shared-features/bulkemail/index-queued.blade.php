@extends(Auth::user()->team->app_type.'.base')

@section('title')
    Bulk Emailer
@endsection

@section('breadcrumb')

    <a href="/office">Home</a> > Bulk Emails

@endsection

@section('style')

	<style>


	</style>

@endsection

@section('main')

<div class="flex border-b-4 pb-2 border-blue">
	<div class="text-2xl font-sans w-full">
		 @lang('Bulk Emails')
	</div>

	@include('shared-features.bulkemail.index-nav')

</div>




	<table class="w-full text-sm cursor-pointer mb-6 cursor-pointer">
		<tr class="bg-grey-lighter border-b">
			<td class="p-1 w-1/6">
				Date
			</td>
			<td class="p-1">
				Message
			</td>
			<td class="p-1">
				Status
			</td>
			<td class="p-1">
				Recipients
			</td>
			<td class="p-1">
				Remaining
			</td>
			<td class="p-1">
				
			</td>
		</tr>
		@foreach($queue as $thequeue)
		<tr class="clickable border-b hover:bg-orange-lightest" data-href="/{{ Auth::user()->team->app_type }}/emails/{{ $thequeue->id }}/queueshow">

			<td class="p-2 text-grey-dark text-xs">
				{{ \Carbon\Carbon::parse($thequeue->updated_at)->format('n/j/y h:i A') }}
			</td>
			<td class="p-2 text-blue-dark">
				<i class="fas fa-envelope mr-1"></i> {{ $thequeue->subject }}
			</td>
	
			<td class="p-2 text-grey-darker flex w-16">
				@if($thequeue->completed_at)
					<span class="text-blue font-bold">Done</span>
				@else
					Sending <div class="status"></div>
				@endif
			</td>	

			<td class="p-2 text-grey-dark">
				{{ $thequeue->queuedCount() }}
			</td>

			<td class="p-2 text-grey-dark">
				{{ $thequeue->queuedNotSentCount() }}
			</td>

			<td class="p-2 text-right">
			 	<a href="/{{ Auth::user()->team->app_type }}/emails/{{ $thequeue->id }}/queueshow">
					<button class="mr-1 bg-grey-lighter px-2 py-1  text-xs rounded-lg text-grey-darkest hover:bg-blue-dark hover:text-white">
						<i class="fas fa-chart-line mr-2"></i> Stats
					</button>
				</a> 				
			</td>

		</tr>
		@endforeach
	</table>




<br />
<br />
@endsection

@section('javascript')
<script type="text/javascript">

	$(document).ready(function() {

        var reloadTimer = setInterval(function(){

          var elements = document.getElementsByClassName('status');
          remaining = elements[0].innerHTML.length;
          remaining += 1;

          var newstring = '.'.repeat(remaining);
          if(remaining == 4){
          	newstring = '';
          }

          	for (i = 0; i < elements.length; i++) {
			  elements[i].innerHTML = newstring;
			}

        }, 1000);

	    $(".clickable").click(function() {
	        window.location = $(this).data("href");
	    });

	});
</script>
@endsection
