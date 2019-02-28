@extends('layouts.app')

@section('content')
<div class="grid-container">
    <h4>{{__('Product')}}: {{$productname}}</h4>

    <div class="grid-x grid-margin-x">
    <table>
      <thead>
        <tr>
          <th>{{__('Modified')}}</th>
          <th>{{__('Date')}}</th>
        </tr>
      </thead>
      <tbody>
        @foreach( $activities as $activity )
          <tr>
            <td>{{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $activity->created_at)->diffForHumans() }}</td>
            <td>{{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $activity->created_at)->isoFormat('llll')}}</td>
          </tr>
        @endforeach
      </tbody>
    </table>

  </div>
</div>
@endsection
