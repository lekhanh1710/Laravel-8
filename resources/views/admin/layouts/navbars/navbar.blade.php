
@auth('admin')
    @include('admin.layouts.navbars.navs.auth')
@endauth

@guest('admin')
    @include('admin.layouts.navbars.navs.guest')
@endguest
