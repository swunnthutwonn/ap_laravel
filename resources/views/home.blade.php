@extends('layout')

@section('content')
    <div class="container">
        <div class="card">
        <div class="card-header" style="text-align: center">
            Contents
        </div>
        <div class="card-body">
            {{-- {{$data}} --}}
            @foreach ($data as $post)
                <div>
                    <h5 class="card-title">{{$post->name}}</h5>
                    p class="card=text">{{$post->description}}.</p>
                    <a href="javascript:void(0);" class="btn btn-primary">View</a>
                </div>
                <hr/>
            @endforeach
        </div>
    </div>
@endsection
