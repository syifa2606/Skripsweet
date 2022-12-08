<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
  </div>
  <div class="card">
    <div class="card-header">
      Yayasan Pendidikan Syifauzzahra Pekalongan
    </div>
    <div class="card-body">
      <p class="card-text">(SIPP) Sistem Informasi Presensi dan Penggajian, Aplikasi ini diharapkan dapat menghasilkan ketepatan data dalam hal presensi ketidakhadiran (hadir, izin atau sakit), membantu pekerjaan tata usaha yayasan dalam menangani prihal administrasi pegawai khususnya penggajian dan membantu ketua yayasan dalam memonitoring presensi pegawai setiap bulannya..</p>
      <a href="#" class="btn btn-primary">Profil Yayasan</a>
    </div>
  </div>
  <br>

  <!-- Content Row -->
  <div class="row">
    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Pegawai</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $pegawai; ?></div>
            </div>
            <div class="col-auto">
              <i class="fas fa-users fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Admin</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $admin; ?></div>
            </div>
            <div class="col-auto">
              <i class="fas fa-user-cog fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Jabatan</div>
              <div class="row no-gutters align-items-center">
                <div class="col-auto">
                  <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">1</div>
                </div>
              </div>
            </div>
            <div class="col-auto">
              <i class="fas fa-briefcase fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Pending Requests Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Absensi</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
            </div>
            <div class="col-auto">
              <i class="fas fa-comments fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Content Row -->
  <div class="row">
    <div class="col-md-12">
      <div class="alert alert-info" role="alert"><i class="fas fa-info-circle"></i> Selamat Datang, Anda sedang login sebagai Admin.</div>

    </div>
    <!-- /.container-fluid -->

  </div>
  <!-- End of Main Content -->