@extends('layouts.app')
@section('title', "$travel->nameの編集")
@section('content')

    <div class="panel panel-default">
      <div class="panel-heading">
        {{ $travel->name }}の編集
      </div>
      <div class="panel-body">
        {!! Form::model($travel, ['route' => ['travels.update', $travel->id], 'method' => 'patch', 'class' => 'form-horizontal']) !!}
          <div class="panel-body">
            {!! Form::model($travel, ['route' => ['travels.update', $travel->id], 'method' => 'patch', 'class' => 'form-horizontal']) !!}
              <div class="form-group">
                {!! Form::label('name', '行き先', ['class' => 'col-sm-3 control-label']) !!}
                  <div class="col-sm-6">
                    {!! Form::text('name', $travel->name, ['id' => 'travel-name', 'class' => 'form-control']) !!}
                  </div>
              </div>
              <div class="form-group">
                {!! Form::label('address', '住所', ['class' => 'col-sm-3 control-label']) !!}
                  <div class="col-sm-6">
                    {!! Form::text('address', $travel->address, ['id' => 'travel-address', 'class' => 'form-control']) !!}
                  </div>
              </div>
              <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                  {!! Form::button('<i class="fa fa-save"></i> 保存', ['type' => 'submit', 'class' => 'btn btn-default']) !!}
                </div>
              </div>
            {!! Form::close() !!}
          </div>
          <div class="panel-footer">
            {{ link_to_route('travels.index', '戻る') }}
          </div>
        </div>

@endsection
