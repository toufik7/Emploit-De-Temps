@extends('base')
@section('content') 
<div class="container">

		<h1 class="text-center">Ajouter Un Type De Seance<strong></strong></h1>

        <div>
       
             
            {!! Form::open(array('route'=>'types.store')) !!}
               <div class="form-group">
                <div class="org">
               	{!! Form::label('type','Entrer le Type de Seance') !!}
               	{!! Form::text('type',null,['class'=>'form-control']) !!}
               </div>
               </div>

               <div class="form-group">
               	
               	{!! Form::button('Ajouter',['type'=>'submit','class'=>'btn btn_sucess']) !!}
                  {{ link_to_route('types.index','Annuler',null,['class'=>'btn btn_cnl']) }}
               </div>

            {!! Form::close() !!}

        </div>

	
</div>

@endsection
