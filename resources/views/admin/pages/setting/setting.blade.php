@extends('layouts.admin')

@section('title','Settings')

@section('setting','active')


@section('style')

@endsection



@section('content')
    <div class="content-area">

        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="row">
                        <div class="col">
                            <h4 class="page-title">App Settings</h4>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Devlomatix</a></li>
                                <li class="breadcrumb-item active">Settings</li>
                            </ol>
                        </div><!--end col-->
                    </div><!--end row-->
                </div><!--end page-title-box-->
            </div><!--end col-->
        </div><!--end row-->

        <div class="app-setting">
            <div class="row setting-wrapper">
                <div class="col-md-3 setting-options">
                    <div class="card">
                        <div class="card-header d-flex">

                            <div class="setting-text">
                                <h4 class="card-title">Settings</h4>
                                <small>All App related settings</small>
                            </div>
                        </div><!--end card-header-->
                        <div class="card-body">
                            <ul class="mt-2">
                                <li class="{{(!request()->type ) ? 'active' : 'null'}}">
                                    <a href="{{route('setting.index')}}">
                                        <i data-feather="activity" class="align-self-center menu-icon"></i>
                                        <span>Global</span>
                                    </a>
                                </li>
                                <li class="{{(request()->type =='reading') ? 'active' : 'null'}}">
                                    <a href="{{route('setting.index',['type'=>'reading'])}}">
                                        <i data-feather="book-open" class="align-self-center menu-icon"></i>
                                        <span>Reading</span>
                                    </a>
                                </li>
                                <li class="{{(request()->type =='writing') ? 'active' : 'null'}}">
                                    <a href="{{route('setting.index',['type'=>'writing'])}}">
                                        <i data-feather="pen-tool" class="align-self-center menu-icon"></i>
                                        <span>Writing</span>
                                    </a>
                                </li>
                            </ul>
                        </div><!--end card-body-->
                    </div>
                </div>
                <div class="col-md-9 setting-details">
                    @if(!request()->type)
                        @include('admin.pages.setting.global')
                    @endif

                    @if(request()->type == 'reading')
                        @include('admin.pages.setting.reading')
                    @endif

                    @if(request()->type == 'writing')
                        @include('admin.pages.setting.writing')
                    @endif
                </div>
            </div>
        </div>

    </div>
@endsection



@section('scripts')

    <script>

        $(function(){
            'use strict'


        });

    </script>

@endsection