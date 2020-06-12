<div class="table-responsive">
    <table class="table" id="cartRfids-table">
        <thead>
            <tr>
                <th>Employe Id</th>
        <th>Is Valid</th>
        <th>Matricule</th>
        <th>Numero Carte</th>
        <th>Identifiant Carte</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($cartRfids as $cartRfid)
            <tr>
                <td>{{ $cartRfid->employe_id }}</td>
            <td>{{ $cartRfid->is_valid }}</td>
            <td>{{ $cartRfid->matricule }}</td>
            <td>{{ $cartRfid->numero_carte }}</td>
            <td>{{ $cartRfid->identifiant_carte }}</td>
                <td>
                    {!! Form::open(['route' => ['cartRfids.destroy', $cartRfid->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('cartRfids.show', [$cartRfid->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('cartRfids.edit', [$cartRfid->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
