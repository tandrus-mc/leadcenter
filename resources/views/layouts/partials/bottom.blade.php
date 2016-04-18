<div class="container">
    <div class="row" id="content-row">
        @include('layouts.partials.left-sidebar')
        <!-- content-wrapper -->
        <div class="col-md-10 content-wrapper">
            <!-- main -->
            <div class="content">
                <div class="main-header">
                    <h2>pageHeaderVariable</h2>
                    <em>pageDetailVariable</em>
                </div>
                <div class="main-content">
                    @yield('main-content')
                </div>
                <!-- /main-content -->
            </div>
            <!-- /main -->
        </div>
        <!-- /content-wrapper -->
    </div>
    <!-- /row -->
</div>
<!-- /container -->