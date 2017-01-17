@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Catalogo Medio
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($catalogoMedio, ['route' => ['backend.catalogoMedios.update', $catalogoMedio->id], 'method' => 'patch']) !!}

                        @include('backend.catalogo_medios.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection