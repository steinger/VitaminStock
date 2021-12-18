@extends('layouts.app')

@section('content')
    <div class="grid-container">
        <h4>{{__('Today')}} - {{\Carbon\Carbon::now()->isoFormat('dd, Do MMM YYYY')}}</h4>

        <div class="grid-x grid-margin-x">
            <table>
                <thead>
                <tr>
                    <th>{{__('Name')}}</th>
                    <th>{{__('Count')}}</th>
                    <th>{{__('Modified')}}</th>
                </tr>
                </thead>
                <tbody>
                <?php $number = 0; ?>
                @foreach( $activities as $activity )
                    <tr>
                        <td>{{ $activity->name }}</td>
                        <td>{{ $activity->count }}</td>
                        <td> {{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $activity->created_at)->diffForHumans() }}</td>
                    </tr>
                    <?php $number += $activity->count ?>
                @endforeach
                @if ($number > 5)
                    <td><strong>{{__('Total')}}</strong></td>
                    <td><strong>{{ $number }}</strong></td>
                    <td></td>
                @endif
                </tbody>
            </table>

        </div>
    </div>
@endsection
