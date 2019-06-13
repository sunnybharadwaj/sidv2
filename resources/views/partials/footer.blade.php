<footer class="">
    <img src="{{url('/media/logo/logo_line.svg')}}" alt="" class="w-full max-w-xs my-6 mx-auto">
    <div id="footer-menu" class="pt-2 pr-2 mx-auto">
        <div class="link-container">
            <a href="/browse" class="{{request()->is('browse') ? 'active' : ''}}">Photos</a>
            {{--<a href="" class="{{request()->is('/activity') ? 'active' : ''}}">Activity</a>--}}
            <a href="/videos" class="{{request()->is('videos') ? 'active' : ''}}">Videos</a>
            <a href="" class="">ShutterStock</a>

            <a href="">Instagram</a>
            <a href="" class="{{request()->is('contact') ? 'active' : ''}}">Contact</a>
        </div>
    </div>
</footer>