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
                <h4>Please login first</h4>
                <p>Thank you!</p>
                <a href="index">Go Back To Home Page</a>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="copy-rights text-center">
            <p>&nbsp;</p>
        </div>
    </div>
@stop