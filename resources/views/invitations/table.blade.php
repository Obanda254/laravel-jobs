<div class="table-responsive">
    <table class="table" id="invitations-table">
        <thead>
            <tr>
                <th>User Id</th>
        <th>Sender Contact</th>
        <th>Receiver User Id</th>
        <th>Organisation Id</th>
        <th>Job Id</th>
        <th>Interview Statud</th>
        <th>Date Of Interview</th>
        <th>Invitation Note</th>
        <th>Employer Interview Note</th>
        <th>Jobseeker Post Interview Review</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($invitations as $invitation)
            <tr>
                <td>{{ $invitation->user_id }}</td>
            <td>{{ $invitation->sender_contact }}</td>
            <td>{{ $invitation->receiver_user_id }}</td>
            <td>{{ $invitation->organisation_id }}</td>
            <td>{{ $invitation->job_id }}</td>
            <td>{{ $invitation->interview_statud }}</td>
            <td>{{ $invitation->date_of_interview }}</td>
            <td>{{ $invitation->invitation_note }}</td>
            <td>{{ $invitation->employer_interview_note }}</td>
            <td>{{ $invitation->jobseeker_post_interview_review }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['invitations.destroy', $invitation->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('invitations.show', [$invitation->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('invitations.edit', [$invitation->id]) }}" class='btn btn-default btn-xs'>
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
