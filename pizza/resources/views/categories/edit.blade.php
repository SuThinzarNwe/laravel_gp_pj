@extends('categories.app')

@section('content')

<h1>Category Update</h1>
<hr>

@if ($errors->any())
\<div class="alert alert-danger"></div>
<ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
</ul>
    
@endif
    <form action="{{ route('categories.update'), $category->id }}" method="post">
    @csrf
    @method('put')
    <input type="text" name="nmae" class="form-control mb-3" placeholder="Category Name" value="{{ $category->name }}">
    <button class="btn btn-primary float-end px-5" type="submit">Submit</button>
    </form>
@endsection