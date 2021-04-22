@extends('base')
@section('content') 
<div class="container">

		<h1 class="text-center">Modifier Promotion<strong></strong></h1>

        <div>
       
             
           {{ Form::model($promo,array('route'=>array('promotions.update',$promo->id),'method'=>'PUT')) }}
           <p>
               <div class="form-group">
               	{!! Form::label('promo','Entrer la promo') !!}
               	{!! Form::text('promo',null,['class'=>'form-control']) !!}
               </div>
              </p>

              <p>
               <div class="form-group">
                {!! Form::label('nb_etudiants','Entrer le nombre des etudiants') !!}
                {!! Form::text('nb_etudiants',null,['class'=>'form-control']) !!}
               </div>
              </p>

              <p>
               <div class="form-group">
               	
               	{!! Form::button('Update',['type'=>'submit','class'=>'btn btn_sucess']) !!}
                  {{ link_to_route('promotions.index','Annuler',null,['class'=>'btn btn_cnl']) }}
               </div>
              </p>

            {!! Form::close() !!}

        </div>

	
</div>

@endsection
