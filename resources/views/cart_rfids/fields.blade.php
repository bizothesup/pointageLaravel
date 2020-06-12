

<!-- Submit Field -->
<div class="form-group col-sm-6">
    <form method="post" action="{{route('cartRfids.store')}}">
        @csrf

        <div class="form-group has-feedback{{ $errors->has('identifiant_carte') ? ' has-error' : '' }}">
            @if ($errors->has('identifiant_carte'))
                <span class="help-block">
                        <strong>{{ $errors->first('identifiant_carte') }}</strong>
                    </span>
            @endif
            <input type="text" class="form-control" name="identifiant_carte" value="{{ old('identifiant_carte') }}" placeholder="Identifiant Carte">

        </div>
        <div class="form-group has-feedback{{ $errors->has('employeId') ? ' has-error' : '' }}">
            @if ($errors->has('employeId'))
                <span class="help-block">
                        <strong>{{ $errors->first('employeId') }}</strong>
                    </span>
            @endif
                {!! Form::select('employeId', $employe, null, ['class' => 'select2 form-control']) !!}

        </div>

        <div class="row">
            <div class="col-xs-8">
                <div class="checkbox icheck">
                    <label>
                        <input type="checkbox" checked name="active"> Active
                    </label>
                </div>
            </div>
            <!-- /.col -->
            <div class="col-xs-4">
                <button type="submit" class="btn btn-primary btn-block btn-flat">Enregister</button>
            </div>
            <!-- /.col -->
        </div>
    </form>
</div>
