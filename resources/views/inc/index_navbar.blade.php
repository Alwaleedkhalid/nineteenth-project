    <div class="pos-f-t">
        <div class="collapse" id="navbarToggleExternalContent">
          <div class="bg-light p-4">
            <h5 class="text-secondary h4 text-uppercase" style="font-family: 'Anton', sans-serif;">
                Wellcome  {{ Auth::user()->name }}
                <a class="text-danger" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                <i class="power off icon"></i>
                    {{ __('') }}
            </a>
            </h5>
            
            @can('isAdmin')
                <a href="company" class="text-muted"><i class="building icon"></i>
                    {{ __('Company') }} 
                </a>
            @endcan
            @can('isAdmin')
                <a href="employee" class="text-muted"><i class="users icon"></i>
                    {{ __('Employee') }} 
                </a>
            @endcan
            
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
            {{-- <span class="text-muted">Servecies</span> --}}
          </div>
        </div>
        <div>
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="">
                            <a class="" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    {{-- <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            @can('isManager')
                            <a class="dropdown-item" href="/admin-panel"><i class="fas fa-solar-panel"></i> {{ __('Admin Panel') }}</a>   
                            @endcan
                            @can('isManager')
                            <a class="dropdown-item" href="/dashboard"><i class="fab fa-stack-exchange"></i> {{ __('dashboard') }}</a>   
                            @endcan
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                            <i class="fas fa-sign-out-alt"></i>
                             {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li> --}}
                @endguest

        </div>
        <nav class="navbar navbar-light bg-light">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          {{-- <a href="{{ url('/') }}"><img src="https://pbs.twimg.com/profile_images/1016296857658646528/PuUowGbn_400x400.jpg" width="100px" height="60px"></a> --}}
        <span class="text-uppercase text-black-50">{{Auth::user()->role}}</span>
        </nav>
      </div>
