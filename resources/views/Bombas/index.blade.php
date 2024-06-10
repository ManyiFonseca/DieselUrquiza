@extends('layouts.app')
@section('titulo','Consultar Producto')
@section('contenido')
<div class="grid grid-cols-1 sm:grid-cols-2 md:cols-3 lg:grid-cols-4 gap-4 m-4">
    @foreach ($bombas as $bomba)

          <div class="card w-65 bg-base-100 shadow-xl image-full">
          <figure><img src="https://source.unsplash.com/random/800x600/?auto spare parts&{{ $bomba->Modelo }}" alt="{{ $bomba->Modelo }}" /></figure>
       <div class="card-body">
       <h2 class="card-title">${{$bomba->precio }}</h2>
        <div class="badge badge-outline"> Stock:{{$bomba->stock}}</div>
       <p>{{ Str::limit($bomba->descripción,30)}}</p>
     <div class="card-actions justify-end">
       <button class="btn btn-primary">{{$bomba->Modelo }}</button>
      </div>
       </div>
      </div>
    @endforeach
</div>
@endsection