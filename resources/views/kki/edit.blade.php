@extends('layouts.master')

@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Inputs</h3>
                        </div>
                        <div class="panel-body">
                            <form action="/kki/{{$kki->id}}/update" method="POST" enctype="multipart/form-data">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nama Depan</label>
                                    <input name="no_pegawai" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Depan" value="{{$kki->no_pegawai}}">

                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nama Belakang</label>
                                    <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Belakang" value="{{$kki->nama}}">

                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Jabatan</label>
                                    <input name="jabatan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Jabatan" value="{{$kki->jabatan}}">

                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Pilih Jenis Kelamin</label>
                                    <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
                                        <option value="L" @if($kki->jenis_kelamin == 'L') selected @endif>Laki-Laki</option>
                                        <option value="P" @if($kki->jenis_kelamin == 'P') selected @endif>Perempuan</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Agama</label>
                                    <input name="agama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Agama" value="{{$kki->agama}}">

                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Alamat</label>
                                    <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$kki->alamat}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Avatar</label>
                                    <input type="file" name="avatar" class="from-control">
                                </div>
                                <button type=" submit" class="btn btn-warning">Update</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@stop
@section('content1')
<h2>Edit data Kasus Kematian Ibu</h2>
@if(session('sukses'))
<div class="alert alert-success" role="alert">
    {{session('sukses')}}
</div>
@endif
<div class="row">
    <div class="col-lg-12">

    </div>
</div>
@endsection