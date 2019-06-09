<header>
    <nav id="nav" class="container mx-auto pb-2 mt-10 pb-2 mb-4">
        <div class="logo inline-block max-w-xs p-1">
            <a href="/">
                <img class="w-full" src="{{url('/media/logo/logo_lg.svg')}}" alt="">
            </a>
        </div>

        <div class="services-listing flex uppercase">
            <h3 class="service mr-2 p-2">Photography</h3>
            <h3 class="service mr-2 p-2">Videography</h3>
            <h3 class="service mr-2 p-2">Media Production</h3>
            <h3 class="service mr-2 p-2">Art Direction</h3>
        </div>

        <div id="nav-menu" class="pt-2 pr-2">
            <a href="/browse" class="{{request()->is('browse') ? 'active' : ''}}">Browse Gallery</a>
            {{--<a href="" class="{{request()->is('/activity') ? 'active' : ''}}">Activity</a>--}}

            <a href="">ShutterStock</a>
            <a href="">Instagram</a>
            <a href="" class="{{request()->is('/contact') ? 'active' : ''}}">Contact</a>
        </div>

        <div class="project-cta text-btn md">Got a project for me?</div>
    </nav>
</header>

