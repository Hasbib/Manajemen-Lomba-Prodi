<template>
    <!--wrapper-->
    <div class="wrapper">
        <!--sidebar wrapper -->
        <div class="sidebar-wrapper" data-simplebar="true">
            <div class="sidebar-header">
                <div>
                    <a href="/">
                        <img src="../../../../../public/bootstrap/images/logocb.png" class="logo-icon" alt="logo icon">
                    </a>
                </div>
                <div class="toggle-icon ms-auto"><i class="fadeIn animated bx bx-menu"></i>
                </div>
            </div>
            <!--navigation-->
            <ul class="metismenu" id="menu">
                <li>
                    <a href="/dashboardjuri">
                        <div class="parent-icon"><i class='bx bx-home-circle'></i>
                        </div>
                        <div class="menu-title">Dashboard</div>
                    </a>
                </li>
                <li>
                    <a href="/lombajuri">
                        <div class="parent-icon"><i class="bx bx-award"></i>
                        </div>
                        <div class="menu-title">Lomba</div>
                    </a>
                </li>
                <li>
                    <a href="/rangkingjuri">
                        <div class="parent-icon"><i class="fadeIn animated bx bx-trophy"></i>
                        </div>
                        <div class="menu-title">Rangking</div>
                    </a>
                </li>
                <li>
                    <a href="/">
                        <div class="parent-icon"><i class="fadeIn animated bx bx-log-out"></i>
                        </div>
                        <div class="menu-title">Keluar</div>
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
                                <p class="user-name mb-0">Juri</p>
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
                        <h4 class="mb-0 jarak-top-kurang5">Tabel Karya</h4>
                        <<<<<<< HEAD <hr class="c-mt10" />
                        <label class="jarak-filterstatus">Filter by Status</label>
                        <select class="form-select2">
                            <option selected>Semua</option>
                            <option>Belum Dibaca</option>
                            <option>Sudah Dibaca</option>
                        </select>
                        <br><br>
                        <div class="table-responsive">
                            <table id="example" class="table table-bordered">
                                <thead class="table-dark">
                                    <tr>
                                        <th class="width-id">ID</th>
                                        <th class="crud-width-150">Nama Tim</th>
                                        <th class="crud-width-150">Judul</th>
                                        <th class="crud-width100">File</th>
                                        <th class="crud-width100">Link</th>
                                        <th class="crud-width-150">Instansi</th>
                                        <th class="crud-width100">Status</th>
                                        <th class="crud-width-290">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Tim Design</td>
                                        <td>Platform Pendidikan Interaktif</td>
                                        <td></td>
                                        <td></td>
                                        <td>Universitas</td>
                                        <td>Belum Nilai</td>
                                        <td class="btn-crud-af">
                                            <button class="btn btn-secondary"
                                                onclick="window.location.href='/timdetailjuri'"><i
                                                    class="bi bi-eye"></i></button>
                                            <button class="btn btn-primary" onclick="window.location.href='/nilai'"><i
                                                    class="bi bi-pencil-square"></i></button>
                                            <button class="btn btn-primary" onclick="window.location.href='/nilai'">Beri
                                                Nilai</button>
                                            <hr class="c-mt10" />
                                            <label class="jarak-filterstatus">Filter by Status</label>
                                            <select class="form-select2">
                                                <option selected>Semua</option>
                                                <option>Belum Dibaca</option>
                                                <option>Sudah Dibaca</option>
                                            </select>
                                            <br><br>
                                            <div class="table-responsive">
                                                <table id="example" class="table table-bordered">
                                                    <thead class="table-dark">
                                                        <tr>
                                                            <th class="width-id">ID</th>
                                                            <th class="crud-width-150">Nama Tim</th>
                                                            <th class="crud-width-150">Judul</th>
                                                            <th class="crud-width100">File</th>
                                                            <th class="crud-width100">Link</th>
                                                            <th class="crud-width-150">Instansi</th>
                                                            <th class="crud-width100">Status</th>
                                                            <th class="crud-width-290">Aksi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>Tim Design</td>
                                                            <td>Platform Pendidikan Interaktif</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td>Universitas</td>
                                                            <td>Belum Nilai</td>
                                                            <td class="btn-crud-af">
                                                                <button class="btn btn-secondary"
                                                                    onclick="window.location.href='/timdetailjuri'"><i
                                                                        class="bi bi-eye"></i></button>
                                                                <button class="btn btn-primary"
                                                                    onclick="window.location.href='/nilai'"><i
                                                                        class="bi bi-pencil-square"></i></button>
                                                                <button class="btn btn-primary"
                                                                    onclick="window.location.href='/nilai'">Beri
                                                                    Nilai</button>
                                                                >>>>>>> 7b73b69453e3b7b55e500b877e5705221dd8bd3b
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!--end row-->
                </div>
            </div>
            <!--end page wrapper -->
        </div>
    </div>
</template>
