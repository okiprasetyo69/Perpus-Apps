{{-- <a href="{{ route('admin.borrow.return', $model) }}" class="badge btn-warning btn-sm"> Edit </a> --}}
<button href="{{ route('admin.borrow.return', $model) }} " class="badge btn-info" id="return"> Pengembalian Buku </button>


<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script>
    $('button#return').on('click', function(e){
        e.preventDefault();
        var href = $(this).attr('href');
        Swal.fire({
            title: 'Apakah kamu yakin data buku yang kembalikan sudah benar ?',
            text: "Pastikan bahwa data & buku yang dikembalikan sudah sesuai !",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, betul data sudah diperiksa !'
            }).then((result) => {
            if (result.value) {
                document.getElementById('returnForm').action = href ;
                document.getElementById('returnForm').submit();
                Swal.fire(
                'Dikembalikan !',
                'Buku sudah dikembalikan ',
                'success'
                )
            }
        })
    });
</script>
