
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('assets/plugins/jquery-ui/jquery-ui.min.js') }} "></script>
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }} "></script>

<!-- Sparkline -->
<script src="{{ asset('assets/plugins/sparklines/sparkline.js') }} "></script>


<!-- overlayScrollbars -->
<script src="{{ asset('assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('assets/dist/js/adminlte.js') }} "></script>

<!-- AdminLTE for demo purposes -->
<script src="{{ asset('assets/dist/js/demo.js') }} "></script>

@stack('scripts')
