@extends('layouts.master')
@section('content')
    @section('title', 'Post List')

    <section class="pt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="float-left">All Post</div>
                            <div class="float-right">
                                <a href="{{route('post.add')}}" class="btn btn-success"><i class="fa-solid fa-plus mr-1"></i>Add Post</a>
                            </div>
                        </div>
                        <div class="card-body">
                            @if(Session::has('messages'))
                                <div class="alert alert-success" role="alert">
                                    {{Session::get('messages')}}
                                </div>
                            @endif
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Body</th>
                                    <th scope="col">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($posts as $post)
                                <tr>
                                    <th scope="row">{{ $post->id }}</th>
                                    <td>{{$post->title}}</td>
                                    <td>{{$post->body}}</td>
                                    <td>
                                        <div class=" d-flex justify-content-center">
                                            <a href="{{route('post.show', $post->id)}}" class="btn btn-success"><i class="fa-solid fa-circle-info"></i></a>
                                            <a href="{{route('post.edit', $post->id)}}" class="btn btn-warning ml-1 mr-1"><i class="fa-solid fa-pen-to-square"></i></a>
                                            <a href="{{route('post.delete', $post->id)}}" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                            {{$posts->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
