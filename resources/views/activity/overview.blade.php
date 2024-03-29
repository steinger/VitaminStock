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
                    <th>{{__('Modified')}}</th>
                    <th>{{__('Created')}}</th>
                </tr>
                </thead>
                <tbody>
                @foreach( $activities as $activity )
                    <tr>
                        <td>
                            <a href="{{ route('singlelist_activity', ['id' => $activity->id ]) }}">{{ $activity->name }}</a>
                        </td>
                        <td>{{ $activity->count }}</td>
                        <td><span data-tooltip class="tooltip-1" tabindex="2"
                                  title="{{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $activity->updated_at)->isoFormat('LLL')}}">{{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $activity->updated_at)->diffForHumans() }}</span>
                        </td>
                        <td><span data-tooltip class="tooltip-1" tabindex="2"
                                  title="{{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $activity->created_at)->isoFormat('LLL')}}">{{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $activity->created_at)->diffForHumans() }}</span>
                        </td>
                    </tr>
                @endforeach

                </tbody>
            </table>

        </div>
    </div>
@endsection
