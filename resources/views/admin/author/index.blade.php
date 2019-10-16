@extends('admin.templates.default')

@section('content')

<div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Penulis</h3>
            <a href="{{ route('admin.author.create')}}" class="btn btn-primary ml-2">Tambah Penulis</a>


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

@endsection

@push('scripts')
<script>
    $(function()
    {
        $('#dataTable').DataTable({
            processing: true,
            serverSide: true,
            ajax:'{{ route('admin.author.data') }}',
            columns: [
                {data:'DT_RowIndex', orderable:false,serachable:false},
                {data:'name'},
                {data: 'action'}
            ]

        });

    });

</script>
@endpush

