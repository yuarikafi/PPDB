<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title> Admin</title>
  <!-- base:css -->
  <link rel="stylesheet" href="../vendors/typicons/typicons.css">
  <link rel="stylesheet" href="../vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../galatama.jfif" />
</head>
<body>
  <div class="row" id="proBanner">
    <div class="col-12">
         <i class="typcn typcn-delete-outline" id="bannerClose"></i>
      </span>
    </div>
  </div>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="navbar-brand-wrapper d-flex justify-content-center">
        <div class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100">
        <P></P>
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="typcn typcn-th-menu"></span>
          </button>
        </div>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <ul class="navbar-nav mr-lg-2">
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link" href="#" data-toggle="dropdown" id="profileDropdown">
              <img src="petrik.jpg" alt="profile"/>
              <span class="nav-profile-name">PIKA</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item">
                <i class="typcn typcn-cog-outline text-primary"></i>
                Settings
              </a>
              <a class="dropdown-item">
                <i class="typcn typcn-eject text-primary"></i>
                Logout
              </a>
            </div>
          </li>
          <li class="nav-item nav-user-status dropdown">
              <p class="mb-0">recently</p>
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item nav-date dropdown">
            <a class="nav-link d-flex justify-content-center align-items-center" href="../javascript:;">
              <h6 class="date mb-0">Today : mei 10</h6>
              <i class="typcn typcn-calendar"></i>
            </a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator dropdown-toggle d-flex justify-content-center align-items-center" id="messageDropdown" href="#" data-toggle="dropdown">
              <i class="typcn typcn-cog-outline mx-0"></i>
              <span class="count"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
              <p class="mb-0 font-weight-normal float-left dropdown-header">Messages</p>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                    <img src="images/faces/face4.jpg" alt="image" class="profile-pic">
                </div>
                <div class="preview-item-content flex-grow">
                  <h6 class="preview-subject ellipsis font-weight-normal">yuari kafi
                  </h6>
                  <p class="font-weight-light small-text text-muted mb-0">
                    jangan luupa sholat
                  </p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                    <img src="images/faces/face2.jpg" alt="image" class="profile-pic">
                </div>
                <div class="preview-item-content flex-grow">
                  <h6 class="preview-subject ellipsis font-weight-normal">drew
                  </h6>
                  <p class="font-weight-light small-text text-muted mb-0">
                    ml peting ri
                  </p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                    <img src="images/faces/face3.jpg" alt="image" class="profile-pic">
                </div>
                <div class="preview-item-content flex-grow">
                  <h6 class="preview-subject ellipsis font-weight-normal"> pikapi
                  </h6>
                  <p class="font-weight-light small-text text-muted mb-0">
                    Upcoming board meeting
                  </p>
                </div>
              </a>
            </div>
          </li>
          <li class="nav-item dropdown mr-0">
            <a class="nav-link count-indicator dropdown-toggle d-flex align-items-center justify-content-center" id="notificationDropdown" href="#" data-toggle="dropdown">
              <i class="typcn typcn-bell mx-0"></i>
              <span class="count"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
              <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-success">
                    <i class="typcn typcn-info mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-normal">Application Error</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    Just now
                  </p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-warning">
                    <i class="typcn typcn-cog-outline mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-normal">Settings</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    Private message
                  </p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-info">
                    <i class="typcn typcn-user mx-0"></i> 
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-normal">New user registration</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    2 days ago
                  </p>
                </div>
              </a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="typcn typcn-th-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <nav class="navbar-breadcrumb col-xl-12 col-12 d-flex flex-row p-0">
      <div class="navbar-links-wrapper d-flex align-items-stretch">
        <div class="nav-link">
          <a href="../javascript:;"><i class="typcn typcn-calendar-outline"></i></a>
        </div>
        <div class="nav-link">
          <a href="../javascript:;"><i class="typcn typcn-mail"></i></a>
        </div>
        <div class="nav-link">
          <a href="../javascript:;"><i class="typcn typcn-folder"></i></a>
        </div>
        <div class="nav-link">
          <a href="../javascript:;"><i class="typcn typcn-document-text"></i></a>
        </div>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <ul class="navbar-nav mr-lg-2">
          <li class="nav-item ml-0">
            <h4 class="mb-0">Dashboard</h4>
          </li>
          <li class="nav-item">
            <div class="d-flex align-items-baseline">
              <p class="mb-0">Home</p>
              <i class="typcn typcn-chevron-right"></i>
              <p class="mb-0">Main Dahboard</p>
            </div>
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item nav-search d-none d-md-block mr-0">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search..." aria-label="search" aria-describedby="search">
              <div class="input-group-prepend">
                <span class="input-group-text" id="search">
                  <i class="typcn typcn-zoom"></i>
                </span>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </nav>
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      <div class="theme-setting-wrapper">
        <div id="settings-trigger"><i class="typcn typcn-cog-outline"></i></div>
        <div id="theme-settings" class="settings-panel">
          <i class="settings-close typcn typcn-times"></i>
          <p class="settings-heading">SIDEBAR SKINS</p>
          <div class="sidebar-bg-options selected" id="sidebar-light-theme"><div class="img-ss rounded-circle bg-light border mr-3"></div>Light</div>
          <div class="sidebar-bg-options" id="sidebar-dark-theme"><div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark</div>
          <p class="settings-heading mt-2">HEADER SKINS</p>
          <div class="color-tiles mx-0 px-4">
            <div class="tiles success"></div>
            <div class="tiles warning"></div>
            <div class="tiles danger"></div>
            <div class="tiles info"></div>
            <div class="tiles dark"></div>
            <div class="tiles default"></div>
          </div>
        </div>
      </div>
      <div id="right-sidebar" class="settings-panel">
        <i class="settings-close typcn typcn-times"></i>
        <ul class="nav nav-tabs" id="setting-panel" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="todo-tab" data-toggle="tab" href="#todo-section" role="tab" aria-controls="todo-section" aria-expanded="true">TO DO LIST</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="chats-tab" data-toggle="tab" href="#chats-section" role="tab" aria-controls="chats-section">CHATS</a>
          </li>
        </ul>
        <div class="tab-content" id="setting-content">
          <div class="tab-pane fade show active scroll-wrapper" id="todo-section" role="tabpanel" aria-labelledby="todo-section">
            <div class="add-items d-flex px-3 mb-0">
              <form class="form w-100">
                <div class="form-group d-flex">
                  <input type="text" class="form-control todo-list-input" placeholder="Add To-do">
                  <button type="submit" class="add btn btn-primary todo-list-add-btn" id="add-task">Add</button>
                </div>
              </form>
            </div>
            <div class="list-wrapper px-3">
              <ul class="d-flex flex-column-reverse todo-list">
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Team review meeting at 3.00 PM
                    </label>
                  </div>
                  <i class="remove typcn typcn-delete-outline"></i>
                </li>
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Prepare for presentation
                    </label>
                  </div>
                  <i class="remove typcn typcn-delete-outline"></i>
                </li>
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Resolve all the low priority tickets due today
                    </label>
                  </div>
                  <i class="remove typcn typcn-delete-outline"></i>
                </li>
                <li class="completed">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox" checked>
                      Schedule meeting for next week
                    </label>
                  </div>
                  <i class="remove typcn typcn-delete-outline"></i>
                </li>
                <li class="completed">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox" checked>
                      Project review
                    </label>
                  </div>
                  <i class="remove typcn typcn-delete-outline"></i>
                </li>
              </ul>
            </div>
            <div class="events py-4 border-bottom px-3">
              <div class="wrapper d-flex mb-2">
                <i class="typcn typcn-media-record-outline text-primary mr-2"></i>
                <span>Feb 11 2018</span>
              </div>
              <p class="mb-0 font-weight-thin text-gray">Creating component page</p>
              <p class="text-gray mb-0">build a js based app</p>
            </div>
            <div class="events pt-4 px-3">
              <div class="wrapper d-flex mb-2">
                <i class="typcn typcn-media-record-outline text-primary mr-2"></i>
                <span>Feb 7 2018</span>
              </div>
              <p class="mb-0 font-weight-thin text-gray">Meeting with Alisa</p>
              <p class="text-gray mb-0 ">Call Sarah Graves</p>
            </div>
          </div>
          <!-- To do section tab ends -->
          <div class="tab-pane fade" id="chats-section" role="tabpanel" aria-labelledby="chats-section">
            <div class="d-flex align-items-center justify-content-between border-bottom">
              <p class="settings-heading border-top-0 mb-3 pl-3 pt-0 border-bottom-0 pb-0">Friends</p>
              <small class="settings-heading border-top-0 mb-3 pt-0 border-bottom-0 pb-0 pr-3 font-weight-normal">See All</small>
            </div>
            <ul class="chat-list">
              <li class="list active">
                <div class="profile"><img src="images/faces/face1.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Thomas Douglas</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">19 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="images/faces/face2.jpg" alt="image"><span class="offline"></span></div>
                <div class="info">
                  <div class="wrapper d-flex">
                    <p>Catherine</p>
                  </div>
                  <p>Away</p>
                </div>
                <div class="badge badge-success badge-pill my-auto mx-2">4</div>
                <small class="text-muted my-auto">23 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="images/faces/face3.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Daniel Russell</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">14 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="images/faces/face4.jpg" alt="image"><span class="offline"></span></div>
                <div class="info">
                  <p>James Richardson</p>
                  <p>Away</p>
                </div>
                <small class="text-muted my-auto">2 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="images/faces/face5.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Madeline Kennedy</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">5 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="images/faces/face6.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Sarah Graves</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">47 min</small>
              </li>
            </ul>
          </div>
          <!-- chat tab ends -->
        </div>
      </div>
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="../admin.php">
              <i class="typcn typcn-device-desktop menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="typcn typcn-document-text menu-icon"></i>
              <span class="menu-title">Data Master</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="../pages/registrasi.php">Registrasi</a></li>
                <li class="nav-item"> <a class="nav-link" href="../pages/input_gelombang.php">Input Gelombang</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
              <i class="typcn typcn-film menu-icon"></i>
              <span class="menu-title">Pendaftaran</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="form-elements">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="../pages/daftar_baru.php">Daftar Baru</a></li>
                <li class="nav-item"><a class="nav-link" href="../pages/data_siswa.php">Data Siswa</a></li>
                <li class="nav-item"><a class="nav-link" href="../pages/data_kaos.php">Data Kaos</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
              <i class="typcn typcn-chart-pie-outline menu-icon"></i>
              <span class="menu-title">Pembayaran</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="charts">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="../pages/transaksi.php">Transaksi</a></li>
                <li class="nav-item"> <a class="nav-link" href="../pages/data_pembayaran.php">Data Pembayaran</a></li>
              </ul>
            </div>
          </li>

            </a>
            <div class="collapse" id="error">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="../pages/samples/error-404.html"> 404 </a></li>
                <li class="nav-item"> <a class="nav-link" href="../pages/samples/error-500.html"> 500 </a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../admin.php">
              <i class="typcn typcn-mortar-board menu-icon"></i>
              <span class="menu-title">LOG OUT</span>
            </a>
          </li>
        </ul>
      </nav>
      <!-- partial -->
      
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title"> Data Pembayaran </h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="../admin.php">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Data Pembayaran</li>
              </ol>
            </nav>
          </div>
          <div class="row">
            <div class="col-lg-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-bordered" id="table" width="100%" cellspacing="0">
                      <thead style="background-color:yellow;">
                        <tr align="center">
                          <th> No Transaksi </th>
                          <th> Tanggal </th>
                          <th> Nama Siswa </th>
                          <th> Keterangan </th>
                          <th> Action </th>
                          <th> Cetak </th>
                        </tr>
                      </thead>
                      <?php
                        include ('../koneksi.php');                      
                        $query = "SELECT * FROM data_bayar ORDER BY no_pendaftaran asc";
                     
                      $result = mysqli_query($koneksi, $query);
                      if (!$result) {
                        die("query error: " . mysqli_error($koneksi) . "-" . mysqli_error($koneksi));
                      }

                      $no = 1;
                      while ($row = mysqli_fetch_assoc($result)) {
                        $edit_modal_id = "editModal" . $row['id'];// ID modal yang unik
                        $id = $row['id']; 
                      ?>
                        <tbody style="background-color: white;">
                          <td style="text-align: center;"><?php echo $row["no_pendaftaran"]; ?></td>
                          <td><?php echo $row["tanggal"]; ?></td>
                          <td><?php echo $row["nama_siswa"]; ?></td>
                          <td align="center"><?php if($row['keterangan'] == 'Lunas') {
                                                                echo '<div class = "badge badge-success" style="width: 70px;"> <b>Lunas</b> </div>';
                                                                }
                                                        ?>
                                                        <?php if($row['keterangan'] == 'Belum Lunas') {
                                                            echo '<div class = "badge badge-danger" style="width: 100px;"> <b>Belum Lunas</b> </div>';
                                                            }
                                                    ?>
                                          </td>
                          <td style="text-align: center;"> <button type="button" class="btn btn-warning mdi mdi-tooltip-edit" data-toggle="modal" style="font-size: 15px;" data-target="#<?php echo $edit_modal_id; ?>">edit</button></td>
                          <td style="text-align: center;"><button type="button" class="btn btn-primary" onclick="cetak(<?php echo $row['id']; ?>)">Cetak</button></td>
                          <script>
                            function cetak(id) {
                                window.location.href = '../cetak.php?id=' + id;
                                  }
                                    </script>





                          <div class="modal fade" id="<?php echo $edit_modal_id; ?>" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="editModalLabel">Edit Data</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                  <form class="needs-validation" action="proses/transaksi/pelunasan.php" method="post">
                                    <div class="row">
                                      <div class="col-md-6 mb-3">
                                        <label for="firstName">No Pendaftaran</label>
                                        <input type="text" class="form-control" style="color: black;" name="no_pendaftaran" id="firstName" placeholder="" value="<?php echo $row['no_pendaftaran']; ?>" required="" readonly>
                                        <div class="invalid-feedback">
                                          Valid first name is required.
                                        </div>
                                      </div>
                                      <div class="col-md-6 mb-3">
                                        <label for="lastName">Tanggal</label>

                                        <input type="text" class="form-control" name="tanggal" style="color: black;" id="lastName" placeholder="" value="<?php echo $row['tanggal']; ?>" required="" readonly>
                                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>" />
                                        <input type="hidden" name="ba" value="<?php echo $row['bayar']; ?>" />
                                        <div class="invalid-feedback">
                                          Valid last name is required.
                                        </div>
                                      </div>
                                      <div class="col-md-6 mb-3">
                                        <label for="firstName">Nama Siswa</label>
                                        <input type="text" class="form-control" style="color: black;" name="nama_siswa" id="firstName" placeholder="" value="<?php echo $row['nama_siswa'] ?>" required="" readonly>
                                        <input type="hidden" name="sisaba" id="sisa" value="<?php echo $row['sisa'];?>" >
                                        <div class="invalid-feedback">
                                          Valid first name is required.
                                        </div>
                                      </div>


                                      <div class="col-md-6 mb-3">
                                        <label for="nominal">Sisa Pembayaran</label>
                                        <input type="number" class="form-control sisa-pembayaran" id="nominal_<?php echo $row['id']; ?>" style="color: black;" name="nominal" placeholder="" value="" required="" readonly>
                                        <input type="hidden" class="sisa" data-nom="<?php echo $row['jumlah']; ?>" data-pem="<?php echo $row['bayar']; ?>">
                                        <div class="invalid-feedback">
                                          Valid first name is required.
                                        </div>
                                      </div>
                                      <div class="col-md-4 mb-3">
                                        <label for="bayar">Pembayaran</label>
                                        <input type="text" class="form-control bayar" id="bayar_<?php echo $row['id']; ?>" name="bayar" placeholder="" value="" required="">
                                        <div class="invalid-feedback">
                                          Valid first name is required.
                                        </div>
                                      </div>
                                      <div class="col-md-4 mb-3">
                                        <label for="kembalian">Kembalian</label>
                                        <input type="text" class="form-control kembalian" id="kembalian_<?php echo $row['id']; ?>" name="kembalian" placeholder="" value="<?php echo $row['kembalian'] ?>" required="">
                                        <div class="invalid-feedback">
                                          Valid first name is required.
                                        </div>
                                      </div>
                                      <div class="col-md-4 mb-3">
                                        <label for="firstName">Keterangan</label>
                                        <input type="text" class="form-control keterangan" id="keterangan_<?php echo $row['id']; ?>" name="keterangan" placeholder="" value="<?php echo $row['keterangan'] ?>" required="">
                                        <div class="invalid-feedback">
                                          Valid first name is required.
                                        </div>
                                      </div>


                                      <script>
                                        function hitungSisaPembayaran() {
                                          var sisaElements = document.querySelectorAll(".sisa");

                                          sisaElements.forEach(function(item) {
                                            var nom = parseFloat(item.getAttribute("data-nom"));
                                            var pem = parseFloat(item.getAttribute("data-pem"));

                                            var bali = nom - pem;

                                            if (bali < 0) {
                                              item.parentNode.querySelector(".sisa-pembayaran").value = "";
                                            } else {
                                              item.parentNode.querySelector(".sisa-pembayaran").value = bali.toFixed(2);
                                            }
                                          });
                                        }

                                        function hitungKembalian() {
                                          // Ambil elemen-elemen yang diperlukan
                                          var parent = this.closest('.modal-body');
                                          var sisaPembayaranElement = parent.querySelector(".sisa-pembayaran");
                                          var bayarElement = parent.querySelector(".bayar");
                                          var kembalianElement = parent.querySelector(".kembalian");
                                          var keteranganElement = parent.querySelector(".keterangan");

                                          // Periksa apakah elemen-elemen ditemukan
                                          if (!sisaPembayaranElement || !bayarElement || !kembalianElement || !keteranganElement) {
                                            console.error("One or more elements not found");
                                            return;
                                          }

                                          // Ambil nilai dari input
                                          var total_belanja = parseFloat(sisaPembayaranElement.value);
                                          var pembayaran = parseFloat(bayarElement.value);

                                          // Periksa apakah nilai-nilai valid
                                          if (isNaN(total_belanja) || isNaN(pembayaran)) {
                                            console.error("Invalid input values");
                                            return;
                                          }

                                          // Hitung kembalian
                                          var kembalian = pembayaran - total_belanja;

                                          // Update nilai kembalian dan keterangan
                                          if (kembalian < 0) {
                                            kembalianElement.value = '';
                                            keteranganElement.value = 'Belum Lunas';
                                          } else {
                                            kembalianElement.value = kembalian.toFixed(2);
                                            keteranganElement.value = 'Lunas';
                                          }
                                        }




                                        document.addEventListener("DOMContentLoaded", hitungSisaPembayaran);

                                        document.querySelectorAll('.bayar').forEach(item => {
                                          item.addEventListener('input', hitungKembalian);
                                        });

                                        document.querySelectorAll('.form-control').forEach(item => {
                                          item.addEventListener('input', hitungSisaPembayaran);
                                        });
                                      </script>





                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                      </div>
                                  </form>
                                </div>
                              </div>
                            </div>
                          </div>
                        </tbody>
                      <?php
                        $no++;
                      }
                      ?>

                    </table>
                  </div>

                </div>
              </div>
            </div>
          </div>
          <!-- TUTUP NAVBAR ISI -->


          <!-- partial:../../partials/_footer.html -->

          <!-- FOOTER -->
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © Reyz</span>
            </div>
          </footer>
          <!-- TUTUP FOOTER -->


          <!-- partial -->
        </div>
      </div>
      
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- base:js -->
  <script src="../vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="../vendors/chart.js/Chart.min.js"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="../js/off-canvas.js"></script>
  <script src="../js/hoverable-collapse.js"></script>
  <script src="../js/template.js"></script>
  <script src="../js/settings.js"></script>
  <script src="../js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="../js/dashboard.js"></script>
  <!-- End custom js for this page-->
</body>

</html>

