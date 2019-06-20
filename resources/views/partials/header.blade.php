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
            {{--<h3 class="service mr-2 p-2">Art Direction</h3>--}}
        </div>

        <div id="mobile-nav-btn">Menu</div>

        <div id="mobile-menu" class="hidden">
            <div class="close-btn">Close</div>
            <h3 class="text-center mb-12">MENU</h3>
            <a href="/" class="">Home</a>
            @include('partials.links')
        </div>
        <div id="nav-menu" class="pt-2 pr-2">
            @include('partials.links')
        </div>

        <a href="/contact" class="project-cta text-btn md">Got a project for me?</a>
    </nav>
</header>

