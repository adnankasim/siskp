@extends('template')
@section('main')
                @include('errors.form_error')

                <div class="card mb-3">
                    <div class="card-header bg-primary d-flex justify-content-between align-items-center">
                        <strong class="bg-primary text-light">Input Pendaftar Turun KP By Admin</strong>
                        
                        <a class="text-white d-none d-lg-inline" href="{{ url()->previous() }}">
                            <span class="fa fa-arrow-left"></span> <span class="">Kembali</span>
                        </a>
                    </div>

                    <div class="card-body border-bottom py-2">
                        {!! Form::open(['url' => 'pendaftaran/turun-kp/input-by-admin']) !!}
                            {{ csrf_field() }}
                            {!! Form::hidden('id_periode_daftar_turun_kp', $periode->id) !!}
                            
                            <div class="form-row">
                                <div class="form-group col-12">
                                    <label>Mahasiswa</label>
                                    {!! Form::select('id_mahasiswa', $daftar_mahasiswa, old('id_mahasiswa'), ['class' => 'form-control mahasiswa', 'placeholder' => 'Mahasiswa yang Kontrak KP', 'style' => 'width:100%', 'required' => 'required']) !!}
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-12">
                                    <label>Nama Instansi</label>
                                    {!! Form::text('instansi', null, ['class' => 'form-control', 'required' => 'required']) !!}
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-12">
                                    <label>Alamat Instansi</label>
                                    {!! Form::textarea('alamat', null, ['class' => 'form-control', 'style' => 'height:80px', 'required' => 'required']) !!}
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
