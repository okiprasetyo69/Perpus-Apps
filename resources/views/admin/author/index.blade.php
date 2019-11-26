@extends('admin.templates.default')
    @section('content')
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title"> Data Penulis </h3> &nbsp; &nbsp;
                        <a href="{{ route('admin.author.create') }}" class="btn btn-primary btn-sm"> Tambah Penulis</a>
                    </div>
                    <div class="card-body">
                        <table id="dataTable" class="table table-bordered table-striped dataTable">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Nama</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>

                        </table>
                    </div>
                </div>
            </div>
        </div>

        {{-- Delete --}}
        <form action="" method="post" id="deleteForm">
            @csrf
            @method('DELETE')
            <input type="submit" value="Hapus" style="display: none">
        </form>

    @endsection

@push('styles')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.css') }}">
@endpush

@push('scripts')
    <script src="{{ asset('assets/plugins/bs-notify.min.js') }}"> </script>
    <!-- DataTables -->
    <script src="{{ asset('assets/plugins/datatables/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.js') }}"></script>

    @include('admin.templates.partials.alerts')

    <script>
        $(function(){
            $('#dataTable').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{{ route('admin.author.data') }}',
                columns: [
                    {data: 'DT_RowIndex', orderable: false, searchable: false},
                    {data: 'name'},
                    {data: 'action'}
                ],
            });
        });
    </script>
@endpush
