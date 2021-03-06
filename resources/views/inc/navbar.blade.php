<nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
    <div class="container">
              <a class="navbar-brand" href="{{ url('/') }}">
                  {{ config('app.name', 'MyWeb') }}
              </a>

              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse" id="navbarResponsive">
                  <!-- Left Side Of Navbar -->
                  <ul class="navbar-nav mr-auto">

                  </ul>

                  <ul class="navbar-nav mr-auto">
                      <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                      <li class="nav-item"><a class="nav-link" href="/about">About</a></li>
                      <li class="nav-item"><a class="nav-link" href="/post">Recommendations</a></li>
                  </ul>
             
                  <!-- Right Side Of Navbar -->
                  <ul class="navbar-nav ml-auto">
                      <!-- Authentication Links -->
                      @guest
                          <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                          <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                      @else
                          <li class="nav-item dropdown">
                              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                  {{ Auth::user()->name }} <span class="caret"></span>
                              </a>

                              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                  <a class="dropdown-item" href="/dashboard">Dashboard</a>
                                  <a class="dropdown-item" href="/post/create">Create Post</a>

                                  <div class="dropdown-divider"></div>

                                  <a class="dropdown-item" href="{{ route('logout') }}"
                                     onclick="event.preventDefault();
                                                   document.getElementById('logout-form').submit();">
                                      {{ __('Logout') }}
                                  </a>
                                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                      @csrf
                                  </form>
                              </div>
                          </li>
                      @endguest
                  </ul>
          </div>
          </div>
      </nav>