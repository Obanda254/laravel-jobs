<li class="nav-item">
    <a href="{{ route('accounts.index') }}"
       class="nav-link {{ Request::is('accounts*') ? 'active' : '' }}">
        <p>Accounts</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('countries.index') }}"
       class="nav-link {{ Request::is('countries*') ? 'active' : '' }}">
        <p>Countries</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('invitations.index') }}"
       class="nav-link {{ Request::is('invitations*') ? 'active' : '' }}">
        <p>Invitations</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('jobs.index') }}"
       class="nav-link {{ Request::is('jobs*') ? 'active' : '' }}">
        <p>Jobs</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('organisations.index') }}"
       class="nav-link {{ Request::is('organisations*') ? 'active' : '' }}">
        <p>Organisations</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('organisationUsers.index') }}"
       class="nav-link {{ Request::is('organisationUsers*') ? 'active' : '' }}">
        <p>Organisation Users</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('roles.index') }}"
       class="nav-link {{ Request::is('roles*') ? 'active' : '' }}">
        <p>Roles</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('skills.index') }}"
       class="nav-link {{ Request::is('skills*') ? 'active' : '' }}">
        <p>Skills</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('users.index') }}"
       class="nav-link {{ Request::is('users*') ? 'active' : '' }}">
        <p>Users</p>
    </a>
</li>


