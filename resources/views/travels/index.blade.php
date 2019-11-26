@extends('layouts.app')
@section('title', '行き先一覧')
@section('content')


    <div class="panel panel-default">
      <div class="panel-heading">
        行き先一覧
      </div>
      <div class="panel-body">
        <table class="table table-striped travel-table">
          <thead>
            <th>行き先</th>
            <th>地図</th>
            <th>編集</th>
            <th>削除</th>
          </thead>
          <tbody>
            @foreach ($travels as $travel)
              <tr>
                <td class="table-text">
                  {{ link_to_route('travels.show', $travel->name, $travel->id) }}
                </td>

                <td class="table-text">
                  {{ link_to_route('travels.gmaps.{$id}', '地図', $travel->id, $travel->name, $travel->address) }}
                </td>

                <td class="table-text">
                  {{ link_to_route('travels.edit', '編集', $travel->id, ['class' => 'btn btn-sm btn-default']) }}
                </td>
                <td class="table-text">
                  {{ Form::open(['route' => ['travels.destroy', $travel->id], 'method' => 'delete']) }}
                    {{ Form::hidden('id', $travel->id) }}
                    {{ Form::submit('削除', ['class' => 'btn btn-sm btn-default']) }}
                  {{ Form::close() }}
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>

@endsection
