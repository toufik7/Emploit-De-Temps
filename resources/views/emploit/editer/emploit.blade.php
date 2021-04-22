@extends('base')
@section('content') 
<div class="container">

		<h1 class="text-center">Modifier emploit<strong></strong></h1>

        <div>
       
             
            {{ Form::model($emp,array('route'=>array('emploit.update',$emp->id),'method'=>'PUT')) }}
            <p>
              <div class="form-group">
                  {!! Form::label('titre','Entrer le Titre de emploit') !!}
                  {!! Form::text('Titre',$emp->Titre,['class'=>'form-control']) !!}
               </div>
            </p>

            <p>
                <div class="form-group">
                {!! Form::label('jours','Selectionner les jours') !!}
                 {!! Form::select('jours', array('Dimanche' => 'Dimanche', 'Lundi' => 'Lundi','Mardi' => 'Mardi', 'Mercredi' => 'Mercredi','Jeudi' => 'Jeudi', 'Vendredi' => 'Vendredi','Samedi' => 'Samedi'), $emp->jours, ['placeholder' => 'choisit les jours...','multiple' => 'multiple','class'=>'mlt']) !!}
               </div>
             </p>
               
              <p>  
               <div class="form-group">
               	{!! Form::button('Update',['type'=>'submit','class'=>'btn btn_sucess']) !!}
                  {{ link_to_route('emploit.index','Annuler',null,['class'=>'btn btn_cnl']) }}
              </div>
              </p> 
             

            {!! Form::close() !!}

        </div>

	
</div>

@endsection
