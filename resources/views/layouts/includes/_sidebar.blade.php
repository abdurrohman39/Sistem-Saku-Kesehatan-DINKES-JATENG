<div id="sidebar-nav" class="sidebar">
    <div class="sidebar-scroll">
        <nav>
            <ul class="nav">
                <li><a href="/dashboards" class="active"><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
                @if(auth()->user()->role == 'admin')
                <li><a href="/kki" class="active"><i class="lnr lnr-user"></i> <span>Pegawai</span></a></li>
                <li><a href="#subPages" data-toggle="collapse" class="active" aria-expanded="true"><i class="lnr lnr-file-empty"></i> <span>Derajat Kesehatan</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>

                    <div id="subPages" class="collapse in" aria-expanded="true" style="">
                        <ul class="nav">

                                <div id="subPages" class="collapse in" aria-expanded="true" style="">
                                    <ul class="nav">
                                        <li><a href="/umurhh" class=""><i class="lnr lnr-dice"></i><span>Kategori (UHH)</span></a></li>
                                        <li><a href="/umurhh/1/profile" class=""><i class="lnr lnr-chart-bars"></i><span>Kasus Kematian Ibu</span></a></li>
                                        <li><a href="/umurhh/2/profile" class=""><i class="lnr lnr-chart-bars"></i><span>Kasus Kematian Bayi</br>(0-1Th)</span></a></li>
                                        <li><a href="/umurhh/3/profile" class=""><i class="lnr lnr-chart-bars"></i><span>Kasus Kematian</br> Balita (0-5Th)</span></a></li>
                                        <li><a href="/umurhh/4/profile" class=""><i class="lnr lnr-chart-bars"></i><span>Kasus Balita Gizi Buruk (BB/TB)</span></a></li>
                                        <li><a href="/umurhh/5/profile" class=""><i class="lnr lnr-chart-bars"></i><span>Kesakitan DBD </br>(IR per 100.000 penuduk)</span> </a></li>
                                        <li><a href="/umurhh/5/profile" class=""><i class="lnr lnr-chart-bars"></i><span>Kesakitan Malaria </br>(API per 1.000 penduduk)</span> </a></li>
                                </div>
                        </ul>
                    </div>
                </li>

                <li><a href="#subPages2" data-toggle="collapse" class="active" aria-expanded="true"><i class="lnr lnr-file-empty"></i> <span>Derajat Kesehatan</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>

                    <div id="subPages2" class="collapse in" aria-expanded="true" style="">
                        <ul class="nav">

                                <div id="subPages" class="collapse in" aria-expanded="true" style="">
                                    <ul class="nav">
                                        <li><a href="/tren" class=""><i class="lnr lnr-dice"></i><span>Tren Kategori (UHH) </span></a></li>
                                        <li><a href="/tren/1/profile" class=""><i class="fa fa-line-chart"></i><span>Tren Kasus Kematian Ibu Di JATENG </span></a></li>
                                        <li><a href="/tren/2/profile" class=""><i class="fa fa-line-chart"></i><span>Tren Kasus Kematian Bayi</span></a></li>
                                        <li><a href="/tren/3/profile" class=""><i class="fa fa-line-chart"></i><span>Tren Kasus Kematian Balita</span></a></li>
                                        <li><a href="/tren/4/profile" class=""><i class="fa fa-line-chart"></i><span>Tren Kasus Balita Gizi Buruk (BB/TB)</span></a></li>
                                        <li><a href="/tren/5/profile" class=""><i class="fa fa-line-chart"></i><span>Tren Kasus Incidence Rate (IR) DBD</span></a></li>
                                    </div>
                        </ul>
                    </div>
                    </li>
                @endif
            </ul>
        </nav>
    </div>
</div>