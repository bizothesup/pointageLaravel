<div class="table-responsive">
    <table class="table" id="employeSortiePointages-table">
        <thead>
            <tr>
                <th>Employe Id</th>
        <th>Jour</th>
        <th>Mois</th>
        <th>Annes</th>
        <th>Heure Sortie</th>
        <th>Heure Retour</th>
        <th>Numero Carte</th>
        <th>Matricule Employe</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($employeSortiePointages as $employeSortiePointage)
            <tr>
                <td>{{ $employeSortiePointage->employe_id }}</td>
            <td>{{ $employeSortiePointage->jour }}</td>
            <td>{{ $employeSortiePointage->mois }}</td>
            <td>{{ $employeSortiePointage->annes }}</td>
            <td>{{ $employeSortiePointage->heure_sortie }}</td>
            <td>{{ $employeSortiePointage->heure_retour }}</td>
            <td>{{ $employeSortiePointage->numero_carte }}</td>
            <td>{{ $employeSortiePointage->matricule_employe }}</td>
                <td>
                    {!! Form::open(['route' => ['employeSortiePointages.destroy', $employeSortiePointage->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('employeSortiePointages.show', [$employeSortiePointage->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('employeSortiePointages.edit', [$employeSortiePointage->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
