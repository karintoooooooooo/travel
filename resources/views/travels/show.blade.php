@extends('layouts.app')
@section('title', $travel->name)
@section('content')

    <div class="panel panel-default">
      <div class="panel-heading">
        行き先: {{ $travel->name }}
      </div>
      <div class="panel-body">
        <div>
          住所: {{ $travel->address }}
        </div>
      </div>
      <div class="panel-footer">
        {{ link_to_route('travels.index', '戻る') }}
      </div>
    </div>

@endsection
