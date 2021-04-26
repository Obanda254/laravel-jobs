<!-- User Id Field -->
<div class="col-sm-12">
    {!! Form::label('user_id', 'User Id:') !!}
    <p>{{ $job->user_id }}</p>
</div>

<!-- Organisation Id Field -->
<div class="col-sm-12">
    {!! Form::label('organisation_id', 'Organisation Id:') !!}
    <p>{{ $job->organisation_id }}</p>
</div>

<!-- Country Id Field -->
<div class="col-sm-12">
    {!! Form::label('country_id', 'Country Id:') !!}
    <p>{{ $job->country_id }}</p>
</div>

<!-- Title Field -->
<div class="col-sm-12">
    {!! Form::label('title', 'Title:') !!}
    <p>{{ $job->title }}</p>
</div>

<!-- Skills Required Field -->
<div class="col-sm-12">
    {!! Form::label('skills_required', 'Skills Required:') !!}
    <p>{{ $job->skills_required }}</p>
</div>

<!-- Description Field -->
<div class="col-sm-12">
    {!! Form::label('description', 'Description:') !!}
    <p>{{ $job->description }}</p>
</div>

<!-- Work Type Field -->
<div class="col-sm-12">
    {!! Form::label('work_type', 'Work Type:') !!}
    <p>{{ $job->work_type }}</p>
</div>

<!-- Job Type Field -->
<div class="col-sm-12">
    {!! Form::label('job_type', 'Job Type:') !!}
    <p>{{ $job->job_type }}</p>
</div>

<!-- Status Field -->
<div class="col-sm-12">
    {!! Form::label('status', 'Status:') !!}
    <p>{{ $job->status }}</p>
</div>

