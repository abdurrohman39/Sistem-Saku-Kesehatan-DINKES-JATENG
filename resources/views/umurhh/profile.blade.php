@extends('layouts.master')

@section('header')
<link href="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet"/>
@stop


@section('content')
<div class="main">


    <!-- MAIN CONTENT -->
    <div class="main-content">
        <div class="container-fluid">
            @if(session('sukses'))
            <div class="alert alert-success" role="alert">
                {{session('sukses')}}
            </div>
            @endif

            @if(session('error'))
            <div class="alert alert-danger" role="alert">
                {{session('error')}}
            </div>
            @endif
            <div class="panel panel-profile">
                <div class="clearfix">
                <div class="panel">
                        <div id="chartAngka"></div>
                    </div>
                    <!-- TABBED CONTENT -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        Tambah Data
                    </button>
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">{{$umurhh->kategori}}</h3>
                            <h3 class="panel-title">JATENG = {{$umurhh->jumlah}}</h3>
                        </div>
                        <div class="panel-body">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>KAB/KOTA</th>
                                        <th>ANGKA</th>
                                        <th>AKSI</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($umurhh->kota as $kota)
                                    <tr>
                                        <td>{{$kota->wilayah}}</td>
                                        <td><a href="#" class="angka" data-type="text" data-pk="{{$kota->id}}" data-url="/api/umurhh/{{$umurhh->id}}/editangka" data-title="Masukan angka ">{{$kota->pivot->angka}}</a></td>
                                        <td><a href="/umurhh/{{$umurhh->id}}/{{$kota->id}}/deletangka" class="btn btn-danger btn-sm" onclick=" return confirm('Yakin mau dihapus ?')">Delete</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                   
                    <!-- END TABBED CONTENT -->

                    <!-- END RIGHT COLUMN -->
                </div>
            </div>
        </div>
    </div>
    <!-- END MAIN CONTENT -->
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/umurhh/{{$umurhh->id}}/addangka" method="POST">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="kota">Kota / Kabupaten</label>
                        <select class="form-control" id="kota" name="kota">
                            @foreach($kotakabupaten as $mp)
                            <option value="{{$mp->id}}">{{$mp->wilayah}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Angka</label>
                        <input name="angka" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Angka">

                    </div>

            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>
@stop

@section('footer')
<script src="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/js/bootstrap-editable.min.js"></script>
<script src="https://code.highcharts.com/highcharts.js"></script>

<script>
    Highcharts.chart('chartAngka', {
        chart: {
            type: 'column'
        },
        title: {
            text: '{{$umurhh->kategori}}'
        },

        xAxis: {
            categories: {!!json_encode($categories)!!},
            crosshair: true
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Angka'
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: [{
            name: 'Angka',
            data: {!!json_encode($data)!!}
        }]
    });

    $(document).ready(function() {
    $('.angka').editable();
    });
</script>
@stop

