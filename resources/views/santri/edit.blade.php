@extends('layout.main')
@section('content')
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title mb-0">Edit Data Santri</h4>
                    </div><!-- end card header -->
                    <div class="card-body">
                        <div class="row gy-4">
                            <form action="{{ route('santri.update', $data->id) }}" method="post">
                                @method('PUT')
                                @csrf
                                <dir class="row">
                                    <!--end col-->
                                    <div class="col-xxl-3 col-md-6 pt-2">
                                        <div>
                                            <label for="labelInput" class="form-label">NIK</label>
                                            <input type="text" class="form-control" value="{{ @$data->nik }}" name="nik" id="labelInput" placeholder="Masukan NIK">
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-xxl-3 col-md-6 pt-2">
                                        <div>
                                            <label for="placeholderInput" class="form-label">Nama</label>
                                            <input type="text" class="form-control" value="{{ @$data->nama }}" name="nama" id="placeholderInput" placeholder="Masukan Nama">
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-md-6 pt-2">
                                        <div>
                                            <label for="exampleInputdate" class="form-label">Jenis Kelamin</label>
                                            <input type="text" class="form-control" value="{{ @$data->jenis_kelamin }}" name="jenis_kelamin" id="placeholderInput" placeholder="Masukan Jenis Kelamin">
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-md-6 pt-2">
                                        <div>
                                            <label for="exampleInputdate" class="form-label">Tempat Lahir</label>
                                            <input type="text" class="form-control" value="{{ @$data->tempat_lahir }}" name="tempat_lahir" id="placeholderInput" placeholder="Masukan Tempat lahir">
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-md-6 pt-2">
                                        <div>
                                            <label for="exampleInputdate" class="form-label">Tgl Lahir</label>
                                            <input type="date" class="form-control" value="{{ @$data->tgl_lahir }}" name="tgl_lahir" id="exampleInputdate">
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-md-6 pt-2">
                                        <div>
                                            <label for="exampleInputdate" class="form-label">Alamat</label>
                                            <input type="text" class="form-control" value="{{ @$data->alamat }}" name="alamat" id="placeholderInput" placeholder="Masukan Alamat">
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-md-6 pt-2">
                                        <div>
                                            <label for="exampleInputdate" class="form-label">ID Wali Santri</label>
                                            <select class="form-select mb-3" name="id_walisantri" aria-label="Default select example">
                                                <option value="{{ $data->id }}">{{ $data->nama_wali }}</option>
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
                                            <input type="text" class="form-control" value="{{ @$data->nama_bapak }}" name="nama_bapak" id="placeholderInput" placeholder="Masukan Nama Bapak">
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-md-6 pt-2">
                                        <div>
                                            <label for="exampleInputdate" class="form-label">Nama Ibu</label>
                                            <input type="text" class="form-control" value="{{ @$data->nama_ibu }}" name="nama_ibu" id="placeholderInput" placeholder="Masukan Nama Ibu">
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-md-6 pt-2">
                                        <div>
                                            <label for="exampleInputdate" class="form-label">Tahun Masuk</label>
                                            <input type="text" class="form-control" value="{{ @$data->tahun_masuk }}" name="tahun_masuk" id="placeholderInput" placeholder="Masukan Tahun Masuk ">
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
