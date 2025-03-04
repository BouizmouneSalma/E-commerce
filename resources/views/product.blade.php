@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="flex flex-col md:flex-row">
        <div class="md:w-1/2">
            <img src="{{ $product->image }}" alt="{{ $product->name }}" class="w-full h-auto">
        </div>
        <div class="md:w-1/2 md:pl-8">
            <h1 class="text-3xl font-bold mb-4">{{ $product->name }}</h1>
            <p class="text-gray-700">{{ $product->description }}</p>
            <p class="text-2xl font-semibold mt-4">{{ $product->price }} €</p>
            <button class="mt-4 bg-blue-500 text-white px-4 py-2 rounded">Ajouter au panier</button>
        </div>
    </div>
    <div class="mt-8">
        <h2 class="text-2xl font-bold mb-4">Avis</h2>
        @foreach($product->reviews as $review)
        <div class="border rounded-lg p-4 mb-4">
            <p class="text-gray-700">{{ $review->content }}</p>
            <p class="text-gray-500 text-sm">{{ $review->created_at->format('d/m/Y') }}</p>
        </div>
        @endforeach
    </div>
</div>
@endsection