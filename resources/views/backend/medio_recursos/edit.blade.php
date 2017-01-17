@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Medio Recurso
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($medioRecurso, ['route' => ['backend.medioRecursos.update', $medioRecurso->id], 'method' => 'patch']) !!}

                        @include('backend.medio_recursos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection