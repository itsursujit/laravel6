<header class="blog-header py-3 border-bottom">
    <div class="row flex-nowrap justify-content-between align-items-center">
        <div class="col-4 pt-1">
            <p class="my-auto">
                <a href="https://github.com/itsursujit" class="text-decoration-none" target="_blank" rel="noopener">
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" viewBox="0 0 24 24"><path d="M0 12.305c0 5.435 3.438 10.047 8.207 11.674.6.113.82-.267.82-.593 0-.292-.011-1.066-.017-2.093-3.339.744-4.043-1.65-4.043-1.65-.545-1.42-1.332-1.798-1.332-1.798-1.09-.764.083-.749.083-.749 1.203.087 1.837 1.268 1.837 1.268 1.071 1.88 2.809 1.338 3.493 1.022.109-.795.42-1.337.762-1.645-2.665-.31-5.466-1.365-5.466-6.08 0-1.343.467-2.442 1.235-3.302-.123-.311-.535-1.562.117-3.256 0 0 1.008-.33 3.3 1.261a11.241 11.241 0 013.005-.414c1.019.005 2.046.141 3.004.414 2.29-1.592 3.297-1.261 3.297-1.261.654 1.694.242 2.945.119 3.256.77.86 1.234 1.959 1.234 3.302 0 4.726-2.806 5.767-5.48 6.071.431.38.815 1.13.815 2.279 0 1.645-.015 2.971-.015 3.375 0 .329.216.712.825.591 4.765-1.63 8.2-6.239 8.2-11.672C24 5.508 18.627 0 12 0S0 5.508 0 12.305z" fill="#A0AEBF" fill-rule="evenodd"/></svg>
                </a>
            </p>
        </div>
        <div class="col-4 text-center">
            <a id="brand" class="text-dark font-weight-bolder text-decoration-none font-serif" href="{{ route('blog.index') }}">{{ config('app.name', __('canvas::blog.title')) }}</a>
        </div>

        @auth()
            <div class="col-4 d-flex justify-content-end align-items-center">
                @yield('actions')

                <div class="dropdown">
                    <a href="#" class="nav-link px-0 py-0 text-secondary" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="/img/profile.jpg"
                             class="rounded-circle my-0 shadow-sm" style="width: 31px" alt="{{ auth()->user()->name }}">
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <h6 class="dropdown-header font-sans">
                            <strong>{{ auth()->user()->name }}</strong>
                            <br/>
                            {{ auth()->user()->email }}
                        </h6>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ url(sprintf('%s/posts', config('canvas.path'))) }}">{{ __('canvas::blog.nav.user.posts') }}</a>
                        <a class="dropdown-item" href="{{ url(sprintf('%s/tags', config('canvas.path'))) }}">{{ __('canvas::blog.nav.user.tags') }}</a>
                        <a class="dropdown-item" href="{{ url(sprintf('%s/topics', config('canvas.path'))) }}">{{ __('canvas::blog.nav.user.topics') }}</a>
                        <a class="dropdown-item" href="{{ url(sprintf('%s/stats', config('canvas.path'))) }}">{{ __('canvas::blog.nav.user.stats') }}</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                            {{ __('canvas::blog.nav.user.logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
        @endauth

        @guest()
            <div class="col-4 d-flex justify-content-end align-items-center">
                <a class="text-muted text-decoration-none" href="{{ url(config('canvas.path')) }}">{{ __('canvas::blog.nav.user.login') }}</a>
            </div>
        @endguest
    </div>
</header>
