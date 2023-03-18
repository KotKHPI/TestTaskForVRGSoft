<h1>Name:</h1>
<div class="form-group">
    <label for="title">Name</label>
    <input id="title" type="text" class="form-control" name="name" value="{{old('name', optional($book ?? null)->name)}}">
</div>

<h1>Description:</h1>
<div class="form-group">
    <label for="content">Description</label>
    <input class="form-control" id="content" name="description" value="{{old('description', optional($book ?? null)->description)}}">
</div>

<h1>Image:</h1>
<div class="form-group">
    <label for="content">Image</label>
    <input class="form-control" id="content" name="image_filename" value="{{old('image_filename', optional($book ?? null)->image_filename)}}">
</div>

<h1>Published date:</h1>
<div class="form-group">
    <label for="content">Published date</label>
    <input class="form-control" id="content" name="published_date" type="date" value="{{old('published_date', optional($book ?? null)->published_date)}}">
</div>

<h1>Authors:</h1>
<div class="form-group">
    <label for="content">Authors (about 5 authors)</label>
    <select class="form-control" id="content" name="author_id[]" required="required" multiple="multiple" size="5">
        @foreach($authors = \App\Models\Author::all() as $author)
        <option value="{{$author->id}}">{{$author->middle_name}} {{$author->last_name}} {{$author->first_name}}</option>
        @endforeach
    </select>
{{--    <input class="form-control" id="content" name="authors" type="date" value="{{old('authors', optional($book ?? null)->published_date)}}">--}}
</div>

@if($errors->any())
    <div class="mb-3">
        <ul class="list-group">
            @foreach($errors->all() as $error)
                <li class="list-group-item list-group-item-danger">{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif
