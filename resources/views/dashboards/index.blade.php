@extends('layouts.master')

@section('content')
<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<!-- OVERVIEW -->
					<div class="panel panel-headline">
						<div class="panel-heading">
							<h3 class="panel-title">Aplikasi Saku Kesehatan </h3>
							<p class="panel-subtitle">TRIWULAN 3 TAHUN 2019</p>
						</div>
						<div class="panel-body">
							<div class="row">
								<div class="col-md-3">
									<div class="metric">
										<span class="icon"><i class="fa fa-file-text"></i></span>
										<p>
											<span class="number">6</span>
											<span class="title">Data</span>
										</p>
									</div>
								</div>
								<div class="col-md-3">
									<div class="metric">
										<span class="icon"><i class="fa fa-bar-chart"></i></span>
										<p>
											<span class="number">5</span>
											<span class="title">Grafik</span>
										</p>
									</div>
								</div>
								<div class="col-md-3">
									<div class="metric">
										<span class="icon"><i class="fa fa-file-text"></i></span>
										<p>
											<span class="number">5</span>
											<span class="title">Data Tren</span>
										</p>
									</div>
								</div>
								<div class="col-md-3">
									<div class="metric">
										<span class="icon"><i class="fa fa-line-chart"></i></span>
										<p>
											<span class="number">5</span>
											<span class="title">Tren Grafik</span>
										</p>
									</div>
								</div>
                            </div>
                            
							<div class="row">
                            <div class="col-md-6">
                                <div class="panel">
								<div id="chartAngka">
									
								</div>
                            </div>
                            </div>
                            <div class="col-md-6">
							<!-- MULTI CHARTS -->
							<div class="panel">
								<div id="chartJumlah">
									
								</div>
							</div>
							<!-- END MULTI CHARTS -->
						</div>
									<!--div id="headline-chart" class="ct-chart"><svg xmlns:ct="http://gionkunz.github.com/chartist-js/ct" width="100%" height="300" class="ct-chart-line" style="width: 100%; height: 300;"><g class="ct-grids"><line y1="265" y2="265" x1="50" x2="294.2083435058594" class="ct-grid ct-vertical"></line><line y1="229.28571428571428" y2="229.28571428571428" x1="50" x2="294.2083435058594" class="ct-grid ct-vertical"></line><line y1="193.57142857142856" y2="193.57142857142856" x1="50" x2="294.2083435058594" class="ct-grid ct-vertical"></line><line y1="157.85714285714286" y2="157.85714285714286" x1="50" x2="294.2083435058594" class="ct-grid ct-vertical"></line><line y1="122.14285714285714" y2="122.14285714285714" x1="50" x2="294.2083435058594" class="ct-grid ct-vertical"></line><line y1="86.42857142857142" y2="86.42857142857142" x1="50" x2="294.2083435058594" class="ct-grid ct-vertical"></line><line y1="50.71428571428572" y2="50.71428571428572" x1="50" x2="294.2083435058594" class="ct-grid ct-vertical"></line><line y1="15" y2="15" x1="50" x2="294.2083435058594" class="ct-grid ct-vertical"></line></g><g><g class="ct-series ct-series-a"><path d="M50,265L50,172.143L90.701,129.286L131.403,165L172.104,50.714L212.806,157.857L253.507,165L294.208,86.429L294.208,265Z" class="ct-area"></path></g><g class="ct-series ct-series-b"><path d="M50,265L50,236.429L90.701,157.857L131.403,207.857L172.104,93.571L212.806,129.286L253.507,65L294.208,22.143L294.208,265Z" class="ct-area"></path></g></g><g class="ct-labels"><foreignObject style="overflow: visible;" x="50" y="270" width="40.7013905843099" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 41px; height: 20px" xmlns="http://www.w3.org/2000/xmlns/">Mon</span></foreignObject><foreignObject style="overflow: visible;" x="90.7013905843099" y="270" width="40.7013905843099" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 41px; height: 20px" xmlns="http://www.w3.org/2000/xmlns/">Tue</span></foreignObject><foreignObject style="overflow: visible;" x="131.4027811686198" y="270" width="40.70139058430989" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 41px; height: 20px" xmlns="http://www.w3.org/2000/xmlns/">Wed</span></foreignObject><foreignObject style="overflow: visible;" x="172.1041717529297" y="270" width="40.701390584309905" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 41px; height: 20px" xmlns="http://www.w3.org/2000/xmlns/">Thu</span></foreignObject><foreignObject style="overflow: visible;" x="212.8055623372396" y="270" width="40.701390584309905" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 41px; height: 20px" xmlns="http://www.w3.org/2000/xmlns/">Fri</span></foreignObject><foreignObject style="overflow: visible;" x="253.5069529215495" y="270" width="40.70139058430988" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 41px; height: 20px" xmlns="http://www.w3.org/2000/xmlns/">Sat</span></foreignObject><foreignObject style="overflow: visible;" x="294.2083435058594" y="270" width="30" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 30px; height: 20px" xmlns="http://www.w3.org/2000/xmlns/">Sun</span></foreignObject><foreignObject style="overflow: visible;" y="229.28571428571428" x="10" height="35.714285714285715" width="30"><span class="ct-label ct-vertical ct-start" style="height: 36px; width: 30px" xmlns="http://www.w3.org/2000/xmlns/">10</span></foreignObject><foreignObject style="overflow: visible;" y="193.57142857142856" x="10" height="35.714285714285715" width="30"><span class="ct-label ct-vertical ct-start" style="height: 36px; width: 30px" xmlns="http://www.w3.org/2000/xmlns/">15</span></foreignObject><foreignObject style="overflow: visible;" y="157.85714285714283" x="10" height="35.71428571428571" width="30"><span class="ct-label ct-vertical ct-start" style="height: 36px; width: 30px" xmlns="http://www.w3.org/2000/xmlns/">20</span></foreignObject><foreignObject style="overflow: visible;" y="122.14285714285714" x="10" height="35.71428571428572" width="30"><span class="ct-label ct-vertical ct-start" style="height: 36px; width: 30px" xmlns="http://www.w3.org/2000/xmlns/">25</span></foreignObject><foreignObject style="overflow: visible;" y="86.42857142857142" x="10" height="35.71428571428572" width="30"><span class="ct-label ct-vertical ct-start" style="height: 36px; width: 30px" xmlns="http://www.w3.org/2000/xmlns/">30</span></foreignObject><foreignObject style="overflow: visible;" y="50.71428571428572" x="10" height="35.714285714285694" width="30"><span class="ct-label ct-vertical ct-start" style="height: 36px; width: 30px" xmlns="http://www.w3.org/2000/xmlns/">35</span></foreignObject><foreignObject style="overflow: visible;" y="15" x="10" height="35.71428571428572" width="30"><span class="ct-label ct-vertical ct-start" style="height: 36px; width: 30px" xmlns="http://www.w3.org/2000/xmlns/">40</span></foreignObject><foreignObject style="overflow: visible;" y="-15" x="10" height="30" width="30"><span class="ct-label ct-vertical ct-start" style="height: 30px; width: 30px" xmlns="http://www.w3.org/2000/xmlns/">45</span></foreignObject></g></svg></div>-->
								
								
							</div>
						</div>
					</div>
					<!-- END OVERVIEW -->
					<div class="row">
						
							<!-- RECENT PURCHASES -->
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Derajat Kesehatan</h3>
									<div class="right">
										<button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
										<button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button>
									</div>
								</div>
								<div class="panel-body no-padding">
									<table class="table table-striped">
										<thead>
											<tr>
												<th>Kategori</th>
												<th>Angka</th>
												<th>Kategori</th>
												<th>Angka</th>
												
											</tr>
										</thead>
										<tbody>
                                             <tr>
												<td><a href="/umurhh">Umur Harapan Hidup (UHH)</a></td>
												<td>74,18</td>
												<td>Jumlah Penduduk</td>
												<td>34.718.204</td>
											</tr>
											<tr>
												<td><a href="/umurhh/1/profile">Kasus Kematian Ibu</a></td>
												<td>331 Kasus</td>
												<td>Keberhasilan pengolahan TB Paru (% SR)</td>
												<td>74,00</td>
											</tr>
											<tr>
												<td><a href="umurhh/2/profile">Kasus Kematian Bayi (0-1Th)</a></td>
												<td>3.219 Kasus</td>
												<td>$Kasus HIV / AIDS</td>
												<td>1.938/989</td>
											</tr>
											<tr>
												<td><a href="umurhh/3/profile">Kasus Kematian Balita (0-5Th)</a></td>
												<td>3.732 Kasus</td>
												<td>Angka Penemuan Kasus Baru Kusta (/100.00 penduduk)</td>
												<td>2,2</td>											
											</tr>
											<tr>
												<td><a href="umurhh/4/profile">Kasus Balita Gizi Buruk (BB/TB)</a></td>
												<td>1.276 Kasus</td>
												<td>Penemuan Penderita Baru Kusta (PB/MB)</td>
												<td>77/689</td>	
											</tr>
											<tr>
												<td><a href="umurhh/5/profile">Kesakitan DBD (IR per 100.000 penduduk)</a></td>
												<td>24,67</td>
												<td>Non Polio AFP Rate</td>
												<td>2,19</td>
                                            </tr>
                                            <tr>
												<td><a href="#">Kesakitan Malaria (API per 100.000 penduduk)</a></td>
												<td>0,001 (336 Kasus)</td>
												<td></td>
												<td></td>
                                            </tr>
                                            <tr>
												<td><a href="#">Penemuan Kaasus TB Paru yang tercatat (CNR per 100.000 penduduk)</a></td>
												<td>41.088 Kasus</td>
												<td></td>
												<td></td>
												
											</tr>
										</tbody>
									</table>
								</div>
							
							</div>
							<!-- END RECENT PURCHASES -->
						
						
					</div>
				</div>
			</div>
			<!-- END MAIN CONTENT -->
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
        text: 'Kasus Kematian Ibu'
    },
    xAxis: {
        categories: [
            'KOTA MAGELANG',
            'KOTA SALATIGA',
            'KOTA SURAKARTA',
            'KOTA TEGAL',
            'SUKOHARJO',
            'KARANGANYAR',
            'SRAGEN',
            'TEMANGGUNG',
            'KOTA PEKALONGAN',
            'REMBANG',
            'KEBUMEN',
            'KAB. PEKALONGAN',
            'BANYUMAS',
            'KAB. MAGELANG',
            'PATI',
            'PURBALINGGA',
            'WONOSOBO',
            'WONOGIRI',
            'KUDUS',
            'KAB. SEMARANG',
            'BATANG',
            'PEMALANG',
            'PPURWOREJO',
            'BOYOLALI',
            'KLATEN',
            'BLORA',
            'KAB. TEGAL',
            'JEPARA',
            'DEMAK',
            'KENDAL',
            'CILACAP',
            'KOTA SEMARANG',
            'BANJARNEGARA',
            'BREBES',
            'GROBOGAN'
        ],
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
        data: [2, 2, 3, 3, 5, 5, 5, 5, 5, 6, 7, 7, 8, 8, 8, 9, 9, 9, 9, 9, 9, 9, 10, 10, 10, 10, 10, 11, 11, 11, 12, 15, 21, 26, 32]
    }]
});
</script>

<script>
Highcharts.chart('chartJumlah', {
    chart: {
        type: 'line'
    },
    title: {
        text: 'Tren Kasus Kematian Ibu Di JATENG'
    },
    xAxis: {
        categories: [
            '2014',	
            '2015',	
            '2016',	
            '2017',		
            '2018',
            '2019'
        ],
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
        data: [711, 619, 602, 475, 421, 331]
    }]
});
</script>
@stop