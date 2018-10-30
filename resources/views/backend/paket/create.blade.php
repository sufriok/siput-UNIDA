@extends('backend.layouts.layouts')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Paket</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<div class="row">                 
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Tambah Data Paket
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-6">
                        <form role="form" action="{{ route('paket.store') }}" method="post">
                        @csrf
                            <div class="form-group">
                                <label>{{__('No Paket')}}</label>
                                <input type="number" name="no_delivery" class="form-control" placeholder="Kode Paket">
                            </div>
                            <div class="form-group">
                                <label>{{__('Nama')}}</label>
                                <input type="text" name="nama" class="form-control" placeholder="Nama Penerima">
                            </div>
                            <div class="form-group">
                                <label>{{__('Daerah')}}</label>
                                <input type="text" name="daerah" class="form-control" placeholder="Daerah Pengirim">
                            </div>
                            <div class="form-group">
                                <label>{{__('Keterangan')}}</label>
                                <select name="keterangan" class="form-control">
                                    <option value="paket">paket</option>
                                    <option value="surat">surat</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>{{__('Status')}}</label>
                                <select name="status" class="form-control">
                                    <option value="belum diambil">belum diambil</option>
                                    <option value="sudah diambil">sudah diambil</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-default">Submit Button</button>
                            <button type="reset" class="btn btn-default">Reset Button</button>
                        </form>
                    </div>

                    <div class="col-lg-6">
                    <br>
                    @if(count($errors) > 0)
                            <ul>
                                @foreach($errors->all() as $error)
                                <li class=" alert alert-danger">{{ $error }}</li>
                                @endforeach
                            </ul>
                    @endif
                    @if(Session::has('success'))
                        <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">x</button>
                        <strong>{{ Session::get('success') }}</strong>
                        </div>
                    @endif
                    </div>
                </div>
                <!-- /.row (nested) -->
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>
@endsection