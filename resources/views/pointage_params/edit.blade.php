@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Pointage Param
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($pointageParam, ['route' => ['pointageParams.update', $pointageParam->id], 'method' => 'patch']) !!}

                        @include('pointage_params.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection