@extends('layouts.master')

@section('content')
  <section class="detailProduct">
       <article class="agregarContainer" >
      <div class="editTitle"> <h2 class="editar">NUEVO PRODUCTO</h2> </div> 
       <div class="agregarProducto">
             <form  action="/saveProduct" method="POST" enctype="multipart/form-data">
              @csrf
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
                    <label for="fotos">Imagen</label>
                    <input class="form-control" type="file" name="photopath">
                </div>
                
            </div>
            
            <div class="btnContainer">
                    <input type="submit" class="btnSave" value="Agregar Producto">
             </div>
         </form>

          </div>
      </article>
  </section>

@endsection
