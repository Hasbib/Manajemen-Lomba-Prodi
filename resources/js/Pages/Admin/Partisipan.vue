<template>
    <!--wrapper-->
    <div class="wrapper">
        <!--sidebar wrapper -->
        <div class="sidebar-wrapper" data-simplebar="true">
            <div class="sidebar-header">
                <div>
                    <a href="/">
                        <img src="../../../../public/bootstrap/images/logocb.png" class="logo-icon" alt="logo icon">
                    </a>
                </div>
                <div class="toggle-icon ms-auto"><i class="fadeIn animated bx bx-menu"></i>
                </div>
            </div>
            <!--navigation-->
            <ul class="metismenu" id="menu">
                <li>
                    <a href="/index2">
                        <div class="parent-icon"><i class='bx bx-home-circle'></i>
                        </div>
                        <div class="menu-title">Dashboard</div>
                    </a>
                </li>
                <li>
                    <a href="javascript:;" class="has-arrow">
                        <div class="parent-icon"><i class="fadeIn animated bx bx-plus-circle"></i>
                        </div>
                        <div class="menu-title">Event</div>
                    </a>
                    <ul>
                        <li class="jarak-dropdown"> <a href="/lomba">Lomba</a>
                        </li>
                        <li class="jarak-dropdown"> <a href="/administrator">Administrator</a>
                        </li>
                        <li class="jarak-dropdown"> <a href="/sponsor">Sponsor</a>
                        </li>
                        <li class="jarak-dropdown"> <a href="/berita">Berita</a>
                        </li>
                        <li class="jarak-dropdown"> <a href="/setting">Setting</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="/tim">
                        <div class="parent-icon"><i class="fadeIn animated lni lni-users"></i>
                        </div>
                        <div class="menu-title">Tim</div>
                    </a>
                </li>
                <li>
                    <a href="/partisipan">
                        <div class="parent-icon"><i class="fadeIn animated bx bx-user-circle c-font25"></i>
                        </div>
                        <div class="menu-title">Partisipan</div>
                    </a>
                </li>
                <li>
                    <a href="/pesan">
                        <div class="parent-icon"><i class="fadeIn animated bx bx-comment-detail"></i>
                        </div>
                        <div class="menu-title">Pesan <span class="alert-count">1</span></div>
                    </a>
                </li>
                <li>
                    <a href="/rangking">
                        <div class="parent-icon"><i class="fadeIn animated bx bx-trophy"></i>
                        </div>
                        <div class="menu-title">Rangking</div>
                    </a>
                </li>
                <li>
                    <a href="/">
                        <div class="parent-icon"><i class="fadeIn animated bx bx-log-out"></i>
                        </div>
                        <div class="menu-title">Logout</div>
                    </a>
                </li>
                <li>
                    <a href="javascript:;" class="has-arrow">
                        <div class="parent-icon"><i class="fadeIn animated bx bx-plus-circle"></i>
                        </div>
                        <div class="menu-title">SEMENTARA</div>
                    </a>
                    <ul>
                        <li class="jarak-dropdown"> <a href="/dashboardjuri">JURI</a>
                        </li>
                        <li class="jarak-dropdown"> <a href="/dashboardpetugas">PETUGAS</a>
                        </li>
                        <li class="jarak-dropdown"> <a href="/overviewpeserta">PESERTA</a>
                        </li>
                        <li class="jarak-dropdown"> <a href="/index2">ADMIN</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!--end navigation-->
        </div>
        <!--end sidebar wrapper -->
        <!--start header -->
        <header>
            <div class="topbar d-flex align-items-center">
                <nav class="navbar navbar-expand">
                    <div class="mobile-toggle-menu"><i class='bx bx-menu'></i>
                    </div>
                    <div class="search-bar flex-grow-1">
                    </div>
                    <div class="top-menu ms-auto">
                        <ul class="navbar-nav align-items-center">
                            <div class="user-info ps-3">
                                <p class="user-name mb-0">Habib Shohiburrotib</p>
                                <p class="user-role">habib</p>
                            </div>
                            <div class="parent-icon posisi-icon"><i class="bx bx-user-circle c-font48"></i>
                            </div>
                            <li class="nav-item dropdown dropdown-large">
                                <div class="dropdown-menu dropdown-menu-end">
                                    <div class="header-notifications-list">
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item dropdown dropdown-large">
                                <div class="dropdown-menu dropdown-menu-end">
                                    <div class="header-message-list">
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>
        <!--end header -->
        <!--start page wrapper -->
        <div class="page-wrapper">
            <div class="page-content">
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item">
                            </li>
                        </ol>
                    </nav>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h4 class="mb-0 jarak-top-kurang5">Tabel Partisipan</h4>
                        <hr class="c-mt10" />
                        <button class="btn btn-primary btn-float-right" id="exportExcel">Export Excel</button>
                        <label class="jarak-filterstatus">Filter by Status</label>
                        <select class="form-select2">
                            <option selected>Semua</option>
                            <option>Verified</option>
                            <option>Unverified</option>
                        </select>
                        <br><br>
                        <div class="table-responsive">
                            <table id="example2" class="table table-bordered">
                                <thead class="table-dark">
                                    <tr>
                                        <th>ID</th>
                                        <th>Nama</th>
                                        <th>Username</th>
                                        <th>Instansi</th>
                                        <th>Email</th>
                                        <th>Status</th>
                                        <th class="crud-width100">Tanggal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Lionel Andres </td>
                                        <td>leon</td>
                                        <td>Universitas</td>
                                        <td>goat@gmail.com</td>
                                        <td>Verified</td>
                                        <td>January 26, 2024</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Cristiano Ikhsan </td>
                                        <td>cris</td>
                                        <td>Universitas</td>
                                        <td>goat@gmail.com</td>
                                        <td>Unverified</td>
                                        <td>January 26, 2024</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Agus Setiawan</td>
                                        <td>agus123</td>
                                        <td>Universitas</td>
                                        <td>agus.setiawan@example.com</td>
                                        <td>Verified</td>
                                        <td>February 10, 2024</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Siti Rahayu</td>
                                        <td>siti12</td>
                                        <td>Universitas</td>
                                        <td>siti.rahayu@example.com</td>
                                        <td>Unverified</td>
                                        <td>February 15, 2024</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Joko Susilo</td>
                                        <td>joko_sus</td>
                                        <td>Universitas</td>
                                        <td>joko.susilo@example.com</td>
                                        <td>Verified</td>
                                        <td>February 20, 2024</td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>Rina Fitriani</td>
                                        <td>rina_fi</td>
                                        <td>Universitas</td>
                                        <td>rina.fitriani@example.com</td>
                                        <td>Unverified</td>
                                        <td>February 25, 2024</td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>Adi Pratama</td>
                                        <td>adi11</td>
                                        <td>Universitas</td>
                                        <td>adi.pratama@example.com</td>
                                        <td>Verified</td>
                                        <td>March 5, 2024</td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td>Dewi Indah</td>
                                        <td>dewi_22</td>
                                        <td>Universitas</td>
                                        <td>dewi.indah@example.com</td>
                                        <td>Unverified</td>
                                        <td>March 10, 2024</td>
                                    </tr>
                                    <tr>
                                        <td>9</td>
                                        <td>Budi Santoso</td>
                                        <td>budi_s</td>
                                        <td>Universitas</td>
                                        <td>budi.santoso@example.com</td>
                                        <td>Verified</td>
                                        <td>March 15, 2024</td>
                                    </tr>
                                    <tr>
                                        <td>10</td>
                                        <td>Putri Wulandari</td>
                                        <td>putri_w</td>
                                        <td>Universitas Indonesia</td>
                                        <td>putri.wulandari@example.com</td>
                                        <td>Unverified</td>
                                        <td>March 20, 2024</td>
                                    </tr>
                                    <tr>
                                        <td>11</td>
                                        <td>Rizki Pratama</td>
                                        <td>rizki_p</td>
                                        <td>Universitas</td>
                                        <td>rizki.pratama@example.com</td>
                                        <td>Verified</td>
                                        <td>March 25, 2024</td>
                                    </tr>
                                    <tr>
                                        <td>12</td>
                                        <td>Yuli Susanti</td>
                                        <td>yuli_s</td>
                                        <td>Universitas</td>
                                        <td>yuli.susanti@example.com</td>
                                        <td>Unverified</td>
                                        <td>March 30, 2024</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!--end row-->
            </div>
        </div>
        <!--end page wrapper -->
    </div>
    <!--end wrapper-->
</template>
<script>
$(document).ready(function () {
    var table = $('#example2').DataTable({
        lengthChange: false,
        buttons: ['excel']
    });

    table.buttons().container().appendTo('.export-buttons');

    // Export Excel
    $('#exportExcel').on('click', function () {
        table.buttons('.buttons-excel').trigger();
    });

    // Export PDF
    $('#exportPdf').on('click', function () {
        table.buttons('.buttons-pdf').trigger();
    });
});
</script>