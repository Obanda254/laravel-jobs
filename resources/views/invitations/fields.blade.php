<!-- User Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_id', 'User Id:') !!}
    {!! Form::number('user_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Sender Contact Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sender_contact', 'Sender Contact:') !!}
    {!! Form::text('sender_contact', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Receiver User Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('receiver_user_id', 'Receiver User Id:') !!}
    {!! Form::number('receiver_user_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Organisation Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('organisation_id', 'Organisation Id:') !!}
    {!! Form::number('organisation_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Job Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('job_id', 'Job Id:') !!}
    {!! Form::number('job_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Interview Statud Field -->
<div class="form-group col-sm-6">
    {!! Form::label('interview_statud', 'Interview Statud:') !!}
    {!! Form::text('interview_statud', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Date Of Interview Field -->
<div class="form-group col-sm-6">
    {!! Form::label('date_of_interview', 'Date Of Interview:') !!}
    {!! Form::text('date_of_interview', null, ['class' => 'form-control','id'=>'date_of_interview']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#date_of_interview').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Invitation Note Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('invitation_note', 'Invitation Note:') !!}
    {!! Form::textarea('invitation_note', null, ['class' => 'form-control']) !!}
</div>

<!-- Employer Interview Note Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('employer_interview_note', 'Employer Interview Note:') !!}
    {!! Form::textarea('employer_interview_note', null, ['class' => 'form-control']) !!}
</div>

<!-- Jobseeker Post Interview Review Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('jobseeker_post_interview_review', 'Jobseeker Post Interview Review:') !!}
    {!! Form::textarea('jobseeker_post_interview_review', null, ['class' => 'form-control']) !!}
</div>