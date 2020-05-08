@extends('layouts.app')

@section('content')
<header>
    <div class="overlay"></div>
    <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
      <source src="/storage/videos/main-header.mp4" type="video/mp4">
    </video>
    <div class="container h-100">
      <div class="d-flex h-100 text-center align-items-center">
        <div class="w-100 text-white">
          <h1 class="display-3">Speditionsverwaltung neu definiert.</h1>
          <p class="lead mb-0">Funktionsreiches und modern gestaltetes Verwaltungssystem.</p>
        </div>
      </div>
    </div>
  </header>
  <div class="features-clean">
  <div class="container">
    <div class="intro">
        <h2 class="text-center">Features</h2>
        <p class="text-center">Nunc luctus in metus eget fringilla. Aliquam sed justo ligula. Vestibulum nibh erat, pellentesque ut laoreet vitae. </p>
    </div>
    <div class="row features">
        <div class="col-sm-6 col-lg-4 item"><i class="fa fa-map-marker icon"></i>
            <h3 class="name">Works everywhere</h3>
            <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est.</p>
        </div>
        <div class="col-sm-6 col-lg-4 item"><i class="fa fa-clock-o icon"></i>
            <h3 class="name">Always available</h3>
            <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est.</p>
        </div>
        <div class="col-sm-6 col-lg-4 item"><i class="fa fa-list-alt icon"></i>
            <h3 class="name">Customizable</h3>
            <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est.</p>
        </div>
        <div class="col-sm-6 col-lg-4 item"><i class="fa fa-leaf icon"></i>
            <h3 class="name">Organic</h3>
            <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est.</p>
        </div>
        <div class="col-sm-6 col-lg-4 item"><i class="fa fa-plane icon"></i>
            <h3 class="name">Fast</h3>
            <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est.</p>
        </div>
        <div class="col-sm-6 col-lg-4 item"><i class="fa fa-phone icon"></i>
            <h3 class="name">Mobile-first</h3>
            <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est.</p>
        </div>
    </div>
</div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
</body>

@endsection
@section('css')
<style>
    header {
  position: relative;
  background-color: black;
  height: 75vh;
  min-height: 25rem;
  width: 100%;
  overflow: hidden;
}

header video {
  position: absolute;
  top: 50%;
  left: 50%;
  min-width: 100%;
  min-height: 100%;
  width: auto;
  height: auto;
  z-index: 0;
  -ms-transform: translateX(-50%) translateY(-50%);
  -moz-transform: translateX(-50%) translateY(-50%);
  -webkit-transform: translateX(-50%) translateY(-50%);
  transform: translateX(-50%) translateY(-50%);
}

header .container {
  position: relative;
  z-index: 2;
}

header .overlay {
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  width: 100%;
  background-color: black;
  opacity: 0.1;
  z-index: 1;
}

@media (pointer: coarse) and (hover: none) {
  header {
    background: url('https://source.unsplash.com/XT5OInaElMw/1600x900') black no-repeat center center scroll;
  }
  header video {
    display: none;
  }
}
.features-clean {
  color:#313437;
  background-color:#fff;
  padding-bottom:30px;
}

@media (max-width:767px) {
  .features-clean {
    padding-bottom:10px;
  }
}

.features-clean p {
  color:#7d8285;
}

.features-clean h2 {
  font-weight:bold;
  margin-bottom:40px;
  padding-top:40px;
  color:inherit;
}

@media (max-width:767px) {
  .features-clean h2 {
    margin-bottom:25px;
    padding-top:25px;
    font-size:24px;
  }
}

.features-clean .intro {
  font-size:16px;
  max-width:500px;
  margin:0 auto 60px;
}

@media (max-width:767px) {
  .features-clean .intro {
    margin-bottom:40px;
  }
}

.features-clean .item {
  min-height:100px;
  padding-left:80px;
  margin-bottom:40px;
}

@media (max-width:767px) {
  .features-clean .item {
    min-height:0;
  }
}

.features-clean .item .name {
  font-size:20px;
  font-weight:bold;
  margin-top:0;
  margin-bottom:20px;
  color:inherit;
}

.features-clean .item .description {
  font-size:15px;
  margin-bottom:0;
}

.features-clean .item .icon {
  font-size:40px;
  color:#1485ee;
  float:left;
  margin-left:-65px;
}
</style>
@endsection