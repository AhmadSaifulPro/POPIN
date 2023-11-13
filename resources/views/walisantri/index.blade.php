@extends('layout.main')
@section('content')

<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                            <li class="breadcrumb-item active">Wali Santri</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title mb-0">Data Table Wali Santri</h4>
                    </div><!-- end card header -->

                    <div class="card-body">
                        <div id="customerList">
                            <div class="row g-4 mb-3">
                                <div class="col-sm-auto">
                                    <div>
                                        <a href="{{ route('wali_santri.create') }}" type="button" class="btn btn-success add-btn"><i class="ri-add-line align-bottom me-1"></i> Add</a>
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
                                            <th class="text-center">No</th>
                                            <th class="text-center">NIK</th>
                                            <th class="text-center">Nama Wali</th>
                                            <th class="text-center">Alamat Wali</th>
                                            <th class="text-center">No Telp</th>
                                            <th class="text-center">Email</th>
                                            <th class="text-center">Password</th>
                                            <th class="text-center">Jenis Kelamin</th>
                                            <th class="text-center">Hubungan</th>
                                            <th class="text-center">Pekerjaan</th>
                                            <th class="text-center">Tgl Lahir</th>
                                            <th class="text-center">Kota Lahir</th>
                                            <th class="text-center">Penghasilan Wali</th>
                                            <th class="text-center">Pendidikan Terakhir</th>
                                            <th class="text-center">Aksi</th>
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
                                            <td class="text-center">{{ $loop->iteration }}</td>
                                            <td class="text-center">{{ $item->nik }}</td>
                                            <td class="text-center">{{ $item->nama_wali }}</td>
                                            <td class="text-center">{{ $item->alamat_wali }}</td>
                                            <td class="text-center">{{ $item->no_telp }}</td>
                                            <td class="text-center">{{ $item->email }}</td>
                                            <td class="text-center">{{ $item->password }}</td>
                                            <td class="text-center">{{ $item->jenis_kelamin }}</td>
                                            <td class="text-center">{{ $item->hubungan }}</td>
                                            <td class="text-center">{{ $item->pekerjaan }}</td>
                                            <td class="text-center">{{ $item->tgl_lahir }}</td>
                                            <td class="text-center">{{ $item->kota_lahir }}</td>
                                            <td class="text-center">{{ $item->penghasilan_wali }}</td>
                                            <td class="text-center">{{ $item->pendidikan_terakhir }}</td>
                                            <td class="text-center">
                                                <div class="d-flex gap-2">
                                                    <a href="{{ route('wali_santri.edit', $item->id) }}" class="btn btn-sm btn-success edit-item-btn">Edit</a>

                                                    <form action="{{ route('wali_santri.destroy', $item->id) }}" method="post">
                                                        @method('DELETE')
                                                        @csrf
                                                        <button class="btn btn-sm btn-danger remove-item-btn">Remove</button>
                                                    </form>
                                                    {{-- <a href="{{ route('tabugan_santritabungan_santri', $item->id) }}" class="btn btn-sm btn-info edit-item-btn">Tabungan</a> --}}

                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <div class="noresult" style="display: none">
                                    <div class="text-center">
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
        <!-- Modal -->
        <div class="modal fade zoomIn" id="deleteRecordModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="btn-close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mt-2 text-center">
                            <i class="bi bi-trash3 display-5 text-danger"></i>
                            <div class="mt-4 pt-2 fs-base mx-4 mx-sm-5">
                                <h4>Are you Sure ?</h4>
                                <p class="text-muted mx-4 mb-0">Are you Sure You want to Remove this Record ?</p>
                            </div>
                        </div>
                        <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                            <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn w-sm btn-danger " id="delete-record">Yes, Delete It!</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end modal -->
    </div>
</div>

@endsection
