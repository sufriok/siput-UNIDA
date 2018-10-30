@extends('backend.layouts.layouts')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Tables</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
@if(Session::has('delete'))
    <div class="alert alert-info alert-block">
    <button type="button" class="close" data-dismiss="alert">x</button>
    <strong>{{ Session::get('delete') }}</strong>
    </div>
@endif
@if(Session::has('update'))
    <div class="alert alert-info alert-block">
    <button type="button" class="close" data-dismiss="alert">x</button>
    <strong>{{ Session::get('update') }}</strong>
    </div>
@endif
<!-- /.row -->
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Data Surat
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="dataTable_wrapper">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>No Surat</th>
                                <th>Nama</th>
                                <th>Daerah</th>
                                <th>Keterangan</th>
                                <th>Status</th>
                                <th>Tanggal Masuk</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach( $deliveries as $delivery)
                            <tr class="odd gradeX">
                                <td>{{ $delivery->no_delivery }}</td>
                                <td>{{ $delivery->nama }}</td>
                                <td>{{ $delivery->daerah }}</td>
                                <td>{{ $delivery->keterangan }}</td>
                                <td>{{ $delivery->status }}</td>
                                <td class="center">{{ $delivery->created_at }}</td>
                                <td class="center">
                                    <form action="{{ route('paket.destroy', $delivery) }}" method="post">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <button type="button" class="btn btn-info"><a href="{{ route('paket.edit', $delivery) }}"><i class="fa fa-edit fa-fw"></i></a></button>
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus data?')"><i class="fa fa-trash-o fa-fw"></i></button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.table-responsive -->
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
@endsection