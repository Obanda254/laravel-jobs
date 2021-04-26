<div class="table-responsive">
    <table class="table" id="organisationUsers-table">
        <thead>
            <tr>
                <th>User Id</th>
        <th>Organisation Id</th>
        <th>Start Date</th>
        <th>End Date</th>
        <th>Role</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($organisationUsers as $organisationUser)
            <tr>
                <td>{{ $organisationUser->user_id }}</td>
            <td>{{ $organisationUser->organisation_id }}</td>
            <td>{{ $organisationUser->start_date }}</td>
            <td>{{ $organisationUser->end_date }}</td>
            <td>{{ $organisationUser->role }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['organisationUsers.destroy', $organisationUser->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('organisationUsers.show', [$organisationUser->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('organisationUsers.edit', [$organisationUser->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
