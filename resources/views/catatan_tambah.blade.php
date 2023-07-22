@extends('layouts.app')
@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<div class="container">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <div class="card">
                        <div class="card-header text-center">
                            Data Perjalanan Anda
                        </div>
                        <div class="card-body">
                            <form method="post" action="/catatan/store">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="">Id User</label>
                                    <input type="text" name="id_user" class="form-control-plaintext" readonly value="{{ Auth::user()->id }}">
                                    @if ($errors->has('id_user'))
                                    <div class="text-danger">
                                        {{ $errors->first('id_user') }}
                                    </div>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="">Tanggal</label>
                                    <input type="date" name="tanggal" class="form-control">
                                    @if ($errors->has('tanggal'))
                                    <div class="text-danger">
                                        {{ $errors->first('tanggal') }}
                                    </div>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="">Waktu</label>
                                    <input type="time" name="waktu" class="form-control">
                                    @if ($errors->has('waktu'))
                                    <div class="text-danger">
                                        {{ $errors->first('waktu') }}
                                    </div>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="">Lokasi</label>
                                    <input type="text" name="lokasi" class="form-control" placeholder="Lokasi Saat ini">
                                    @if ($errors->has('lokasi'))
                                    <div class="text-danger">
                                        {{ $errors->first('lokasi') }}
                                    </div>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="">Suhu</label>
                                    <input type="text" name="suhu" class="form-control" placeholder="Suhu Anda Saat ini">
                                    @if ($errors->has('suhu'))
                                    <div class="text-danger">
                                        {{ $errors->first('suhu') }}
                                    </div>
                                    @endif
                                </div>
                                <br />
                                <div class="form-group">
                                    <input type="submit" class="btn btn-success" value="Simpan">
                                    <a href="/home" class="btn btn-danger">Kembali</a>
                                </div>
                            </form>
                        </div>
                        <div class="card-footer text-center">
                            Lindungi Diri Anda dan Keluarga
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>            
@endsection