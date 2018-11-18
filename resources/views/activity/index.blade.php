@extends('layouts.app')

@section('content')
<div class="grid-container">
    <h4>{{__('My Activity')}}</h4>
    <a class="button hollow success" href="{{ route('today_activity') }}">{{__('Today')}}</a>
    <a class="button hollow" href="{{ route('overview_activity') }}">{{__('Overview')}}</a>

    <div class="grid-x grid-margin-x">
    <table>
      <thead>
        <tr>
          <th>{{__('Name')}}</th>
          <th>{{__('Timestamp')}}</th>
          <th>{{__('Action')}}</th>
        </tr>
      </thead>
      <tbody>
        @foreach( $activities as $activity )
            <tr>
              <td>{{ $activity->name }}</td>
              <td>{{ $activity->created_at }}</td>
              <td>
                <a class="hollow button" href="{{ route('delete', ['activity_id' => $activity->id ]) }}">{{__('Delete')}}</a>
              </td>
            </tr>
        @endforeach

      </tbody>
    </table>

  </div>
</div>
@endsection
