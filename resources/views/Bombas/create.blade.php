@extends('layouts.app')
@section('titulo','Consultar Producto')
@section('cabecera', 'Crear Producto')
@section('contenido')
    <div class="flex justify-center my-6">
        <div class="card w-96 shadow-2xl bg-base-100">
            <div class="card-body">
                {{-- Formulario para crear un producto --}}
                <form action="{{ route( 'Bombas.store' )}}" method="POST">
                    @csrf
                     {{-- Modelo --}}
                        <div class="form-control">
                            <label class="label" for="modelo">
                              <span class="label-text">Modelo</span>
                            </label>
                           <input type="text" name="modelo" placeholder="Modelo de la Bomba" class="input input-bordered" required />
                        </div>
                    {{-- Descripción --}}
                        <div class="form-control">
                          <label class="label" for="descripción">
                             <span class="label-text">Descripción</span>
                            </label>
                          <input type="text" name="descripción" placeholder="Escriba la Descripción" class="input input-bordered" />
                        </div>
                    {{-- Precio --}}
                        <div class="form-control">
                         <label class="label"for="precio">
                            <span class="label-text">Precio</span>
                        </label>
                         <input type="number" name="precio"  placeholder="Escriba el Precio" class="input input-bordered" required />
                        </div>
                    {{-- Stock--}}
                        <div class="form-control">
                          <label class="label" for="stock">
                            <span class="label-text">Stock</span>
                        </label>
                         <input type="number" name="stock" placeholder="Escriba el Stock" class="input input-bordered"/>
                        </div>
                    {{-- Botón de enviar--}}
                        <div class="form-control mt-6">
                         <button type="submit" class="btn btn-primary">Crear Producto</button>
                         <a href="{{ route('Bombas.index') }}" class="btn btn-outline btn-primary mt-4">Cancelar</a>
                        </div>
                </form>
            </div>
        </div>
    </div>
@endsection