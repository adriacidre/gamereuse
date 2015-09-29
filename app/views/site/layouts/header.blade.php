
<header class="navbar-fixed-top">
    <div id="mainHeader" role="banner">
        <div class="container">
            <nav class="navbar navbar-default" role="navigation">
                <div class="navbar-header">
                    <!-- Logo -->
                    <a class="navbar-brand" href="/">
                        {{ HTML::image('assets/images/main-logo.png')}}
                    </a>
                </div>
                <div class="collapse navbar-collapse" id="mainMenu">
                    <!-- Main navigation -->
                    <ul class="nav navbar-nav pull-right">
                        <li class="primary">
                            <a href="{{ URL::to('/game/sell') }}" class="firstLevel" >Sell</a>
                        </li>

                        <li class="sep"></li>

                        <li class="primary">
                            <a href="{{ URL::to('/platforms') }}" class="firstLevel hasSubMenu" >By Platform</a>
                            <ul class="subMenu">
                                <li><a href="/platforms/sony-playstation-4/">Play Station 4</a></li>
                                <li><a href="/platforms/microsoft-xbox-one/">XBOX One</a></li>
                                <li><a href="/platforms/nintendo-wii-u/">Nintendo Wii U</a></li>
                                <li><a href="/platforms/sony-playstation-3/">Play Station 3</a></li>
                                <li><a href="/platforms/microsoft-xbox-360/">XBOX 360</a></li>
                                <li><a href="/platforms/nintendo-3ds/">Nintendo 3DS</a></li>
                                <li class="last"><a href="{{ URL::to('/platforms') }}">Even more...</a></li>
                            </ul>
                        </li>

                        <li class="sep"></li>
                        <li class="primary">
                            @if (Auth::user())
                            <a href="#" class="firstLevel hasSubMenu">User</a>
                            <ul class="subMenu">
                                <li>{{ link_to_route('user.games', 'My "on sale" games') }}</li>
                                <li>{{ link_to_route('user.offers', 'My offers') }}</li>
                                <li><a href="{{{ URL::to('user/settings') }}}">Settings</a></li>
                                <li class="last"><a href="{{{ URL::to('user/logout') }}}">Log out</a></li>
                            </ul>
                            @else
                            <a href="{{ URL::to('user/login') }}" class="firstLevel">Login</a>
                            @endif
                        </li>

                        <li class="sep"></li>
                        <li id="lastMenu" class="last search_box_container">
                            @include('site/shared/search_box')
                        </li>


                    </ul>
                    <!-- End main navigation -->
                </div>
            </nav>
        </div>
    </div>
</header>
