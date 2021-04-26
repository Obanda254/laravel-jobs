<!-- User Id Field -->
<div class="col-sm-12">
    {!! Form::label('user_id', 'User Id:') !!}
    <p>{{ $invitation->user_id }}</p>
</div>

<!-- Sender Contact Field -->
<div class="col-sm-12">
    {!! Form::label('sender_contact', 'Sender Contact:') !!}
    <p>{{ $invitation->sender_contact }}</p>
</div>

<!-- Receiver User Id Field -->
<div class="col-sm-12">
    {!! Form::label('receiver_user_id', 'Receiver User Id:') !!}
    <p>{{ $invitation->receiver_user_id }}</p>
</div>

<!-- Organisation Id Field -->
<div class="col-sm-12">
    {!! Form::label('organisation_id', 'Organisation Id:') !!}
    <p>{{ $invitation->organisation_id }}</p>
</div>

<!-- Job Id Field -->
<div class="col-sm-12">
    {!! Form::label('job_id', 'Job Id:') !!}
    <p>{{ $invitation->job_id }}</p>
</div>

<!-- Interview Statud Field -->
<div class="col-sm-12">
    {!! Form::label('interview_statud', 'Interview Statud:') !!}
    <p>{{ $invitation->interview_statud }}</p>
</div>

<!-- Date Of Interview Field -->
<div class="col-sm-12">
    {!! Form::label('date_of_interview', 'Date Of Interview:') !!}
    <p>{{ $invitation->date_of_interview }}</p>
</div>

<!-- Invitation Note Field -->
<div class="col-sm-12">
    {!! Form::label('invitation_note', 'Invitation Note:') !!}
    <p>{{ $invitation->invitation_note }}</p>
</div>

<!-- Employer Interview Note Field -->
<div class="col-sm-12">
    {!! Form::label('employer_interview_note', 'Employer Interview Note:') !!}
    <p>{{ $invitation->employer_interview_note }}</p>
</div>

<!-- Jobseeker Post Interview Review Field -->
<div class="col-sm-12">
    {!! Form::label('jobseeker_post_interview_review', 'Jobseeker Post Interview Review:') !!}
    <p>{{ $invitation->jobseeker_post_interview_review }}</p>
</div>

