@extends('layouts.master')

@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Umur Harapan Hidup</h3>
                            <div class="right">

                                <button type="button" class="btn" data-toggle="modal" data-target="#exampleModal"><i class=" lnr lnr-plus-circle"></i></button>

                            </div>

                        </div>
                        <div class="panel-body">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>KATEGORI</th>
                                        <th>JUMLAH</th>
                                        <th>AKSI</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($umurhh as $umurhh)
                                    <tr>
                                        <td><a href="/umurhh/{{$umurhh->id}}/profile"> {{$umurhh->kategori}}</a></td>
                                        <td><a href="/umurhh/{{$umurhh->id}}/profile"> {{$umurhh->jumlah}}</a></td>
                                        <td><a href="/umurhh/{{$umurhh->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                                            <a href="/umurhh/{{$umurhh->id}}/delete" class="btn btn-danger btn-sm" onclick=" return confirm('Yakin mau dihapus ?')">Delete</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="panel">
                            <div id="chartData"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/umurhh/create" method="POST">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="exampleInputEmail1">Kategori</label>
                        <input name="kategori" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Kategori">

                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Jumlah</label>
                        <input name="jumlah" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Jumlah">

                    </div>



            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
    @stop