@extends('layout.main')
@section('content')
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title mb-0">Laporan Global</h4>
                    </div><!-- end card header -->
                    <div class="card-body">
                        <div class="row gy-4">
                                @csrf
                                <dir class="row">
                                    <form action="{{ route('laporanumum') }}" method="POST">
                                        @csrf
                                        <div class="col-xxl-3 col-md-6 pt-2">
                                            <div>
                                                <label for="exampleInputdate" class="form-label">Tanggal Awal</label>
                                                <input type="date" class="form-control" name="tanggal_awal">
                                            </div>
                                        </div>
                                        <div class="col-xxl-3 col-md-6 pt-2">
                                            <div>
                                                <label for="exampleInputdate" class="form-label">Tanggal Akhir</label>
                                                <input type="date" name="tanggal_akhir" class="form-control">
                                            </div>
                                        </div>
                                        <div class="pt-3">
                                            <div class="hstack gap-2 justify-content-end">
                                                <button type="submit" class="btn btn-success" id="add-btn">Buat</button>
                                                <!-- <button type="button" class="btn btn-success" id="edit-btn">Update</button> -->
                                            </div>
                                        </div>
                                    </form>
                                </dir>
                        </div>
                        <!--end row-->
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title mb-0">Laporan Individu</h4>
                    </div><!-- end card header -->
                    <div class="card-body">
                        <div class="row gy-4">
                            <form action="{{ route('laporan_individu') }}" method="post">
                                @csrf
                                <dir class="row">
                                    <div class="col-xxl-3 col-md-6 pt-2">
                                        <div>
                                            <label for="exampleInputdate" class="form-label">Santri ID</label>

                                            <select class="js-example-basic-single form-select mb-6" name="siswa_id">
                                                @foreach ($santri as $item)
                                                <option value="{{ $item->id }}">{{ $item->nama }}</option>
                                                @endforeach
                                            </select>
                                            {{-- </select>
                                            <select class="form-select mb-3" name="siswa_id" aria-label="Default select example">
                                            </select> --}}
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-md-6 pt-2">
                                        <div>
                                            <label for="exampleInputdate" class="form-label">Tanggal Awal</label>
                                            <input type="date" class="form-control" name="tanggal_awal">
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-md-6 pt-2">
                                        <div>
                                            <label for="exampleInputdate" class="form-label">Tanggal Akhir</label>
                                            <input type="date" name="tanggal_akhir" class="form-control">
                                        </div>
                                    </div>
                                    <div class="pt-3">
                                        <div class="hstack gap-2 justify-content-end">
                                            <button type="submit" class="btn btn-success" id="add-btn">Buat</button>
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
