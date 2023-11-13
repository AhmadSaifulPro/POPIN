@extends('layout.main')
@section('content')
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Dashboard POPIN</h4>
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboards</a></li>
                            <li class="breadcrumb-item active">POPIN</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12">
        </div>
        <div class="row">
            <div class="col-xxl col-sm-6">
                <div class="card overflow-hidden">
                    <div class="card-body">
                        <div class="avatar-sm float-end mt-4">
                            <div class="avatar-title bg-primary-subtle text-primary fs-3xl rounded">
                                <i class="ri-wallet-fill"></i>
                            </div>
                        </div>
                        <h4 class="text-center pt-4"><span class="counter-value" data-target="{{ DB::table('tabungan')
                            ->select(DB::raw("sum(if(jenis='MASUK', jumlah,-jumlah )) as saldo"))
                            ->value('saldo') }}"></span> </h4>
                        <p class="text-center mb-4">Saldo Keseluruhan</p>
                    </div>
                </div>
            </div><!--end col-->
            <div class="col-xxl col-sm-6">
                <div class="card overflow-hidden">
                    <div class="card-body">
                        <div class="avatar-sm float-end mt-4">
                            <div class="avatar-title bg-danger-subtle text-danger fs-3xl rounded">
                                <i class=" ph-money-thin"></i>
                            </div>
                        </div>
                        <h4 class="text-center pt-4"><span class="counter-value" data-target="{{ DB::table('tabungan')
                            ->select(DB::raw("sum(jumlah) as saldo"))->where('tanggal', today())->where('jenis', "KELUAR")
                            ->value('saldo') }}"></span> </h4>
                        <p class="text-center mb-4 ">Saldo Keluar Hari Ini</p>
                    </div>
                </div>
            </div><!--end col-->
            <div class="col-xxl col-sm-6">
                <div class="card overflow-hidden">
                    <div class="card-body">
                        <div class="avatar-sm float-end mt-4">
                            <div class="avatar-title bg-success-subtle text-success fs-3xl rounded">
                                <i class=" bx bx-money"></i>
                            </div>
                        </div>
                        <h4 class="text-center pt-4"><span class="counter-value" data-target="{{ DB::table('tabungan')
                            ->select(DB::raw("sum(jumlah) as saldo"))->where('tanggal', today())->where('jenis', "MASUK")
                            ->value('saldo') }}">
                        </span></h4>
                            {{-- {{ date('Y-m-dp') }} --}}
                        <p class="text-center mb-4">Saldo Masuk Hari ini</p>
                    </div>
                </div>
            </div><!--end col-->
            <div class="col-xxl col-sm-6">
                <div class="card overflow-hidden">
                    <div class="card-body">
                        <div class="avatar-sm float-end mt-4">
                            <div class="avatar-title bg-secondary-subtle text-secondary fs-3xl rounded">
                                <i class=" ri-file-user-fill"></i>
                            </div>
                        </div>
                        <h4 class="text-center pt-4"><span class="counter-value" data-target="{{ DB::table('santri')->get()->count() }}"></span></h4>
                        <p class="text-center mb-4">Data Santri</p>
                    </div>
                </div>
            </div><!--end col-->
            <div class="col-xxl">
                <div class="card overflow-hidden">
                    <div class="card-body">
                        <div class="avatar-sm float-end mt-4">
                            <div class="avatar-title bg-warning-subtle text-warning fs-3xl rounded">
                                <i class=" ri-file-user-line"></i>
                            </div>
                        </div>
                        <h4 class="text-center pt-4"><span class="counter-value" data-target="{{ DB::table('admin')->get()->count() }}"></span></h4>
                        <p class="text-center mb-4">Data Pegawai</p>
                    </div>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div>
    <!-- container-fluid -->
</div>
<!-- End Page-content -->

<footer class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <script>document.write(new Date().getFullYear())</script> © Steex.
            </div>
            <div class="col-sm-6">
                <div class="text-sm-end d-none d-sm-block">
                    Design & Develop by Themesbrand
                </div>
            </div>
        </div>
    </div>
</footer>

@endsection
