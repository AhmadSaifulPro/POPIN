@extends('layout.main')
@section('content')
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title mb-0">Nambah Data Santri</h4>
                    </div><!-- end card header -->
                    <div class="card-body">
                        <div class="row gy-4">
                            <form action="{{ route('tabungan.store') }}" method="post">
                                @csrf
                                <dir class="row">
                                    <div class="col-xxl-3 col-md-6 pt-2">
                                        <div>
                                            <label for="exampleInputdate" class="form-label">Santri ID</label>
                                            <select class="form-select mb-3" name="siswa_id" aria-label="Default select example">
                                                @foreach ($santri as $item)
                                                <option value="{{ $item->id }}">{{ $item->nama }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-md-6 pt-2">
                                        <div>
                                            <label for="exampleInputdate" class="form-label">jenis</label>
                                            <select class="form-select mb-3" name="jenis" aria-label="Default select example">
                                                <option value="masuk">Masuk</option>
                                                <option value="keluar">Keluar</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-xxl-3 col-md-6 pt-2">
                                        <div>
                                            <label for="placeholderInput" class="form-label">jumlah</label>
                                            <input type="text" class="form-control" name="jumlah" id="placeholderInput" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-md-6 pt-2">
                                        <div>
                                            <label for="exampleInputdate" class="form-label">Admin ID</label>
                                            <input type="text" class="form-control" value="{{ auth()->guard('admin')->user()->nama }}" name="admin_id" readonly>
                                        </div>
                                    </div>
                                    <div class="pt-3">
                                        <div class="hstack gap-2 justify-content-end">
                                            <button type="submit" class="btn btn-success" id="add-btn">Add Tabungan</button>
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
