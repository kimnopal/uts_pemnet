@extends('dashboard')

@section('main')
<form action="/items" method="post">
    @csrf
<div>
    <label for="name">name</label>
<input type="text" name="name" id="name" class="text-black">
</div>    

<div>
    <label for="price">price</label>
    <input type="text" name="price" id="price" class="text-black">
</div>

<div>
    <label for="quantity">quantity</label>
    <input type="quantity" name="quantity" id="quantity" class="text-black">
</div>
<button>simpan</button>
</form>
@endsection