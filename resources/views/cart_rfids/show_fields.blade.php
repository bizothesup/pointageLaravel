<!-- Employe Id Field -->
<div class="form-group">
    {!! Form::label('employe_id', 'Employe Id:') !!}
    <p>{{ $cartRfid->employe_id }}</p>
</div>

<!-- Is Valid Field -->
<div class="form-group">
    {!! Form::label('is_valid', 'Is Valid:') !!}
    <p>{{ $cartRfid->is_valid }}</p>
</div>

<!-- Matricule Field -->
<div class="form-group">
    {!! Form::label('matricule', 'Matricule:') !!}
    <p>{{ $cartRfid->matricule }}</p>
</div>

<!-- Numero Carte Field -->
<div class="form-group">
    {!! Form::label('numero_carte', 'Numero Carte:') !!}
    <p>{{ $cartRfid->numero_carte }}</p>
</div>

<!-- Identifiant Carte Field -->
<div class="form-group">
    {!! Form::label('identifiant_carte', 'Identifiant Carte:') !!}
    <p>{{ $cartRfid->identifiant_carte }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $cartRfid->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $cartRfid->updated_at }}</p>
</div>

