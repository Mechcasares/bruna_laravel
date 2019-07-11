@extends('layouts.master') 
@section('content')

<div class="detailProduct">
  <div class="editContainer">
    <div class="editTitle">
      <h1 class="editar" >EDITAR PRODUCTO</h3>
    </div>
    <h2>{{ $product->name }}</h2>
    @if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form class="" action="" method="POST" enctype="multipart/form-data">
    {{ method_field('PATCH') }}
    @csrf
        <div class="form-group">
            <label for="name">Nombre</label>
            <input type="text" name="name" value="{{ $product->name }}" class="form-control">
        </div>
        <div class="form-group">
            <label for="price">Precio</label>
            <input type="decimal" name="price" value="{{ $product->price }}" class="form-control">
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <input type="text" name="description" value="{{ $product->description }}" class="form-control">
        </div>
        
        <div class="form-group">
            <label for="category">Categoría</label>
            <select class="form-control" name="category_id">
                <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
            @foreach($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
        </div>

        <div class="btnContainer">
            <input type="submit" class="btnSave" value="CONFIRMAR CAMBIOS">
        </div>
    </form>
    </div>
</div>
@endsection