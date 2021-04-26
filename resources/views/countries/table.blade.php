<div class="table-responsive">
    <table class="table" id="countries-table">
        <thead>
            <tr>
                <th>Name</th>
        <th>Code</th>
        <th>Currency</th>
        <th>Phone Ext</th>
        <th>Flag</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($countries as $country)
            <tr>
                <td>{{ $country->name }}</td>
            <td>{{ $country->code }}</td>
            <td>{{ $country->currency }}</td>
            <td>{{ $country->phone_ext }}</td>
            <td>{{ $country->flag }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['countries.destroy', $country->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('countries.show', [$country->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('countries.edit', [$country->id]) }}" class='btn btn-default btn-xs'>
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
