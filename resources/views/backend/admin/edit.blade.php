@extends('backend.layouts.layouts')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Admin</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<div class="row">                 
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Tambah Data Admin
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-6">
                        <form role="form" action="{{ route('user.update', $user) }}" method="post">
                        @csrf
                        {{ method_field('PATCH') }}
                            <div class="form-group">
                                <label>{{__('Nama')}}</label>
                                <input type="text" name="name" value="{{ $user->name }}" class="form-control" >
                            </div>
                            <div class="form-group">
                                <label>{{__('email')}}</label>
                                <input type="email" name="email" value="{{ $user->email }}" class="form-control" >
                            </div>
                            <div class="form-group">
                                <label>{{__('Daerah')}}</label>
                                <input type="text" name="daerah" value="{{ $user->daerah }}" class="form-control" >
                            </div>
                            <div class="form-group">
                                <label>{{__('No. Hp')}}</label>
                                <input type="number" name="no_hp" value="{{ $user->no_hp }}" class="form-control" >
                            </div>
                            <div class="form-group">
                                <label>{{__('Password')}}</label>
                                <input type="password" name="password" class="form-control">
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