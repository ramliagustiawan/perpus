
<a href="{{route('admin.book.edit', $model) }}"
class="btn btn-warning">Edit</a>

<button href="{{ route('admin.book.destroy', $model) }}"
class="btn btn-danger" id="delete">Hapus</button>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>

<script>
    $('button#delete') .on('click', function(e){
        e.preventDefault();

        var href = $(this).attr('href');

        Swal.fire({
            title: 'Apakah Anda Yakin?',
            text: "Setelah Dihapus data tidak dapat dikembalikan",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, Data Dihapus Saja!'
            }).then((result) => {
            if (result.value) {

        document.getElementById('deleteForm').action=href;
        document.getElementById('deleteForm').submit();

                Swal.fire(
                'Hapus!',
                'Data Berhasil Dihapus.',
                'success'
                )
            }
            })


    })

</script>
