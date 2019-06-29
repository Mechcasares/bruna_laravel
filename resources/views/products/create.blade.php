@extends('layouts.master')

@section('content')
  <section class="principal">
       <article class="nuevos" id="productos">
           <div class="productos">

             <form  action="/saveProducts" method="POST">
              @csrf
               <h2 class="__productonuevo">Nuevo Producto</h2>
               <br>
              
               <br>
               <div class="form-row">
                <div  class="form-group col-4 offset-4 ">
                  
                    
                    @if(count($errors)>0)
                    <ul class="alert alert-danger">
                        
                        @foreach ($errors->all() as $error)
                         <li>{{$error}}</li>    
                        @endforeach
                    </ul> 
                    @endif   
                                 
                    

                    <label for="nombre">Nombre</label>
                    <input class="form-control" type="text" name="name" id="name" value="{{old('name')}}"/>
                </div>
                <div  class="form-group col-4 offset-4">
                    <label for="precio">Precio</label>
                    <input class="form-control" type="decimal" name="price" id="price" value=""/>
                </div>
                <div  class="form-group col-4 offset-4">
                    <label for="descripcion">Descripción</label>
                    <input class="form-control" type="text" name="description" id="description" value=""/>
                </div>
                <div  class="form-group col-4 offset-4">
                    <label for="photopath">Imagen</label>
                    <input class="form-control" type="text" name="photopath" id="photopath" value=""/>
                </div>

                                
                <div  class="form-group col-4 offset-4">
                    <label for="category">Categoría</label>
                    <select class="form-control" name="category_id">
                      @foreach ($categorias as $categoria)
                        <option value="{{$categoria->id}}"> {{$categoria->name}} </option>    
                      @endforeach  
                      
                    </select>
                </div>
                <div class="form-group col-4 offset-4">
                    <input type="submit" class="btn btn-primary" value="Agregar Producto">
                </div>
            </div>
            </form>

          </div>
      </article>
  </section>

@endsection
