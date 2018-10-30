@extends('backend.layouts.layouts')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Surat</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<div class="row">                 
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Edit Data Paket
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-6">
                        <form role="form" action="{{ route('paket.update', $delivery) }}" method="post">
                        @csrf
                        {{ method_field('PATCH') }}
                            <div class="form-group">
                                <label>{{__('No Surat')}}</label>
                                <input type="number" name="no_delivery" class="form-control" value="{{ $delivery->no_delivery }}">
                            </div>
                            <div class="form-group">
                                <label>{{__('Nama')}}</label>
                                <input type="text" name="nama" class="form-control" value="{{ $delivery->nama }}">
                            </div>
                            <div class="form-group">
                                <label>{{__('Daerah')}}</label>
                                <input type="text" name="daerah" class="form-control" value="{{ $delivery->daerah }}">
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