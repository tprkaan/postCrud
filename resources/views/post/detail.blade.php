@extends('layouts.master')
@section('content')
    @section('title', 'Post Detail')

    <section class="pt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="float-left">Post Detail</div>
                            <div class="float-right">
                                <a href="/" class="btn btn-success"><i class="fa-solid fa-arrow-left-long mr-1"></i>All Post</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">{{$post->title}}</h5>
                            <p class="card-text">{{$post->body}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
