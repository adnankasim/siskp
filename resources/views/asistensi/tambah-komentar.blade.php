@extends('template')
@section('main')
                @include('errors.form_error')

                <div class="card mb-3">
                    <div class="card-header bg-primary d-flex justify-content-between align-items-center">
                        <strong class="bg-primary text-light">Asistensi</strong>
                        
                        <a class="text-white d-none d-lg-inline" href="{{ url()->previous() }}">
                            <span class="fa fa-arrow-left"></span> <span class="">Kembali</span>
                        </a>
                    </div>

                    <div class="card-body border-bottom py-2">
                        {!! Form::open(['url' => 'asistensi/' . $asistensi->id . '/komentar', 'files' => true]) !!}
                            {{ csrf_field() }}
                            {!! Form::hidden('id_asistensi', $asistensi->id) !!}
                            
                            <div class="form-row">
                                <div class="form-group col-12">
                                    <label>Topik Bimbingan</label> <br>
                                    <label class="font-weight-bold">{{ $asistensi->topik_bimbingan }}</label>
                                </div>
                            </div>
                            
                            <div class="form-row">
                                <div class="form-group col-12">
                                    <label>Jenis</label> <br>
                                    <label class="font-weight-bold text-capitalize">{{ str_replace('-', ' ', $asistensi->jenis) }}</label>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-12">
                                    @if(Session::has('dosen'))
                                    <label>Nama & NIM</label> <br>
                                    <label class="font-weight-bold">{{ $asistensi->mahasiswa->nama }} ({{ $asistensi->mahasiswa->nim }})</label>
                                    @elseif(Session::has('mahasiswa'))
                                    <label>Pembimbing</label> <br>
                                    <label class="font-weight-bold">{{ $asistensi->dosen->nama }}</label>
                                    @endif
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-12">
                                    <label>Isi</label>
                                    {!! Form::textarea('isi', old('isi'), ['class' => 'form-control borang', 'style' => 'height:150px']) !!}
                                </div>
                            </div>
                            
                            <div class="form-row">
                                <div class="form-group col-12">
                                    <label>File (.pdf & max {{ $pengaturan->max_file_upload / 1024 }} Mb) (Opsional)</label>
                                    <div class="custom-file">
                                        <label class="custom-file-label" id="targetSatu"> Pilih File</label>
                                        {!! Form::file('file', ['class' => 'custom-file-input', 'id' => 'fileSatu']) !!}
                                    </div>
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
