@extends('layout')

@section('content')
    <h3>This is About Page</h3>
    @foreach($data as $key => $value)
        <ul>
            <li>{{$key .' = '.$value}}</li>
        </ul>
    @endforeach
@endsection
