<div class="table-responsive">
    <table class="table" id="employes-table">
        <thead>
            <tr>
                <th>Matircule</th>
        <th>Nom</th>
        <th>Prenom</th>
        <th>Date Naissance</th>
        <th>Lieu Naissance</th>
        <th>Profession</th>
        <th>Service</th>
        <th>Email</th>
        <th>Adressse</th>
        <th>Photo</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($employes as $employe)
            <tr>
                <td>{{ $employe->matircule }}</td>
            <td>{{ $employe->nom }}</td>
            <td>{{ $employe->prenom }}</td>
            <td>{{ $employe->date_naissance }}</td>
            <td>{{ $employe->lieu_naissance }}</td>
            <td>{{ $employe->profession }}</td>
            <td>{{ $employe->service }}</td>
            <td>{{ $employe->email }}</td>
            <td>{{ $employe->adressse }}</td>
            <td>{{ $employe->photo }}</td>
                <td>
                    {!! Form::open(['route' => ['employes.destroy', $employe->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('employes.show', [$employe->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('employes.edit', [$employe->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
