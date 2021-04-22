@extends('base')
@section('content') 
<div class="container">

		<h1 class="text-center">Modifier Type De Seance<strong></strong></h1>

        <div>
       
             
            {!! Form::model($type,array('route'=>['types.update',$type->id],'method'=>'PUT')) !!}
               <div class="form-group">
               	{!! Form::label('type','Entrer le Type de Seance') !!}
               	{!! Form::text('type',null,['class'=>'form-control']) !!}
               </div>

               <div class="form-group">
               	
               	{!! Form::button('Update',['type'=>'submit','class'=>'btn btn_sucess']) !!}
                  {{ link_to_route('types.index','Annuler',null,['class'=>'btn btn_cnl']) }}
               </div>

            {!! Form::close() !!}

        </div>

	
</div>

@endsection
