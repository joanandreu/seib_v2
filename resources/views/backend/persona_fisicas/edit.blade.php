@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Persona Fisica
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($personaFisica, ['route' => ['backend.personaFisicas.update', $personaFisica->id], 'method' => 'patch']) !!}

                        @include('backend.persona_fisicas.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection