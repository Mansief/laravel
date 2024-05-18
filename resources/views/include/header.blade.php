<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="{{route('home')}}">{{config('app.name')}}</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarText">
    <!-- header left side -->
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="{{ route('home') }}">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('dashboard') }}">Crypto Market-Price</a>
      </li>
    </ul>
    
    <!-- header right side -->
    <ul class="navbar-nav ml-auto"> <!-- Changed mr-auto to ml-auto -->
      @auth <!-- Check if the user is authenticated -->
        <li class="nav-item">
          <form action="{{ route('logout') }}" method="post" class="nav-link">
            @csrf
            <button type="submit" class="nav-link btn p-0">Logout</button>
          </form>
        </li>
      @else <!-- If the user is not authenticated -->
        <li class="nav-item">
          <a class="nav-link" href="{{ route('login') }}">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('registration') }}">Registration</a>
        </li>
      @endauth
    </ul>
  </div>
</nav>
