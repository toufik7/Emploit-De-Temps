@extends('base')
@section('content') 
<div class="container">

		<h1 class="text-center">Modifier Module<strong></strong></h1>

        <div>
       
             
             {{ Form::model($data['mod'],array('route'=>array('module.update',$data['mod']->id),'method'=>'PUT')) }}
       
              <p>
               <div class="form-group">
               	{!! Form::label('titre','Entrer le titre') !!}
               	{!! Form::text('titre',null,['class'=>'form-control']) !!}
               </div>
             </p>

             <p>
               <div class="form-group">
                {!! Form::label('nb_heurs','Entrer le nombre des heurs') !!}
                {!! Form::text('nb_heurs',null,['class'=>'form-control']) !!}
               </div>
             </p>

             <p>
               <div class="form-group">
                {!! Form::label('enseignant','choisit un enseignant') !!}
                {!! Form::select('id_enseignent', $data['ens'],$data['mod']->enseignents,['class'=>'form-control']) !!}
               </div>
             </p>

              <p>
               <div class="form-group">
               	
               	{!! Form::button('Update',['type'=>'submit','class'=>'btn btn_sucess']) !!}
                  {{ link_to_route('module.index','Annuler',null,['class'=>'btn btn_cnl']) }}
               </div>
             </p>

            {!! Form::close() !!}

        </div>

	
</div>

@endsection
