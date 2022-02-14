@extends('layouts.admin')

@section('title','Add post')

@section('post','active')


@section('style')
    <link href="{{asset('public/admin/plugins/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('public/admin/plugins/quill/quill.core.css')}}" rel="stylesheet">
    <link href="{{asset('public/admin/plugins/quill/quill.snow.css')}}" rel="stylesheet">
    <link href="{{asset('public/admin/plugins/quill/quill.bubble.css')}}" rel="stylesheet">
    <link href="{{asset('public/admin/plugins/select2/select2.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('public/admin/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css')}}" rel="stylesheet">
@endsection



@section('content')
    <div class="content-area">

        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="row">
                        <div class="col">
                            <h4 class="page-title">Subscriptions</h4>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Devlomatix</a></li>
                                <li class="breadcrumb-item active"><a href="{{route('post.index')}}">Posts</a></li>
                                <li class="breadcrumb-item active">Posts</li>
                            </ol>
                        </div><!--end col-->

                <form method="post" action="{{route('post.update', $post->id)}}" enctype="multipart/form-data">
                @csrf
                {{method_field('PUT')}}

                        <div class="col-auto align-self-center">
                            <button class="btn btn-info waves-effect waves-light btn-sm">Update Post</button>
                        </div><!--end col-->
                    </div><!--end row-->
                </div><!--end page-title-box-->
            </div><!--end col-->
        </div><!--end row-->

        <div class="row">
            <div class="col-lg-9">
                <div class="card">

                    <div class="card-body">
                       
                            <div class="form-group">
                                <label for="exampleInputEmail1"><b>Post Title</b></label>
                                <input type="text" class="form-control" aria-describedby="emailHelp" name="title" value="{{ old('body') }}{{$post->title}}">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1"><b>Post Description</b></label>
                                <input type="text" class="form-control" name="description" value="{{ old('description') }}{{$post->description}}">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1"><b>Post Content</b></label>
                                <div id="content" class="ht-200"></div>
                                <input type="text" name="body" style="display: none" id="bodyinput" value="{{ old('body') }}{{$post->body}}">
                            </div>






                        
                    </div><!--end card-body-->
                </div><!--end card-->
            </div>

            <div class="col-lg-3">

                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col">
                                <h4 class="card-title">Status & Visiblity</h4>
                            </div><!--end col-->
                        </div>  <!--end row-->
                    </div><!--end card-header-->
                    <div class="card-body">
                        <div class="radio radio-info form-check-inline">
                            <input type="radio" id="inlineRadio1" value="published" name="status" checked="">
                            <label for="inlineRadio1"> Published </label>
                        </div>
                        <div class="radio form-check-inline">
                            <input type="radio" id="inlineRadio2" value="draft" name="status">
                            <label for="inlineRadio2"> Draft </label>
                        </div>
                    </div><!--end card-body-->
                </div>


                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Category</h4>
                    </div><!--end card-header-->
                    <div class="card-body bootstrap-select-1">
                        <div class="row">
                            <div class="col-md-12">
                                <label class="mb-3">Select category for post</label>
                                <select class="select2 mb-3 select2-multiple select2-hidden-accessible" style="width: 100%" name="categories[]" multiple="">
                                        <option value="CA">California</option>
                                        <option value="NV">Nevada</option>
                                        <option value="OR">Oregon</option>
                                        <option value="WA">Washington</option>\
                                </select>
                            </div> <!-- end col -->
                        </div><!-- end row -->
                    </div><!-- end card-body -->
                </div> <!-- end card -->


                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Tags</h4>
                    </div><!--end card-header-->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <select type="text" class="" value="" data-role="tagsinput" multiple="" style="width: 100%" name="tags[]"></select>
                            </div> <!-- end col -->
                        </div><!-- end row -->
                    </div><!-- end card-body -->
                </div> <!-- end card -->

                <div class="card">

                    <div class="card-header">
                        <h4 class="card-title">Feature Image</h4>
                    </div><!--end card-header-->
                    <div class="card-body">
                        <img class="card-img-top img-fluid bg-light-alt" src="{{asset('public/admin/assets/images/small/img-2.jpg')}}" alt="Card image cap">
                        <div class="mt-4">
                            <input type="file">
                        </div>
                    </div><!--end card -body-->
                </div>


            </form>

            </div>

        </div>



    </div>
@endsection



@section('scripts')

    <script src="{{asset('public/admin/plugins/datatables.net/js/jquery.dataTables.min.js')}}"></script>

    <!-- Required datatable js -->
    <script src="{{asset('public/admin/plugins/datatables/dataTables.bootstrap4.min.js')}}"></script>

    {{-- Tiny mc editor --}}
    <script src="https://cdn.tiny.cloud/1/oiidq8jebp02vu4vrjy0ewufnmx0dz2b8x5oxniofbhylzc5/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script src="{{asset('public/admin/plugins/tinymce/tinymce.min.js')}}"></script>
    <script src="{{asset('public/admin/assets/pages/jquery.form-editor.init.js')}}"></script>
    <script src="{{asset('public/admin/plugins/quill/quill.min.js')}}"></script>
    <script src="{{asset('public/admin/plugins/select2/select2.min.js')}}"></script>
    <script src="{{asset('public/admin/plugins/bootstrap-tagsinput/bootstrap-tagsinput.min.js')}}"></script>



    <script>

        $(function(){
            'use strict'

            var editor = new Quill('#content', {
            modules: {
                toolbar: [
                [{ 'header': [1, 2, 3, 4, 5, 6, false] }],
                ['bold', 'italic','underline', 'strike'],
                [{ 'font': [] }],
                [{ 'align': [] }],
                ['link', 'blockquote', 'code-block', 'image'],
                [{ list: 'ordered' }, { list: 'bullet' }],
                [{ 'indent': '-1'}, { 'indent': '+1' }],
                [{ 'direction': 'rtl' }],
                ['clean'],
                [{ 'color': [] }, { 'background': [] }],

                ]
            },
            placeholder: '',
            theme: 'snow'
            });
            editor.on('text-change', function() {
            $('#bodyinput').val(editor.root.innerHTML);
                var text = editor.getText();
            });
            editor.root.innerHTML = $('#bodyinput').val();

            $('.select2').select2();


        });

    </script>

@endsection
