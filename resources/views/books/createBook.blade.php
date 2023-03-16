@extends('layouts.app')

@section('title', 'Create new book')

@section('content')
    <form action="{{route('books.store')}}" method="POST">
        @csrf

{{--        <div><input type="submit" value="Create" class="btn btn-primary btn-block"></div>--}}
    </form>

@endsection
