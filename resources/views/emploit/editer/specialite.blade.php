@extends('base')
@section('content') 
<div class="container">

		<h1 class="text-center">Modifier Specialite {{ $spec->titre }}<strong></strong></h1>

        <div>
          {{ Form::model($spec,array('route'=>array('specialites.update',$spec->id),'method'=>'PUT')) }}
       
             
            
              <p>
               <div class="form-group">
                {!! Form::label('titre','Entrer le titre') !!}
                {!! Form::text('titre',null,['class'=>'form-control']) !!}
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
                
                {!! Form::button('Update',['type'=>'submit','class'=>'btn btn_sucess']) !!}
                  {{ link_to_route('specialites.index','Annuler',null,['class'=>'btn btn_cnl']) }}
               </div>
             </P>

            {!! Form::close() !!}

        </div>

	
</div>

@endsection
