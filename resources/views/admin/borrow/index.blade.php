@extends('admin.templates.default')
    @section('content')
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title"> Data peminjaman buku </h3>
                    </div>
                    <div class="card-body">
                        <table id="dataTable" class="table table-bordered table-striped dataTable">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Nama</th>
                                    <th>Judul Buku</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>

                        </table>
                    </div>
                </div>
            </div>
        </div>

        {{-- Delete --}}
        <form action="" method="post" id="returnForm">
            @csrf
            @method('PUT')
            <input type="submit" value="Return" style="display: none">
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
                ajax: '{{ route('admin.borrow.data') }}',
                columns: [
                    {data: 'DT_RowIndex', orderable: false, searchable: false},
                    {data: 'user'},
                    {data: 'book_title'},
                    {data: 'action'}
                ],
            });
        });
    </script>
@endpush
