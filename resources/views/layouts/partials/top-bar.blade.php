<div class="container">
    <div class="row">
        <!-- logo -->
        <div class="col-md-2 logo" style="max-height: 175px; max-width: 175px">
            <a href="/home"><img id="logo" src="https://clickpromise.com/images/ClickPromise.svg" alt="logo: ClickPromise" class="img-responsive"></a>
            <h1 class="sr-only">KingAdmin Admin Dashboard</h1>
        </div>
        <!-- end logo -->
        <div class="col-md-10">
            <div class="row">
                <div class="col-md-12">
                    <div class="top-bar-right">
                        <!-- responsive menu bar icon -->
                        <a href="#" class="hidden-md hidden-lg main-nav-toggle"><i class="fa fa-bars"></i></a>
                        <!-- end responsive menu bar icon -->
                        <div class="notifications">
                            <ul>
                                @include('layouts.partials.notifications')
                            </ul>
                        </div>
                        @include('layouts.partials.logged-user')
                    </div>
                    <!-- /top-bar-right -->
                </div>
            </div>
            <!-- /row -->
        </div>
    </div>
    <!-- /row -->
</div>
<!-- /container -->