@extends('layouts.admin.mainLayout')
@section('pageLayout')
    @foreach ($tags as $tag)
        <button class="btn btn-primary">{{$tag->name}}</button>
        <a href="{{route('admin.tag.destroy',['id' => $tag->id ])}}"><img src="{{asset('img/trashbox.jpeg')}}" alt=""></a>
    @endforeach

    <form action="{{route('admin.tag.store')}}" method="post" enctype="multipart/form-data">
        @csrf 
        <input type="text" name="tag_name">
        <input type="submit" value="追加">
    </form>
@endsection
@section('tag', 'selected')
