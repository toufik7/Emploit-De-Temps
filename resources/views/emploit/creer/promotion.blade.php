@extends('base')
@section('content') 
<div class="container">

		<h1 class="text-center">Ajouter la Promotion<strong></strong></h1>

        <div>
       
             
            
            {!! Form::open(array('route'=>'promotions.store')) !!}
            <p>
               <div class="form-group">
                {!! Form::label('promo','Entrer la promo') !!}
                {!! Form::text('promo',null,['class'=>'form-control']) !!}
               </div>
             </p>

             <P>
               <div class="form-group">
                {!! Form::label('nb_etudiants','Entrer nb_etudiants') !!}
                {!! Form::text('nb_etudiants',null,['class'=>'form-control']) !!}
               </div>
             </P>

               <P>
               <div class="form-group">
                
                {!! Form::button('Ajouter',['type'=>'submit','class'=>'btn btn_sucess']) !!}
                  {{ link_to_route('promotions.index','Annuler',null,['class'=>'btn btn_cnl']) }}
               </div>
             </P>

            {!! Form::close() !!}

        </div>

	
</div>

@endsection
