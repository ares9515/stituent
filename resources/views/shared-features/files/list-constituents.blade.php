@foreach($people as $person)
<div class="w-full mb-2">
	<div class="p-1 border-b-2 w-full border-blue text-blue flex">
		
		<div class="w-4/5">
			<a href="/{{ Auth::user()->team->app_type }}/constituents/{{ $person->id }}">
				<i class="w-6 fa fa-user-circle text-xl mr-2 text-center"></i>
				<span class="font-bold">{{ $person->full_name }}</span>
			</a>
		</div>
		

	</div>
	<div class="mt-1 ml-1 table">
		@foreach($person->files as $thefile)

			@include('shared-features.files.one-file', compact($thefile))

		@endforeach
	</div>
</div>
@endforeach