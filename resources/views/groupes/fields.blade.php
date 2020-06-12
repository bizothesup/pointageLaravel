

<!-- Submit Field -->
<div class="form-group col-sm-6">
    <form method="post" action="{{ route('groupes.store') }}">
        @csrf

        <div class="form-group has-feedback{{ $errors->has('name') ? ' has-error' : '' }}">
            @if ($errors->has('name'))
                <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
            @endif
            <input type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Full Name">

        </div>


        <div class="row">
            <div class="col-xs-8">

            </div>
            <!-- /.col -->
            <div class="col-xs-4">
                <button type="submit" class="btn btn-primary btn-block btn-flat">Enregister</button>
            </div>
            <!-- /.col -->
        </div>
    </form>
</div>
