@extends('layouts.interface')

@section('content')
<h1>{{ Auth::user()->username }}'s Fahrtenbuch</h1>

<table class="table text-white">
    <thead>
      <tr>
        <th scope="col">Start</th>
        <th scope="col">Ziel</th>
        <th scope="col">Fracht</th>
        <th scope="col">Status</th>
        <th scope="col">Datum</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($jobs as $job)
        <tr>
            <td>{{$job->origin}}</td>
            <td>{{$job->destination}}</td>
            <td>{{$job->cargo}}</td>
            <td>
                @if ($job->started)
                    <i class="fas fa-truck"></i> {{ __('logbook.started') }}
                @elseif ($job->canceled)
                    <i class="fas fa-times-circle" style="color:orange;"></i> {{ __('logbook.canceled') }}
                @elseif ($job->finished)
                    <i class="fas fa-warehouse"></i> {{ __('logbook.finished') }}
                @elseif ($job->accepted)
                    <i class="fas fa-check-circle" style="color: green"></i> {{ __('logbook.accepted') }}
                @elseif ($job->declined)
                    <i class="fas fa-times-circle" style="color:red;"></i> {{ __('logbook.declined') }}
                 @elseif ($job->pending_verification)
                    <i class="fas fa-clock"></i> {{ __('logbook.pending_verification') }}
                @endif
            </td>
            <td>{{$job->created_at}}</td>
          </tr>
        @endforeach
    </tbody>
</table>
@if ($jobs->isempty())
    <h3 class="text-center">Es wurden keine Touren gefunden</h3>
@endif
@endsection
