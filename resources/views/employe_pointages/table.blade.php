@section('css')
    <link rel="stylesheet" href="{{URL::asset('css/styledataTable.css')}}">
@endsection
<div class="container p-30">
    <div class="row">
        <div class="col-md-12 main-datatable">
            <div class="card_body">
                <div class="row d-flex">
                    <div class="col-sm-4 createSegment">
                        <a class="btn dim_button create_new"><i class="fa fa-file-excel-o" aria-hidden="true"></i>Exporter
                            Excel</a>
                    </div>
                    <div class="col-sm-8  add-flex">
                        <div class="form-group searchInput">

                        </div>
                    </div>
                </div>
                <div class="overflow-x">
                    <table style="with:100%" id="filtertable" class="table cust-datatable dataTable no-footer">
                        <thead>
                        <tr>
                            <th style="min-with:50px">Matricule Employe</th>
                            <th style="min-with:50px">Date Service</th>
                            <th style="min-with:50px">Mois</th>
                            <th style="min-with:50px">Année</th>
                            <th style="min-with:50px">Heure Début Service</th>
                            <th style="min-with:50px">Heure Fin Service</th>
                            <th style="min-with:50px">Etat</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($employePointages as $emp)
                            <tr>
                                <td>{{$emp->matricule_employe}}</td>
                                <td>{{$emp->date_service}}</td>
                                <td>{{$emp->mois}}</td>
                                <td>{{$emp->annees}}</td>
                                <td>{{$emp->heur_debut_service}}</td>
                                <td>{{$emp->heur_fin_service}}</td>
                                <td><span class="mode mode_on">Active</span></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@section('script')
    <link rel="stylesheet" href="{{URL::asset('css/styledataTable.css')}}">
@endsection
