<!DOCTYPE html>
<html>
@include('admin.templates.partials.head')
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
    @include('admin.templates.partials.header')

    <!-- Main Sidebar Container -->
    @include('admin.templates.partials.sidebar')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                <div class="col-sm-6">
                   {{ Breadcrumbs::current()->title }}
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        {{ Breadcrumbs::render() }}
                    </ol>
                </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                @yield('content')
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    @include('admin.templates.partials.footer')

    <!-- Control Sidebar -->
    @include('admin.templates.partials.control')
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    @include('admin.templates.partials.scripts')
</body>
</html>
