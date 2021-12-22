@extends('front.master')
@section('title')
    Edit Blog
@endsection

@section('body')

    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="card">
                        <div class="card-header text-center">
                            <h3>Edit Blog Form</h3>
                        </div>
                        <div class="card-body">
                            @if($message =Session::get('message'))
                                <h3 class="text-center text-success">{{$message}}</h3>
                            @endif
                            <form action="{{route('update-blog')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" value="{{$blog->id}}" name="id">
                                <div class="form-group row">
                                    <label for="" class="col-form-label col-md-3 text-center">Blog Title</label>
                                    <div class="col-md-9">
                                        <input type="text" value="{{$blog->title}}" class="form-control" name="title">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="" class="col-form-label col-md-3 text-center">Author Name</label>
                                    <div class="col-md-9">
                                        <input type="text" value="{{$blog->author_name}}" class="form-control" name="author_name">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-form-label col-md-3 text-center">Blog Description</label>
                                    <div class="col-md-9">
                                        <textarea class="form-control"  name="description">{{$blog->description}}</textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-form-label col-md-3 text-center">Image</label>
                                    <div class="col-md-9">
                                        <input type="file" class="form-control" name="image">
                                        <img src="{{asset($blog->image)}}" alt="" height="100" width="100"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-form-label col-md-3 text-center"></label>
                                    <div class="col-md-9">
                                        <input type="submit" class="btn btn-outline-success" name="btn" value="Update Blog Info"/>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection