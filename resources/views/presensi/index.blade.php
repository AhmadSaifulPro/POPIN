@extends('layout.main')
@section('content')

<div class="page-content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title mb-0">Data Table Presensi Santri</h4>
                    </div><!-- end card header -->

                    <div class="card-body">
                        <div id="customerList">
                            <div class="row g-4 mb-3">
                                <div class="col-sm-auto">
                                    <div>
                                        <a href="{{ route('presensi.create') }}" type="button" class="btn btn-success add-btn"><i class="ri-add-line align-bottom me-1"></i> Add</a>
                                        {{-- <button class="btn btn-subtle-danger" onclick="deleteMultiple()"><i class="ri-delete-bin-2-line"></i></button> --}}
                                    </div>
                                </div>
                                <div class="col-sm">
                                    <div class="d-flex justify-content-sm-end">
                                        <div class="search-box ms-2">
                                            <input type="text" class="form-control search" placeholder="Search...">
                                            <i class="ri-search-line search-icon"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="table-responsive table-card mt-3 mb-1">
                                <table class="table align-middle table-nowrap" id="customerTable">
                                    <thead class="table-light">
                                        <tr>
                                            <th scope="col" style="width: 50px;">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="checkAll" value="option" disabled>
                                                </div>
                                            </th>
                                            <th>NO</th>
                                            <th>Santri ID</th>
                                            <th>Admin ID</th>
                                            <th>Foto</th>
                                            <th>Verifikasi</th>
                                            <th>Ket</th>
                                            <th>Tanggal</th>
                                            <th>Jam Keluar</th>
                                            <th>Jam Masuk</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody class="list form-check-all">
                                        @foreach ($data as $item )
                                        <tr>
                                            <th scope="row">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="chk_child" value="option1" disabled>
                                                </div>
                                            </th>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->Siswa->nama }}</td>
                                            <td>{{ $item->Admin->nama }}</td>
                                            <td><img src="{{ asset('/img/'. $item->foto) }}" style="width: 50px" alt=""></td>
                                            <td>{{ $item->verifikasi}}</td>
                                            <td>{{ $item->ket}}</td>
                                            <td>{{ $item->tanggal}}</td>
                                            <td>{{ $item->jam_keluar}}</td>
                                            <td>{{ $item->jam_kembali}}</td>
                                            <td>
                                                <form onsubmit="return confirm('Yakin Mau hapus Data Ini?')" action="{{ route('presensi.destroy', $item->id) }}" method="post">
                                                    @method('DELETE')
                                                    @csrf
                                                    <a href="{{ route('presensi.edit', $item->id) }}" class="btn btn-sm btn-warning edit-item-btn">Edit</a>
                                                    <button class="btn btn-sm btn-danger remove-item-btn">Remove</button>
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <div class="noresult" style="display: none">
                                    <div>
                                        <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop" colors="primary:#121331,secondary:#08a88a" style="width:75px;height:75px"></lord-icon>
                                        <h5 class="mt-2">Sorry! No Result Found</h5>
                                        <p class="text-muted mb-0">We've searched more than 150+ Orders We did not find any orders for you search.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="d-flex justify-content-end">
                                <div class="pagination-wrap hstack gap-2">
                                    <a class="page-item pagination-prev disabled" href="#">
                                        Previous
                                    </a>
                                    <ul class="pagination listjs-pagination mb-0">
                                        <li class="active"><a class="page" href="#" data-i="1" data-page="8">1</a></li>
                                    </ul>
                                    <a class="page-item pagination-next" href="#">
                                        Next
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div><!-- end card -->
                </div>
                <!-- end col -->
            </div>
            <!-- end col -->
        </div>
    </div>
</div>
@endsection
