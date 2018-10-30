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
                        <form role="form" action="{{ route('user.store') }}" method="post">
                        @csrf
                            <div class="form-group">
                                <label>{{__('Nama')}}</label>
                                <input type="text" name="name" class="form-control" placeholder="Nama Admin">
                            </div>
                            <div class="form-group">
                                <label>{{__('email')}}</label>
                                <input type="email" name="email" class="form-control" placeholder="Email Admin">
                            </div>
                            <div class="form-group">
                                <label>{{__('Daerah')}}</label>
                                <input type="text" name="daerah" class="form-control" placeholder="Daerah Admin">
                            </div>
                            <div class="form-group">
                                <label>{{__('No. Hp')}}</label>
                                <input type="number" name="no_hp" class="form-control" placeholder="No. Hp Admin">
                            </div>
                            <div class="form-group">
                                <label>{{__('Password')}}</label>
                                <input type="password" name="password" class="form-control" placeholder="Password">
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