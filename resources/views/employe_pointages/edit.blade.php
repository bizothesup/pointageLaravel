@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Employe Pointage
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($employePointage, ['route' => ['employePointages.update', $employePointage->id], 'method' => 'patch']) !!}

                        @include('employe_pointages.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection