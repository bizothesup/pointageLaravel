@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Cart Rfid
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($cartRfid, ['route' => ['cartRfids.update', $cartRfid->id], 'method' => 'patch']) !!}

                        @include('cart_rfids.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection