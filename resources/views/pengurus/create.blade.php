@extends('layout.main')
@section('content')
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title mb-0">Nambah Data Pengurus</h4>
                    </div><!-- end card header -->
                    <div class="card-body">
                        <div class="row gy-4">
                            <form action="{{ route('pengurus.store') }}" method="post">
                                @csrf
                                <dir class="row">
                                    <!--end col-->
                                    <div class="col-xxl-3 col-md-6 pt-2">
                                        <div>
                                            <label for="labelInput" class="form-label">Email</label>
                                            <input type="text" class="form-control" name="email" id="labelInput" placeholder="Masukan NIK">
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-xxl-3 col-md-6 pt-2">
                                        <div>
                                            <label for="placeholderInput" class="form-label">Nama</label>
                                            <input type="text" class="form-control" name="nama" id="placeholderInput" placeholder="Masukan Nama">
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-md-6 pt-2">
                                        <div>
                                            <label for="exampleInputdate" class="form-label">Password</label>
                                            <input type="password" class="form-control" name="password" id="placeholderInput" placeholder="Masukan Password">
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-md-6 pt-2">
                                        <div>
                                            <label for="exampleInputdate" class="form-label">Alamat</label>
                                            <input type="text" class="form-control" name="alamat" id="placeholderInput" placeholder="Masukan Alamat">
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-md-6 pt-2">
                                        <div>
                                            <label for="exampleInputdate" class="form-label">Telp</label>
                                            <input type="text" class="form-control" name="telp" id="placeholderInput" placeholder="Masukan Telp">
                                        </div>
                                    </div>
                                    <div class="pt-3">
                                        <div class="hstack gap-2 justify-content-end">
                                            <button type="submit" class="btn btn-success" id="add-btn">Add Pengurus</button>
                                            <!-- <button type="button" class="btn btn-success" id="edit-btn">Update</button> -->
                                        </div>
                                    </div>
                                </dir>
                            </form>
                        </div>
                        <!--end row-->
                    </div>
                </div>
            </div>
            <!--end col-->
        </div>
    </div>
</div>
@endsection
