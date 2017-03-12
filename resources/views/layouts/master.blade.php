@include('header')

<div class="ui container">

</div>


<div class="ui inverted vertical masthead center aligned segment main-banner">

    <div class="ui text container space-above space-below ">
      <h1 class="ui inverted header">
        Welcome
      </h1>
      <h2>Take a look around at some of my past projects</h2>
      <button class="ui huge primary button" onclick="window.location='{{ url('projects') }}'" >My Projects<i class="right arrow icon"></i></button>
    </div>

  </div>


@include('footer')