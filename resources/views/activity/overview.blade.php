@extends('layouts.app')

@section('content')
<div class="grid-container">
    <h4>{{__('Overview')}}</h4>

    <div class="grid-x grid-margin-x">
    <table>
      <thead>
        <tr>
          <th>{{__('Name')}}</th>
          <th>{{__('Count')}}</th>
          <th>{{__('First Date')}}</th>
        </tr>
      </thead>
      <tbody>
        @foreach( $activities as $activity )
            <tr>
              <td>{{ $activity->name }}</td>
              <td>{{ $activity->count }}</td>
              <td>{{ $activity->created_at }}</td>
            </tr>
        @endforeach

      </tbody>
    </table>

  </div>
</div>
@endsection
