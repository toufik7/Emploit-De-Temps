@extends('base')
@section('content') 
<div class="container">

		<h1 class="text-center">Modifier salle<strong></strong></h1>

        <div>
       
             
            {{ Form::model($data['sl'],array('route'=>array('salle.update',$data['sl']->id),'method'=>'PUT')) }}
            <p>
               <div class="form-group">
               	{!! Form::label('nom','Entrer le nom de la salle') !!}
               	{!! Form::text('nom',null,['class'=>'form-control']) !!}
               </div>
             </p>


            <p>
             <div class="form-group">
              {!! Form::Label('id_type_seance', 'type:') !!}
              {!! Form::select('id_type_seance', $data['types'], $data['sl']->type->id, ['class' => 'form-control']) !!}
            </div>
          </p>

             <p>
               <div class="form-group">
                {!! Form::label('token','Entrer Etat Salle') !!}
                {!! Form::select('token',array('libre' => 'libre', 'occupe' => 'occupée'),$data['sl']->token,['class'=>'form-control']) !!}
               </div>
             </p>



              <p>
               <div class="form-group">
               	
               	{!! Form::button('Modifier',['type'=>'submit','class'=>'btn btn_sucess']) !!}
                  {{ link_to_route('salle.index','Annuler',null,['class'=>'btn btn_cnl']) }}
               </div>
             </p>

            {!! Form::close() !!}

        </div>

	
</div>

@endsection
