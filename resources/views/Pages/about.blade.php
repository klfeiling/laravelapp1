@extends('AppTemplate')
@section('content')
	@include('PagesContents.PageHeader')
	@include('auth.login')
	<div class="clearfix"></div>
	<div class="container">
		<div class="main-content">
			@include('PagesContents.Navigation1')
			@include('PagesContents.Navigation2')
		</div>
	</div>
@stop