@extends('template')
@section('main')
                @include('errors.form_error')

                <!-- prodi -->
                <div class="card mb-3">
                    <div class="card-header bg-primary d-flex justify-content-between align-items-center">
                        <strong class="bg-primary text-light">Edit Periode Daftar Turun Kerja Praktek</strong>
                        
                        <a class="text-white d-none d-lg-inline" href="{{ url()->previous() }}">
                            <span class="fa fa-arrow-left"></span> <span class="">Kembali</span>
                        </a>
                    </div>

                    <div class="card-body border-bottom py-2">
                        {!! Form::open(['url' => 'semester-periode/periode-daftar-turun-kp/'. $periode_daftar_turun_kp->id, 'method' => 'patch']) !!}
                            {{ csrf_field() }}
                            
                            <div class="form-row">
                                <div class="form-group col-12">
                                    <label>Nama</label>
                                    {!! Form::text('nama', $periode_daftar_turun_kp->nama, ['class' => 'form-control', 'required' => 'required']) !!}
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-12">
                                    <label>Waktu Buka</label>
                                    {!! Form::date('waktu_buka', $periode_daftar_turun_kp->waktu_buka, ['class' => 'form-control', 'required' => 'required']) !!}
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-12">
                                    <label>Waktu Tutup</label>
                                    {!! Form::date('waktu_tutup', $periode_daftar_turun_kp->waktu_tutup, ['class' => 'form-control', 'required' => 'required']) !!}
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-12">
                                    <label>Semester</label>
                                    {!! Form::select('id_semester', $daftar_semester, $periode_daftar_turun_kp->id_semester, ['class' => 'custom-select', 'placeholder' => 'Daftar Semester', 'required' => 'required']) !!}
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary btn-sm btn-block"><span class="fa fa-paper-plane"></span> Submit</button>
                                </div>
                            </div>

                        {!! Form::close() !!}
                    </div>

                </div>
@stop
