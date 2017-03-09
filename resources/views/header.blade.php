<html lang="{{ config('app.locale') }}">
<head>
  <title>Alex Ash</title>
  <link rel="shortcut icon" type="image/x-icon" href="images/my-logo.png" />
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('/css/semantic.min.css') }}">
  <script
    src="https://code.jquery.com/jquery-3.1.1.min.js"
    integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
    crossorigin="anonymous"></script>
  <script src="{{ URL::asset('/js/semantic.min.js') }}"></script>
</head>
<body>
<div class="ui black inverted vertical header">
    <div class="ui inverted segment">
      <div class="ui inverted secondary pointing menu">
        <a class="item">
          <img src="{{ URL::asset('/images/my-logo.png') }}">
        </a>
        <a class="active item" href="master">
          Home
        </a>
        <a class="item" href="projects">
          Projects
        </a>
        <a class="item" href="contact">
          Contact
        </a>
      </div>
    </div>
</div>