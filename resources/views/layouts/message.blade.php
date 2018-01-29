@if(\Session::has('flash_message'))
	@include('layouts.message')
@endif