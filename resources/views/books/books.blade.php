@extends('layouts.app')

@section('title', 'Books')

@section('content')
    <h3>Books page</h3> <br>

    @foreach($books as $book)
        <div >
        <h5>{{$book['name']}}</h5>
{{--        <a href="{{route('books.show', ['book' => $book->id])}}">{{$book['name']}}</a>--}}
        <p>{{$book['description']}}</p>

        <p class="text-muted">
            Added {{\Carbon\Carbon::parse($book['published_date'])->diffForHumans()}}
{{--            {{dd($book->list_of_authors)}}--}}
            by @if(isset($book->list_of_authors[0]->middle_name))
                   @foreach($book->list_of_authors as $author)
                {{$author->middle_name}}
                {{$author->last_name}}
                {{$author->first_name}},
                @endforeach
            @else
{{--            {{$book->list_of_authors}}--}} Sorry, I don't know((
            @endif

        </p>
        </div>

        <div class="mb-3">
            <a href="{{route('books.edit', ['book' => $book->id])}}" class="btn btn-primary">Edit</a>
            <form class="d-inline" action="{{route('books.destroy', ['book' => $book->id])}}" method="POST">
                @csrf
                @method('DELETE')
                <input type="submit" value="Delete" class="btn btn-primary">
            </form>
        </div>
    @endforeach

@endsection
