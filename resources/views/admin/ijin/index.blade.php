@extends('admin.templates.default')

@section('content')

<div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Perijinan</h3>
            <a href="{{ route('admin.ijin.create')}}" class="btn btn-primary ml-2">Tambah Daftar Perijinan</a>


            </div>
            <!-- /.box-header -->
            <div class="box-body">



              <table id="dataTable" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Penulis</th>
                  <th>Aksi</th>
                  {{-- <th>Edit</th> --}}

                </tr>

                </thead>
                <tbody>
                {{-- <tr>
                  <td>Trident</td>
                  <td>Internet
                    Explorer 4.0
                  </td>
                  <td>Win 95+</td>

                </tr> --}}

                </tbody>
                {{-- <tfoot>
                <tr>
                  <th>No</th>
                  <th>Penulis</th>
                  <th>Edit</th>

                </tr>
                </tfoot> --}}
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <form action="" method="post" id="deleteForm">
              @csrf
              @method("DELETE")
              <input type="submit" value="Hapus" style="display:none">
          </form>

@endsection

@push('scripts')

        <script src="{{ asset('assets/plugins/bs-notify.min.js')}}"></script>

         {{-- flash message --}}
         @include ('admin.templates.partials.alerts')

<script>
    $(function()
    {
        $('#dataTable').DataTable({
            processing: true,
            serverSide: true,
            ajax:'{{ route('admin.ijin.data') }}',
            columns: [
                {data:'DT_RowIndex', orderable:false,serachable:false},
                {data:'name'},
                {data: 'action'}
            ]

        });

    });

</script>
@endpush

