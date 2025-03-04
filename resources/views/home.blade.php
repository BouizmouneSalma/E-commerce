@extends('layouts.app')

@section('content')
<div class="container mx-auto mt-8">
    <h1 class="text-3xl font-bold mb-6">Catalogue des Produits</h1>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach($products as $product)
        <div class="bg-white rounded-lg shadow-lg p-6">
            <img src="{{ $product->image }}" alt="{{ $product->name }}" class="w-full h-48 object-cover mb-4">
            <h2 class="text-xl font-bold mb-2">{{ $product->name }}</h2>
            <p class="text-gray-700 mb-4">{{ $product->price }} €</p>
            <form action="{{ route('cart.add', $product->id) }}" method="POST">
                @csrf
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Ajouter au panier
                </button>
            </form>
        </div>
        @endforeach
    </div>
</div>
@endsection