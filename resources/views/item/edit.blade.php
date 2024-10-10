@extends('dashboard')

@section('main')
<form action="/items/{{$item->id}}" method="post">
    @csrf
    @method('put')
<div>
    <label for="name">name</label>
<input type="text" name="name" id="name" value="{{$item->name}}" class="text-black">
</div>    

<div>
    <label for="price">price</label>
    <input type="text" name="price" id="price" value="{{$item->price}}" class="text-black">
</div>

<div>
    <label for="quantity">quantity</label>
    <input type="quantity" name="quantity" id="quantity" value="{{$item->quantity}}" class="text-black">
</div>
<button>simpan</button>
</form>
@endsection