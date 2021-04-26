<!-- Name Field -->
<div class="col-sm-12">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $country->name }}</p>
</div>

<!-- Code Field -->
<div class="col-sm-12">
    {!! Form::label('code', 'Code:') !!}
    <p>{{ $country->code }}</p>
</div>

<!-- Currency Field -->
<div class="col-sm-12">
    {!! Form::label('currency', 'Currency:') !!}
    <p>{{ $country->currency }}</p>
</div>

<!-- Phone Ext Field -->
<div class="col-sm-12">
    {!! Form::label('phone_ext', 'Phone Ext:') !!}
    <p>{{ $country->phone_ext }}</p>
</div>

<!-- Flag Field -->
<div class="col-sm-12">
    {!! Form::label('flag', 'Flag:') !!}
    <p>{{ $country->flag }}</p>
</div>

