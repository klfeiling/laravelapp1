@extends('AppTemplate')
@section('content')
	@include('PagesContents.PageHeader')
	@include('auth.login')
	<div class="clearfix"></div>
	<div class="container">
		<div class="main-content">
			@include('PagesContents.Navigation1')
			@include('PagesContents.Navigation2')
			@include('PagesContents.ShowInput')
			@include('PagesContents.ShowResults')
		</div>
		<div class="clearfix"></div>
		<div class="copy-rights text-center">
			<p>&nbsp;</p>
		</div>
	</div>
@stop
