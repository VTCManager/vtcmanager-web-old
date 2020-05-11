@extends('layouts.interface')

@section('content')
<h1>{{ Auth::user()->username }}{{ __('logbook.title') }}</h1>

<table class="table text-white">
    <thead>
      <tr>
        <th scope="col">{{ __('logbook.origin') }}</th>
        <th scope="col">{{ __('logbook.destination') }}</th>
        <th scope="col">{{ __('logbook.cargo') }}</th>
        <th scope="col">{{ __('logbook.status') }}</th>
        <th scope="col">{{ __('logbook.started_date') }}</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
        @foreach ($jobs as $job)
        <tr>
            <td class="align-middle">{{$job->origin}}</td>
            <td class="align-middle">{{$job->destination}}</td>
            <td class="align-middle">{{$job->cargo}}</td>
            <td class="align-middle">
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
            <td class="align-middle">{{$job->created_at}}</td>
            <td class="align-middle"><button type="button" class="btn btn-outline-info">Details</button></td>
          </tr>
        @endforeach
    </tbody>
</table>
@if ($jobs->isempty())
    <h3 class="text-center">{{ __('logbook.no_tour_found') }}</h3>
@endif
@endsection
