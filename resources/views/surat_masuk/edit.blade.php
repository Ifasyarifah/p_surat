@extends('layouts.master')
@section('menu')
@endsection
@section('content')
    <style>
        .avatar {
            background-color: #aaa;
            border-radius: 50%;
            color: #fff;
            display: inline-block;
            font-weight: 500;
            height: 38px;
            line-height: 38px;
            margin: -38px 10px 0 0;
            text-align: center;
            text-decoration: none;
            text-transform: uppercase;
            vertical-align: middle;
            width: 38px;
            position: relative;
            white-space: nowrap;
            z-index: 2;
        }
    </style>
    {{-- message --}}
    {!! Toastr::message() !!}
    <div class="page-wrapper">
        <div class="content container-fluid">
            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="page-title mt-5">Edit Surat Masuk</h3>
                    </div>
                </div>
            </div>
            <form action="{{ route('surat_masuk/edit') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row formtype">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Nomor Surat</label>
                                    <input class="form-control" type="text" name="nomor_suratM" value="{{ $editsuratM->nomor_suratM }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Perihal</label>
                                    <input class="form-control" type="text" name="perihal_m" value="{{ $editsuratM->perihal_m }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Nama Penerima</label>
                                    <input class="form-control" type="text" name="nama_penerima" value="{{ $editsuratM->nama_penerima }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Hari</label>
                                    <div class="cal-icon">
                                        <input type="text" class="form-control datetimepicker" name="hari_m" value="{{ $editsuratM->hari_m }}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Tanggal Surat</label>
                                    <div class="time-icon">
                                        <input type="text" class="form-control" id="datetimepicker3" name="tanggal_surat" value="{{ $editsuratM->tanggal_surat }}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Tempat</label>
                                    <div class="cal-icon">
                                        <input type="text" class="form-control datetimepicker" name="tempat" value="{{ $editsuratM->tempat }}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Acara</label>
                                    <div class="cal-icon">
                                        <input type="text" class="form-control datetimepicker" name="acara" value="{{ $editsuratM->acara }}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Pakaian</label>
                                    <input type="text" class="form-control"  name="pakaian" value="{{ $editsuratM->pakaian }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Catatan</label>
                                    <input type="text" class="form-control" name="catatan" value="{{ $editsuratM->catatan }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>File Upload</label>
                                    <div class="custom-file mb-3">
                                        <input type="file" class="custom-file-input" id="customFile" name="fileupload">
                                        <input type="hidden" class="form-control" name="hidden_fileupload" value="{{ $editsuratM->file }}">
                                        <a href="profile.html" class="avatar avatar-sm mr-2">
                                            <img class="avatar-img rounded-circle" src="{{ URL::to('/assets/upload/'.$editsuratM->file) }}" alt="{{ $editsuratM->file }}">
                                        </a>
                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Message</label>
                                    <textarea class="form-control" rows="1.5" id="message" name="message">{{ $editsuratM->message }}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary buttonedit">Update</button>
            </form>
        </div>
    </div>
    @section('script')
    <script>
        $(function() {
            $('#datetimepicker3').datetimepicker({
                format: 'LT'
            });
        });
        </script>
    @endsection
@endsection