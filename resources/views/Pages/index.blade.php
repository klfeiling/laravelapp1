@extends('AppTemplate')
@section('content')
    @include('IndexContent.PageHeader')
    @include('IndexContent.LoginRegister')
    <div class="clearfix"></div>
    <div class="container">
        <div class="main-content">
            @include('IndexContent.Navigation1')
            @include('IndexContent.Navigation2')
            <div class="main-banner">
                @include('IndexContent.IndexPart1')
                @include('IndexContent.IndexPart2')
                <div class="clearfix"></div>
            </div>
        </div>
        @include('IndexContent.IndexPart3')
        <div class="footer-top-grid">
            <div class="list-of-movies col-md-8">
                @include('IndexContent.IndexPart4')
                <div class="clearfix"></div>
                @include('IndexContent.IndexPart5')
            </div>
                @include('IndexContent.IndexPart6')
            <div class="clearfix"></div>
        </div>
        @include('IndexContent.IndexFooter')
    </div>
@stop