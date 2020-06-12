<li class="{{ Request::is('employePointages*') ? 'active' : '' }}">
    <a href="{{ route('employePointages.index') }}"><i class="fa fa-edit"></i><span>Employe Pointages</span></a>
</li>

<li class="{{ Request::is('employes*') ? 'active' : '' }}">
    <a href="{{ route('employes.index') }}"><i class="fa fa-edit"></i><span>Employes</span></a>
</li>

<li class="{{ Request::is('cartRfids*') ? 'active' : '' }}">
    <a href="{{ route('cartRfids.index') }}"><i class="fa fa-edit"></i><span>Cart Rfids</span></a>
</li>

<li class="{{ Request::is('employeSortiePointages*') ? 'active' : '' }}">
    <a href="{{ route('employeSortiePointages.index') }}"><i class="fa fa-edit"></i><span>Employe Sortie Pointages</span></a>
</li>

<li class="{{ Request::is('groupes*') ? 'active' : '' }}">
    <a href="{{ route('groupes.index') }}"><i class="fa fa-edit"></i><span>Groupes</span></a>
</li>

<li class="{{ Request::is('pointageParams*') ? 'active' : '' }}">
    <a href="{{ route('pointageParams.index') }}"><i class="fa fa-edit"></i><span>Pointage Params</span></a>
</li>

<li class="{{ Request::is('services*') ? 'active' : '' }}">
    <a href="{{ route('services.index') }}"><i class="fa fa-edit"></i><span>Services</span></a>
</li>

<li class="{{ Request::is('users*') ? 'active' : '' }}">
    <a href="{{ route('users.index') }}"><i class="fa fa-edit"></i><span>Users</span></a>
</li>

