<nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="{{route('student.dashboard')}}">PRELIMSA2Z</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto py-4 py-lg-0">
                        @if(auth()->check() && auth()->user()->is_admin ==1)
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="{{route('admin.home')}}">Dashboard</a></li>

                        @endif
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4 @if(request()->route()->getName() == 'student.dashboard'){{__('active')}}@endif" href="{{route('student.dashboard')}}">Home</a></li>
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4 @if(request()->route()->getName() == 'student.courses'){{__('active')}}@endif" href="{{route('student.courses')}}">Courses</a></li>
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="about.html">About</a></li>
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="post.html">Sample Post</a></li>
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="contact.html">Contact</a></li>
                        @if(auth()->check())
                        <li class="nav-item">
                        <a class="nav-link px-lg-3 py-3 py-lg-4" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
</a>
                                </li>
                                @else
                                <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="{{route('login')}}">Login</a></li>
                                <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="{{route('register')}}">SignUp</a></li>

                        @endif
                    </ul>
                </div>
            </div>
        </nav>
