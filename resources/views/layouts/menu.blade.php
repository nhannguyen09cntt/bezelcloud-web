<div class="header-transparent nav-sticky" data-scroll-position="top">
    <!-- header section -->
    <header class="xs-header header-minimal border-bottom-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="xs-logo-wraper">
                    <a href="{{ url('/') }}" class="xs-logo">
                        <img src="/images/logo.png" alt="">
                    </a>
                </div>
                <nav class="xs-menus ml-auto">
                    <div class="nav-header">
                        <a class="nav-brand" href="index.html"></a>
                        <div class="nav-toggle"></div>
                    </div>
                    <!-- menu list start -->
                    <div class="nav-menus-wrapper">
                        <ul class="nav-menu">                            
                            <li class="active"><a href="{{ url('/') }}"  class="active">Home</a></li>
                            <li><a href="https://mysite.bezelcloud.com/login">{{ __('Login') }}</a></li>
                            <li><a href="{{ route('register') }}">{{ __('Register') }}</a></li>
                        </ul>
                    </div> <!-- menu list end -->
                </nav>
            </div><!-- .row END -->
        </div><!-- .container END -->
    </header> <!-- End header section -->
</div>