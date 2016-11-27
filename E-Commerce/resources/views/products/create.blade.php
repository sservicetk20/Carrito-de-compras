@extends("layouts.app");

@section("content")
   <div class="container white">
        <h1>Productos</h1>
        <!-- Formulario -->
        {!! Form::open(['url' => '/products', 'method' => 'POST']) !!}
         <div class="form-group">
             {{ Form::text('title','',['class' => 'form-control',
             'placeholder' =>'Titulo...']) }}
         </div>
         <div class="form-group">
             {{ Form::number('pricing','',['class' => 'form-control',
             'placeholder' =>'Precio de tu producto']) }}
         </div>
         <div class="form-group">
             {{ Form::textarea('description','',['class' => 'form-control',
             'placeholder' => 'Describe tu producto ...']) }}
         </div>
          <div class="form-group text-right">
             <a href="{{url('/products')}}">Regresar al listado de productos</a>
             <input type="submit" value="Enviar" class="btn btn-success">
         </div>
        {!! Form::close() !!}
    </div>
@endsection
