<!DOCTYPE html>
<!--[if IE 9 ]><html class="ie ie9" lang="en" class="no-js"> <![endif]-->
<!--[if !(IE)]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<head>
    @include('layouts.partials.head')
</head>
<body>
<!-- WRAPPER -->
<div class="wrapper">
    <!-- TOP BAR -->
    <div class="top-bar">
        @include('layouts.partials.top-bar')
    </div>
    <!-- /top -->
    <!-- BOTTOM: LEFT NAV AND RIGHT MAIN CONTENT -->
    <div class="bottom">
        @include('layouts.partials.bottom')
    </div>
    <!-- END BOTTOM: LEFT NAV AND RIGHT MAIN CONTENT -->
</div>
<!-- /wrapper -->
<!-- FOOTER -->
<footer class="footer">
    footerContentVariable
</footer>
<!-- END FOOTER -->
<!-- Javascript -->
@include('layouts.partials.javascript')
</body>

</html>
