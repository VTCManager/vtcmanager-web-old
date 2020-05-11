@extends('layouts.interface')

@section('content')
<h1>{{ Auth::user()->username }}'s Fahrtenbuch</h1>

<table class="table text-white">
    <thead>
      <tr>
        <th scope="col">Start</th>
        <th scope="col">Ziel</th>
        <th scope="col">Fracht</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($jobs as $job)
        <tr>
            <td>{{$job->origin}}</td>
            <td>{{$job->destination}}</td>
            <td>{{$job->cargo}}</td>
          </tr>
        @endforeach
    </tbody>
</table>
@if ($jobs->isempty())
    <h3 class="text-center">Es wurden keine Touren gefunden</h3>
@endif
@endsection
