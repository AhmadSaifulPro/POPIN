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
                            <li class="breadcrumb-item active">Tabungan Santri</li>
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
                        <h4 class="card-title mb-0">Data Table Santri</h4>
                    </div><!-- end card header -->

                    <div class="card-body">
                        <div id="customerList">
                            <div class="row g-4 mb-3">
                                <div class="col-sm-auto">
                                    <div>
                                        {{-- <a href="{{ route('santri.create') }}" type="button" class="btn btn-success add-btn"><i class="ri-add-line align-bottom me-1"></i> Add</a> --}}
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
                                            <th class="text-center">Tanggal</th>
                                            <th class="text-center">Siswa ID</th>
                                            <th class="text-center">Jenis</th>
                                            <th class="text-center">Jumlah</th>
                                            <th class="text-center">Admin ID</th>
                                            <th class="text-center">Saldo Keseluruhan</th>
                                        </tr>
                                    </thead>
                                    <tbody class="list form-check-all">

                                        <?php
                                            $saldo = 0;
                                            ?>

                                        @foreach ($data as $item )
                                        <tr>
                                            <th scope="row">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="chk_child" value="option1" disabled>
                                                </div>
                                            </th>
                                            <td class="text-center">{{ $loop->iteration }}</td>
                                            <td class="text-center">{{ $item->tanggal }}</td>
                                            <td class="text-center">{{ $item->Santri->nama }}</td>
                                            <td class="text-center">{{ $item->jenis }}</td>
                                            <td class="text-center">{{ $item->jumlah }}</td>
                                            <td class="text-center">{{ $item->Admin->nama }}</td>
                                                <?php

                                                        if ($item->jenis == 'masuk'){
                                                            $saldo = $saldo + $item->jumlah;

                                                        }else {
                                                            $saldo = $saldo - $item->jumlah;
                                                        }

                                                    ?>
                                            <td class="text-center">
                                                {{ $saldo }}
                                            </td>
                                            {{-- <td class="text-center">
                                                <div class="d-flex gap-2">
                                                    <a href="{{ route('santri.edit', $item->id) }}" class="btn btn-sm btn-success edit-item-btn">Edit</a>

                                                    <form action="{{ route('santri.destroy', $item->id) }}" method="post">
                                                        @method('DELETE')
                                                        @csrf
                                                        <button class="btn btn-sm btn-danger remove-item-btn">Remove</button>
                                                    </form>
                                                    <a href="#" class="btn btn-sm btn-info edit-item-btn">Tabungan</a>

                                                </div>
                                            </td> --}}
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
