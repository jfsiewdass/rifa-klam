<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img class="w-25 d-none d-sm-block" src="{{ asset((env('APP_ENV') === 'production' ? 'public/' : '') .'assets/images/logo-with-name.png') }}" alt="logo">
            <img class="w-25 d-block d-sm-none" src="{{ asset((env('APP_ENV') === 'production' ? 'public/' : '') .'assets/images/logo.png') }}" alt="logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav me-auto">
                
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ms-auto">
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif

                @else
                    <li><a class="nav-link {{ 
                        \Route::current()->getName() == 'lotteries.index' ||
                        \Route::current()->getName() == 'lotteries.create' ||
                        \Route::current()->getName() == 'lotteries.edit' ? 'active' : ''
                        }}" href="{{ route('lotteries.index') }}">Rifas</a></li>
                    <li class="nav-item">
                        <a class="nav-link {{ \Route::current()->getName() == 'dayrate.index' ? 'active' : '' }}" href="{{ route('dayrate.index') }}">Tasa del día</a>
                    </li>
                    <li><a class="nav-link {{ 
                                                \Route::current()->getName() == 'users.index' ||
                                                \Route::current()->getName() == 'users.create' ||
                                                \Route::current()->getName() == 'users.edit' ? 'active' : ''
                                            }}" href="{{ route('users.index') }}">Usuarios</a></li>
                    {{-- <li><a class="nav-link" href="{{ route('roles.index') }}">Manage Role</a></li> --}}
                    
                    
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                Cerrar Sesion
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
                
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">Ir a inicio</a>
                </li>
            </ul>
        </div>
    </div>
</nav>