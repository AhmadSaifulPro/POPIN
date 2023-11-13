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
                            <form action="{{ route('santri.store') }}" method="post">
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
                                            <input type="text" class="form-control" name="nama" placeholder="Masukan Nama">
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
                                            <label for="exampleInputdate" class="form-label">Tempat Lahir</label>
                                            <input type="text" class="form-control" name="tempat_lahir" placeholder="Masukan Tempat lahir">
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-md-6 pt-2">
                                        <div>
                                            <label for="exampleInputdate" class="form-label">Tgl Lahir</label>
                                            <input type="date" class="form-control" name="tgl_lahir" id="exampleInputdate">
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-md-6 pt-2">
                                        <div>
                                            <label for="exampleInputdate" class="form-label">Alamat</label>
                                            <input type="text" class="form-control" name="alamat" placeholder="Masukan Alamat">
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-md-6 pt-2">
                                        <div>
                                            <label for="exampleInputdate" class="form-label">ID Wali Santri</label>
                                            <select class="form-select mb-3" name="id_walisantri" aria-label="Default select example">
                                                @foreach ($wali as $item)
                                                <option value="{{ $item->id }}">{{ $item->nama_wali }}</option>
                                                @endforeach
                                            </select>
                                            {{-- <input type="text" class="form-control" name="nama_bapak" placeholder="Masukan Nama Bapak"> --}}
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-md-6 pt-2">
                                        <div>
                                            <label for="exampleInputdate" class="form-label">Nama Bapak</label>
                                            <input type="text" class="form-control" name="nama_bapak" placeholder="Masukan Nama Bapak">
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-md-6 pt-2">
                                        <div>
                                            <label for="exampleInputdate" class="form-label">Nama Ibu</label>
                                            <input type="text" class="form-control" name="nama_ibu" placeholder="Masukan Nama Ibu">
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-md-6 pt-2">
                                        <div>
                                            <label for="exampleInputdate" class="form-label">Tahun Masuk</label>
                                            <input type="text" class="form-control" name="tahun_masuk" placeholder="Masukan Tahun Masuk ">
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-md-6 pt-2">
                                        <div>
                                            <label for="exampleInputdate" class="form-label">Mukim</label>
                                            <select class="form-select mb-3" name="mukim" aria-label="Default select example">
                                                <option value="iya">Iya</option>
                                                <option value="tidak">Tidak</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="pt-3">
                                        <div class="hstack gap-2 justify-content-end">
                                            <button type="submit" class="btn btn-success" id="add-btn">Add Santri</button>
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
