@extends('layout.main')
@section('content')
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title mb-0">Absen Santri</h4>
                    </div><!-- end card header -->
                    <div class="card-body">
                        <div class="row gy-4">
                            {{-- @foreach ($santri as $item) --}}
                            <form action="{{ route('tambahabsen', $santri->id) }}" method="post" enctype="multipart/form-data">
                            {{-- @endforeach --}}
                                @csrf
                                <dir class="row">
                                    <div class="col-xxl-3 col-md-6 pt-2">
                                        <div>
                                            <label for="exampleInputdate" class="form-label">Santri ID</label>
                                            <input type="text" class="form-control" value="{{ $santri->nama }}" readonly>
                                            {{-- <select class="form-select mb-3" name="siswa_id" aria-label="Default select example">
                                                <option value="{{ $item->id }}">{{ $item->nama }}</option>
                                            </select> --}}
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-md-6 pt-2">
                                        <div>
                                            <label for="exampleInputdate" class="form-label">Admin ID</label>
                                            <input type="text" class="form-control" value="{{ auth()->guard('admin')->user()->nama }}" name="admin_id" readonly>
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-md-6 pt-2">
                                        <div>
                                            <label for="exampleInputdate" class="form-label">Gambar</label>
                                            <input type="file" name="foto" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-md-6 pt-2">
                                        <div>
                                            <label for="placeholderInput" class="form-label">Verifikasi</label>
                                            <select class="form-select mb-3" name="verifikasi" aria-label="Default select example">
                                                <option value="auto">Auto</option>
                                                <option value="manual">Manual</option>
                                            </select>
                                            {{-- <input type="date" class="form-control" name="verifikasi" id="placeholderInput" placeholder="Masukan Verfikasi"> --}}
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-md-6 pt-2">
                                        <div>
                                            <label for="placeholderInput" class="form-label">Keterangan</label>
                                            <input type="text" class="form-control" name="ket" id="placeholderInput" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-md-6 pt-2">
                                        <div>
                                            <label for="placeholderInput" class="form-label">Tanggal</label>
                                            <input type="date" class="form-control" name="tanggal" id="placeholderInput" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-md-6 pt-2">
                                        <div>
                                            <label for="exampleInputdate" class="form-label">Jam Keluar</label>
                                            <input type="time" class="form-control" name="jam_keluar">
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-md-6 pt-2">
                                        <div>
                                            <label for="exampleInputdate" class="form-label">Jam Kembali</label>
                                            <input type="time" class="form-control" name="jam_kembali">
                                        </div>
                                    </div>
                                    <div class="pt-3">
                                        <div class="hstack gap-2 justify-content-end">
                                            <button type="submit" class="btn btn-success" id="add-btn">Absen</button>
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
