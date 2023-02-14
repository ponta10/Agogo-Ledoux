@extends('layouts.mainLayout')
@section('pageLayout')
    <input type="text" value="{{ $product->name }}">
    <input type="text" value="{{ $product->price }}">
    <input type="text" value="{{$product->stock}}">
    <textarea value="{{$product->desc}}">{{$product->desc}}</textarea>
    <input type="file" name="image" class="file" value="{{$product->image}}"> 
    <img id="preview" class="img-thumbnail h-25 w-25 mb-3" width="600px" height="450px" src="/storage/image/{{ $product->image }}">
@endsection
@section('product', 'selected') 