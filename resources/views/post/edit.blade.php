@extends('layouts.master')
@section('content')
    @section('title', 'Post Update')

    <section class="pt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="float-left">Post Update</div>
                            <div class="float-right">
                                <a href="/" class="btn btn-success"><i class="fa-solid fa-arrow-left-long mr-1"></i>All Post</a>
                            </div>
                        </div>
                        <div class="card-body">
                            @if(Session::has('messages'))
                                <div class="alert alert-success" role="alert">
                                    {{Session::get('messages')}}
                                </div>
                            @endif
                            <form action="{{route('post.update')}}" method="POST">
                                @csrf
                                <input type="hidden" name="id" value="{{$post->id}}">
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Title</label>
                                    <input type="text" name="title" class="form-control" id="exampleFormControlInput1" value="{{$post->title}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Description</label>
                                    <textarea class="form-control" name="body" id="exampleFormControlTextarea1" rows="3">
                                        {{$post->body}}
                                    </textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Update Post</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
