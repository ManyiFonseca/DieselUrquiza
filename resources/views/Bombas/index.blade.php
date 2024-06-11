@extends('layouts.app')
@section('titulo','Consultar Producto')
@section('contenido')
  <div class="grid grid-cols-1 sm:grid-cols-2 md:cols-3 lg:grid-cols-4 gap-4 m-4">
    @foreach ($bombas as $bomba)

      <div class="card w-65 bg-base-100 shadow-xl image-full">
            <figure><img src="https://loremflickr.com/200/200/auto&{{ $bomba->modelo }}" alt="{{ $bomba->modelo }}" /></figure>
        <div class="card-body">
           <h2 class="card-title">${{$bomba->precio }}</h2>
           <div class="badge badge-outline"> {{$bomba->modelo}}</div>
           <p>{{ Str::limit($bomba->descripción,30)}}</p>
          <div class="card-actions justify-end">
             <a href="{{route('bombas.edit' , $bomba->id) }}" class="btn btn-xs btn-secondary">Editar</a>
              <form action="{{ route('bombas.destroy', $bomba->id)}}" method="POST">
               @csrf
               @method('DELETE')
               <BUtton type="submit" class="btn btn-xs btn-error">Eliminar</BUtton>
              </form>
          </div>
        </div>
      </div>
    @endforeach
  </div>
@endsection