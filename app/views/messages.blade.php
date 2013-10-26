@extends('layouts.master')

@section('content')
    @foreach($messages as $message)
        <p>{{ $message->sender }}</p>
    @endforeach
@stop
