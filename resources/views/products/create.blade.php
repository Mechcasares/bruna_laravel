@extends('layouts.master')

@section('content')
  <section class="principal">
       <article class="nuevos" id="products">
           <div class="productos">

             <form  action="/saveProduct" method="POST" enctype="multipart/form-data">
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
                                 
                    

                    <label for="name">Nombre</label>
                    <input class="form-control" type="text" name="name" id="name" value=""/>
                </div>
                <div  class="form-group col-4 offset-4">
                    <label for="price">Precio</label>
                    <input class="form-control" type="decimal" name="price" id="price" value=""/>
                </div>
                <div  class="form-group col-4 offset-4">
                    <label for="description">Descripción</label>
                    <input class="form-control" type="text" name="description" id="description" value=""/>
                </div>
                    
                <div  class="form-group col-4 offset-4">
                    <label for="category">Categoría</label>
                    <select class="form-control" name="category_id">
                      @foreach ($categories as $category)
                        <option value="{{$category->id}}"> {{$category->name}} </option>    
                      @endforeach  
                      
                    </select>
                </div>
                <div class="form-group col-4 offset-4">
                    <label for="img">Imagen</label>
                    <input class="form-control" type="file" name="photopath">
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
