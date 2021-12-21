@extends('front.master')
@section('title')
    Add New Blog
@endsection

@section('body')

    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="card">
                        <div class="card-header text-center">
                            <h3>All Blog Information</h3>
                        </div>
                        <div class="card-body">
                            @if($message =Session::get('message'))
                                <h3 class="text-center text-success">{{$message}}</h3>
                            @endif

                                <table class="table table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th>SL NO</th>
                                        <th>Blog Title</th>
                                        <th>Blog Author</th>
                                        <th>Blog Image</th>
                                        <th>Blog Description</th>
                                        <th>Action</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($blogs as $blog)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$blog->title}}</td>
                                        <td>{{$blog->author_name}}</td>
                                        <td>{{$blog->description}}</td>
                                        <td><img src="{{asset($blog->image)}}" height="150px" width="150px" alt=""></td>
                                        <td></td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection