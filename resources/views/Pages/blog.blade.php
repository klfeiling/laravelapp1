@extends('AppTemplate')
@section('content')
	@include('IndexContent.PageHeader')
	@include('IndexContent.LoginRegister')
	<div class="clearfix"></div>
	<div class="container">
		<div class="main-content">
			@include('IndexContent.Navigation1')
			@include('IndexContent.Navigation2')
		</div>
	</div>
@stop