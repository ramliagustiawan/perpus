@extends('admin.templates.default')

@section('content')

<div class="box">
    <div class="box-header">
        <h3 class="box-title">Data Peminjaman Buku</h3>
            {{-- <a href="{{ route('admin.borrow.create')}}" class="btn btn-primary ml-2">Tambah Penulis</a> --}}
    </div>

    <div class="box-body">
        <table id="dataTable" class="table table-bordered table-hover">
             <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Judul Buku</th>
                  <th>Aksi</th>
                </tr>
            </thead>
        </table>
    </div>
</div>


          <form action="" method="post" id="returnForm">
              @csrf
              @method("PUT")
              <input type="submit" value="Return" style="display:none">
          </form>

@endsection

{{-- css untuk datatables --}}
@push('datatable')
    <!-- DataTables -->
  <link rel="stylesheet" href="{{ asset('assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
@endpush


{{-- js untuk bs notify --}}
@push('scripts')

<!-- DataTables -->
<script src="{{ asset('assets/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>

        <script src="{{ asset('assets/plugins/bs-notify.min.js')}}"></script>

         {{-- flash message --}}
         @include ('admin.templates.partials.alerts')

<script>
    $(function()
    {
        $('#dataTable').DataTable({
            processing: true,
            serverSide: true,
            ajax:'{{ route('admin.borrow.data') }}',
            columns: [
                {data:'DT_RowIndex', orderable:false,searchable:false},
                {data:'user'},
                {data: 'book_title'},
                {data: 'action'}
            ]

        });

    });

</script>
@endpush

