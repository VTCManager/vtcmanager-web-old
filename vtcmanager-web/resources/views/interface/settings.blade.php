@extends('layouts.interface')

@section('content')
<h1>Einstellungen</h1>
<nav>
    <div class="nav nav-tabs" id="nav-tab" role="tablist">
      <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Home</a>
      <a class="nav-item nav-link" id="api-tab" data-toggle="tab" href="#client-page" role="tab" aria-controls="client-page" aria-selected="false">{{ __('settings.client') }}</a>
      <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Contact</a>
    </div>
  </nav>
  <div class="tab-content" id="nav-tabContent">
    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">...</div>
    <div class="tab-pane fade" id="client-page" role="tabpanel" aria-labelledby="client-tab">
      <passport-clients></passport-clients>
      <passport-authorized-clients></passport-authorized-clients>
      <passport-personal-access-tokens></passport-personal-access-tokens>
    </div>
    <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">...</div>
  </div>
@endsection
