<div class="table-responsive">
    <table class="table" id="pointageParams-table">
        <thead>
            <tr>
                <th>Heure Debut Service</th>
        <th>Heure Fin Service</th>
        <th>Nombre Heure Travail</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($pointageParams as $pointageParam)
            <tr>
                <td>{{ $pointageParam->heure_debut_service }}</td>
            <td>{{ $pointageParam->heure_fin_service }}</td>
            <td>{{ $pointageParam->nombre_heure_travail }}</td>
                <td>
                    {!! Form::open(['route' => ['pointageParams.destroy', $pointageParam->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('pointageParams.show', [$pointageParam->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('pointageParams.edit', [$pointageParam->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
