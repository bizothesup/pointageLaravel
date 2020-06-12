

<!-- Submit Field -->
<div class="form-group col-sm-6">
    <form method="post" action="{{ route('employes.store') }}">
        @csrf

        <div class="form-group has-feedback{{ $errors->has('nom') ? ' has-error' : '' }}">
            @if ($errors->has('nom'))
                <span class="help-block">
                        <strong>{{ $errors->first('nom') }}</strong>
                    </span>
            @endif
            <input type="text" class="form-control" name="nom" value="{{ old('nom') }}" placeholder="Nom">

        </div>
        <div class="form-group has-feedback{{ $errors->has('prenom') ? ' has-error' : '' }}">
            @if ($errors->has('prenom'))
                <span class="help-block">
                        <strong>{{ $errors->first('prenom') }}</strong>
                    </span>
            @endif
            <input type="text" class="form-control" name="prenom" value="{{ old('prenom') }}" placeholder="Prenom">

        </div>
        <div class="form-group has-feedback{{ $errors->has('date_naissance') ? ' has-error' : '' }}">
            @if ($errors->has('date_naissance'))
                <span class="help-block">
                        <strong>{{ $errors->first('date_naissance') }}</strong>
                    </span>
            @endif
            <input type="date" class="form-control" name="date_naissance" value="{{ old('date_naissance') }}" placeholder="Date Naissance">

        </div>
        <div class="form-group has-feedback{{ $errors->has('lieu_naissance') ? ' has-error' : '' }}">
            @if ($errors->has('lieu_naissance'))
                <span class="help-block">
                        <strong>{{ $errors->first('lieu_naissance') }}</strong>
                    </span>
            @endif
            <input type="text" class="form-control" name="lieu_naissance" value="{{ old('lieu_naissance') }}" placeholder="Lieu de Naissance">

        </div>
        <div class="form-group has-feedback{{ $errors->has('profession') ? ' has-error' : '' }}">
            @if ($errors->has('profession'))
                <span class="help-block">
                        <strong>{{ $errors->first('profession') }}</strong>
                    </span>
            @endif
            <input type="text" class="form-control" name="profession" value="{{ old('profession') }}" placeholder="Profession">

        </div>
        <div class="form-group has-feedback{{ $errors->has('service') ? ' has-error' : '' }}">
            @if ($errors->has('service'))
                <span class="help-block">
                        <strong>{{ $errors->first('service') }}</strong>
                    </span>
            @endif
            <input type="text" class="form-control" name="service" value="{{ old('service') }}" placeholder="Service">

        </div>
        <div class="form-group has-feedback{{ $errors->has('email') ? ' has-error' : '' }}">
            @if ($errors->has('email'))
                <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
            @endif
            <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email">

        </div>
        <div class="form-group has-feedback{{ $errors->has('adressse') ? ' has-error' : '' }}">
            @if ($errors->has('adressse'))
                <span class="help-block">
                        <strong>{{ $errors->first('adressse') }}</strong>
                    </span>
            @endif
            <input type="text" class="form-control" name="adressse" value="{{ old('adressse') }}" placeholder="Adresse">

        </div>

        <div class="row">
            <div class="col-xs-8">
                <div class="checkbox icheck">
                    <label>
                        <input type="checkbox"  name="active"> Autorisé à faire des Heures Supplémentaires
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
