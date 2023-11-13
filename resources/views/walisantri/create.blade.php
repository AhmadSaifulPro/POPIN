@extends('layout.main')
@section('content')
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title mb-0">Nambah Data Wali Santri</h4>
                    </div><!-- end card header -->
                    <div class="card-body">
                        <div class="row gy-4">
                            <form action="{{ route('wali_santri.store') }}" method="post">
                                @csrf
                                <dir class="row">
                                    <!--end col-->
                                    <div class="col-xxl-3 col-md-6 pt-2">
                                        <div>
                                            <label for="labelInput" class="form-label">NIK</label>
                                            <input type="text" class="form-control" name="nik" placeholder="Masukan NIK">
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-xxl-3 col-md-6 pt-2">
                                        <div>
                                            <label for="placeholderInput" class="form-label">Nama</label>
                                            <input type="text" class="form-control" name="nama_wali" placeholder="Masukan Nama">
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-md-6 pt-2">
                                        <div>
                                            <label for="exampleInputdate" class="form-label">Alamat Wali</label>
                                            <input type="text" class="form-control" name="alamat_wali" placeholder="Masukan Alamat Wali">
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-md-6 pt-2">
                                        <div>
                                            <label for="exampleInputdate" class="form-label">No Telp</label>
                                            <input type="text" class="form-control" name="no_telp" placeholder="Masukan No Telp">
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-md-6 pt-2">
                                        <div>
                                            <label for="exampleInputdate" class="form-label">Email</label>
                                            <input type="text" class="form-control" name="email" id="exampleInputdate" placeholder="Masukan Email">
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-md-6 pt-2">
                                        <div>
                                            <label for="exampleInputdate" class="form-label">Password</label>
                                            <input type="password" class="form-control" name="password" placeholder="Masukan password">
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-md-6 pt-2">
                                        <div>
                                            <label for="exampleInputdate" class="form-label">Jenis Kelamin</label>
                                            <input type="text" class="form-control" name="jenis_kelamin" placeholder="Masukan Jenis Kelamin">
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-md-6 pt-2">
                                        <div>
                                            <label for="exampleInputdate" class="form-label">Hubungan</label>
                                            <input type="text" class="form-control" name="hubungan" placeholder="Masukan hubungan">
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-md-6 pt-2">
                                        <div>
                                            <label for="exampleInputdate" class="form-label">Pekerjaan</label>
                                            <input type="text" class="form-control" name="pekerjaan" placeholder="Masukan pekerjaan">
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-md-6 pt-2">
                                        <div>
                                            <label for="exampleInputdate" class="form-label">Tgl Lahir</label>
                                            <input type="date" class="form-control" name="tgl_lahir" placeholder="Masukan tgl_lahir">
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-md-6 pt-2">
                                        <div>
                                            <label for="exampleInputdate" class="form-label">Kota Lahir</label>
                                            <input type="text" class="form-control" name="kota_lahir" placeholder="Masukan kota Lahir">
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-md-6 pt-2">
                                        <div>
                                            <label for="exampleInputdate" class="form-label">Penghasilan Wali</label>
                                            {{-- <input type="text" class="form-control" name="penghasilan_wali" placeholder="Masukan Alamat"> --}}
                                            <select class="form-select mb-3" name="penghasilan_wali" aria-label="Default select example">
                                                <option value="kurang dari 500.000">Kurang dari 500.000</option>
                                                <option value="500.000 - 1.000.000">500.000 - 1.000.000</option>
                                                <option value="1.000.000 - 2.000.000">1.000.000 - 2.000.000</option>
                                                <option value="2.000.000 - 3.000.000">2.000.000 - 3.000.000</option>
                                                <option value="3.000.000 - 5.000.000">3.000.000 - 5.000.000</option>
                                                <option value="lebih dari 5.000.000">lebih dari 5.000.000</option>
                                                <option value="tidak ada">Tidak ada</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-md-6 pt-2">
                                        <div>
                                            <label for="exampleInputdate" class="form-label">Pendidikan terakhir</label>
                                            <input type="text" class="form-control" name="pendidikan_terakhir" placeholder="Masukan Pendidikan Terakhir">
                                        </div>
                                    </div>
                                    <div class="pt-3">
                                        <div class="hstack gap-2 justify-content-end">
                                            <button type="submit" class="btn btn-success" id="add-btn">Add Wali Santri</button>
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
