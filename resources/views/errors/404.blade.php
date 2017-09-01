@extends('AppTemplate')
@section('content')
    @include('PagesContents.PageHeader')
    @include('auth.login')
    <div class="clearfix"></div>
    <div class="container">
        <div class="main-content">
            @include('PagesContents.Navigation1')
            @include('PagesContents.Navigation2')
            <div class="error-page">
                <h4>Error 404 - Not Found</h4>
                <p>The document you are looking for may have been removed or re-named. Please contact the web site owner for further assistance.</p>
                <a href="index">Go Back To Home Page</a>
            </div>
        </div>
    </div>
@stop