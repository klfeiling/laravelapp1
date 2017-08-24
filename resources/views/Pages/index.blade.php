@extends('AppTemplate')
@section('content')
    @include('PagesContents.PageHeader')
    @include('auth.login')
    <div class="clearfix"></div>
    <div class="container">
        <div class="main-content">
            @include('PagesContents.Navigation1')
            @include('PagesContents.Navigation2')
            <div class="main-banner">
                @include('PagesContents.IndexPart1')
                @include('PagesContents.IndexPart2')
                <div class="clearfix"></div>
            </div>
        </div>
        @include('PagesContents.IndexPart3')
        <div class="footer-top-grid">
            <div class="list-of-movies col-md-8">
                @include('PagesContents.IndexPart4')
                <div class="clearfix"></div>
                @include('PagesContents.IndexPart5')
            </div>
                @include('PagesContents.IndexPart6')
            <div class="clearfix"></div>
        </div>
        @include('PagesContents.IndexFooter')
    </div>
@stop