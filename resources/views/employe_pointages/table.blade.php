<div class="table-responsive">
    <table class="table" id="employePointages-table">
        <thead>
            <tr>
                <th>Enmploye Id</th>
        <th>Date-Service</th>
        <th>Num Carte</th>
        <th>Matricule Employe</th>
        <th>Mois</th>
        <th>Annees</th>
        <th>Heure Debut Service</th>
        <th>Heure Fin Service</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($employePointages as $employePointage)
            <tr>
                <td>{{ $employePointage->enmploye_id }}</td>
            <td>{{ $employePointage->date_service }}</td>
            <td>{{ $employePointage->num_carte }}</td>
            <td>{{ $employePointage->matricule_employe }}</td>
            <td>{{ $employePointage->mois }}</td>
            <td>{{ $employePointage->annees }}</td>
            <td>{{ $employePointage->heure_debut_service }}</td>
            <td>{{ $employePointage->heure_fin_service }}</td>
                <td>
                    {!! Form::open(['route' => ['employePointages.destroy', $employePointage->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('employePointages.show', [$employePointage->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('employePointages.edit', [$employePointage->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
