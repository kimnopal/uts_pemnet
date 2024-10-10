@extends('dashboard')

@section('main')
<form action="/items" method="post">
    @csrf
    @method('put')
<div>
    <label for="name">name</label>
<input type="text" name="name" id="name" value="{{$item->name}}">
</div>    

<div>
    <label for="price">price</label>
    <input type="text" name="price" id="price" value="{{$item->price}}">
</div>

<div>
    <label for="quantity">quantity</label>
    <input type="quantity" name="quantity" id="quantity" value="{{$item->quantity}}">
</div>
<button>simpan</button>
</form>
@endsection