<!-- Heure Debut Service Field -->
<div class="form-group">
    {!! Form::label('heure_debut_service', 'Heure Debut Service:') !!}
    <p>{{ $pointageParam->heure_debut_service }}</p>
</div>

<!-- Heure Fin Service Field -->
<div class="form-group">
    {!! Form::label('heure_fin_service', 'Heure Fin Service:') !!}
    <p>{{ $pointageParam->heure_fin_service }}</p>
</div>

<!-- Nombre Heure Travail Field -->
<div class="form-group">
    {!! Form::label('nombre_heure_travail', 'Nombre Heure Travail:') !!}
    <p>{{ $pointageParam->nombre_heure_travail }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $pointageParam->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $pointageParam->updated_at }}</p>
</div>

