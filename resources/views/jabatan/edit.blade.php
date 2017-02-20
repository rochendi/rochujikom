@extends('layouts.app')
@section('content')
<div class="col-md-6 col-md-offset-3">
    <div class="panel panel-default">
        <div class="panel-head">
            <div class="table-responsive table-border">
    <h1>Create Book</h1>
    {!! Form::model($jabatan,['method' => 'PATCH','route'=>['jabatan.update',$jabatan->id]]) !!}
    <div class="form-group">
        {!! Form::label('kode jabatan', 'kode jabatan :') !!}
        {!! Form::text('kode_jabatan',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('nama jabatan ', 'nama jabatan:') !!}
        {!! Form::text('nama_jabatan',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('besaran uang', 'besaran udang :') !!}
        {!! Form::text('besaran_uang',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Save', ['class' => 'btn btn-primary form-control']) !!}
    </div>
    {!! Form::close() !!}
    </div>
    </div>
    </div>
    </div>

@endsection