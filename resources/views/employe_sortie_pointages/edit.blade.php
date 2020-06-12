@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Employe Sortie Pointage
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($employeSortiePointage, ['route' => ['employeSortiePointages.update', $employeSortiePointage->id], 'method' => 'patch']) !!}

                        @include('employe_sortie_pointages.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection