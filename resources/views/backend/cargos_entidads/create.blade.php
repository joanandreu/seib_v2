@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Cargos Entidad
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'backend.cargosEntidads.store']) !!}

                        @include('backend.cargos_entidads.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
