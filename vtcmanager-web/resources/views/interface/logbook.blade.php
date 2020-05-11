@extends('layouts.interface')

@section('content')
<h1>Test Fahrtenbuch</h1>

<table class="table">
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
@endsection
