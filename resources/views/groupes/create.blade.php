@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Groupe
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'groupes.store']) !!}

                        @include('groupes.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
