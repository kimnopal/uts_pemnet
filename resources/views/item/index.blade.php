@extends('dashboard')

@section('main')
    <a href="/items/create" class="border border-white p-5" >tambah item</a>
    <h1 class="text-3xl font-bold text-center mb-8">Daftar Barang Inventaris</h1>

    <div class="flex flex-col">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Name
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Price
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Quantity
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    aksi
                                </th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200 bg-white">
                            <!-- Looping data barang inventaris -->
                            @foreach($items as $item)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                        {{ $item->name }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        Rp {{ number_format($item->price, 2, ',', '.') }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        {{ $item->quantity }}
                                    </td>
                                    <td class="text-white">
                                        <a href="/items/{{$item->id}}/edit" class="text-black" >edit</a>
                                        <form action="/items/{{$item->id}}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button class="text-black">hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
    </div>

    {{$items->links()}}
@endsection