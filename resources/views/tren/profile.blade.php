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
						
						<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
							Tambah Data
							</button>
						<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">{{$tren->trenket}}</h3>
								</div>
								<div class="panel-body">
									<table class="table table-striped">
										<thead>
											<tr>
												<th>TAHUN</th>
												<th>TOTAL KASUS</th>
												<th>AKSI</th>
												
											</tr>
										</thead>
										<tbody>
											@foreach($tren->kasus as $kasus)
											<tr>
												<td>{{$kasus->tahunn}}</td>
												<td><a href="#" class="jumlah" data-type="text" data-pk="{{$kasus->id}}" data-url="/api/tren/{{$kasus->id}}/editjumlah" data-title="Masukkan data">{{$kasus->pivot->jumlah}}</a></td>
												<td> <a href="/tren/{{$tren->id}}/{{$kasus->id}}/deletejumlah" class="btn btn-danger btn-sm" onclick=" return confirm('Yakin mau dihapus ?')">Delete</a></td>
											</tr>
											@endforeach
										</tbody>
									</table>
								</div>
							</div>
								<!-- END TABBED CONTENT -->
							<div class="panel">
								<div id="chartJumlah">
									
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>

		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Yambah Data</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
				<form action="/tren/{{$tren->id}}/addjumlah" method="POST">
					{{csrf_field()}}
					<div class="form-group">
						<label for="kasus">Tahun</label>
						<select class="form-control" id="kasus" name="kasus">
						@foreach($kasustahun as $kt)
							<option value="{{$kt->id}}">{{$kt->tahunn}}</option>
						@endforeach
						</select>
					</div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Jumlah</label>
                        <input name="jumlah" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Jumlah">

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
	Highcharts.chart('chartJumlah', {
    chart: {
        type: 'line'
    },
    title: {
        text: '{{$tren->trenket}}'
    },
    xAxis: {
        categories: {!!json_encode($categories)!!},
        crosshair: true
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Jumlah'
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
        name: 'Jumlah',
		color: 'rgba(186,60,61,.9)',
        data: {!!json_encode($data)!!}

     }]
});

$(document).ready(function() {
    $('.jumlah').editable();
});
</script>
@stop
