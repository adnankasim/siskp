@extends('template')
@section('main')
                <!-- total & menu opsional -->
                <nav class="navbar mb-2 navbar-expand-lg navbar-light justify-content-between border mb-1 mx-0 mt-0 shadow-sm">
                    <a class="text-dark"><span class="">Total: {{ $total }}</span></a>
                    
                    <a class="text-primary" href="{{ url('dosen-pembimbing/skripsi/create') }}"><span class="fa fa-plus"></span>  Tambah</a>
                </nav>

                <div class="card mb-3">
                    <div class="card-header bg-primary d-flex justify-content-between align-items-center">
                        <strong class="bg-primary text-light">Dosen Pembimbing Skripsi</strong>
                    </div>

                    <!-- jika data ada -->
                    <?php $i=1 ?>
                    @foreach($daftar_semester as $periode)
                    <div class="card-body border-bottom py-2">
                        <div class="row">
                            <div class="col-12 col-lg-11">
                                <p class="my-0 py-0 text-dark">
                                <p class="card-title font-weight-bold my-0 py-0 text-capitalize">{{ $i }}). {{ $periode->nama  }} </p>
                                    Dari Hari {{ tanggal($periode->waktu_buka) }} s/d Hari {{ tanggal($periode->waktu_tutup) }} <br>
                                    {{ $periode->dosenPembimbingSkripsi->count() }} Mahasiswa
                                </p>

                                <!-- menu mobile -->
                                <ul class="nav nav-pills nav-justified d-lg-none">
                                    <li class="nav-item mx-0 px-0">
                                        <a class="nav-link text-primary mx-0 px-0 small" href="{{ url('dosen-pembimbing/skripsi/semester/'.$periode->id) }}"><span class="fa fa-info-circle"></span>&nbsp; Detail</a>
                                    </li>
                                </ul>
                            </div>

                            <!-- menu large -->
                            <div class="col-1 dropdown dropleft text-center d-none d-lg-flex justify-content-center align-items-center">
                                <a class="text-info small" href="{{ url('dosen-pembimbing/skripsi/semester/'.$periode->id) }}">
                                    <span class="fa fa-info-circle fa-lg"></span> Detail
                                </a>
                            </div>
                        </div>
                    </div>
                    <?php $i++ ?>
                    @endforeach

                    <div class="card-body border-bottom py-2">
                        <div class="row">
                            <div class="col-12 col-lg-11">
                                <p class="card-title font-weight-bold my-0 py-0 text-capitalize">{{ $i }}). Tidak Diketahui </p>
                                <p class="my-0 py-0 text-dark">
                                    {{ $total_periode_kosong }} Mahasiswa
                                </p>

                                <!-- menu mobile -->
                                <ul class="nav nav-pills nav-justified d-lg-none">
                                    <li class="nav-item mx-0 px-0">
                                        <a class="nav-link text-primary mx-0 px-0 small" href="{{ url('dosen-pembimbing/skripsi/semester/tidak-diketahui') }}"><span class="fa fa-info-circle"></span>&nbsp; Detail</a>
                                    </li>
                                </ul>
                            </div>

                            <!-- menu large -->
                            <div class="col-1 dropdown dropleft text-center d-none d-lg-flex justify-content-center align-items-center">
                                <a class="text-info small" href="{{ url('dosen-pembimbing/skripsi/semester/tidak-diketahui') }}">
                                    <span class="fa fa-info-circle fa-lg"></span> Detail
                                </a>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- paginasi -->
                <nav class="pagination pagination-sm my-2 text-truncate">
                    {{ $daftar_semester->onEachSide(1)->links() }}
                </nav>
@stop