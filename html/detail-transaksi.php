<!DOCTYPE html>

<!-- =========================================================
* Sneat - Bootstrap 5 HTML Admin Template - Pro | v1.0.0
==============================================================

* Product Page: https://themeselection.com/products/sneat-bootstrap-html-admin-template/
* Created by: ThemeSelection
* License: You must have a valid license purchased in order to legally use the theme for your project.
* Copyright ThemeSelection (https://themeselection.com)

=========================================================
 -->
<!-- beautify ignore:start -->
<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>Dashboard - Analytics Laundree</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <link rel="stylesheet" href="../assets/vendor/libs/apex-charts/apex-charts.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="../assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../assets/js/config.js"></script>
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand demo">
            <a href="index.php" class="app-brand-link">
              <span class="app-brand-logo demo">
                <svg
                  width="25"
                  viewBox="0 0 25 42"
                  version="1.1"
                  xmlns="http://www.w3.org/2000/svg"
                  xmlns:xlink="http://www.w3.org/1999/xlink"
                >
                  <defs>
                    <path
                      d="M13.7918663,0.358365126 L3.39788168,7.44174259 C0.566865006,9.69408886 -0.379795268,12.4788597 0.557900856,15.7960551 C0.68998853,16.2305145 1.09562888,17.7872135 3.12357076,19.2293357 C3.8146334,19.7207684 5.32369333,20.3834223 7.65075054,21.2172976 L7.59773219,21.2525164 L2.63468769,24.5493413 C0.445452254,26.3002124 0.0884951797,28.5083815 1.56381646,31.1738486 C2.83770406,32.8170431 5.20850219,33.2640127 7.09180128,32.5391577 C8.347334,32.0559211 11.4559176,30.0011079 16.4175519,26.3747182 C18.0338572,24.4997857 18.6973423,22.4544883 18.4080071,20.2388261 C17.963753,17.5346866 16.1776345,15.5799961 13.0496516,14.3747546 L10.9194936,13.4715819 L18.6192054,7.984237 L13.7918663,0.358365126 Z"
                      id="path-1"
                    ></path>
                    <path
                      d="M5.47320593,6.00457225 C4.05321814,8.216144 4.36334763,10.0722806 6.40359441,11.5729822 C8.61520715,12.571656 10.0999176,13.2171421 10.8577257,13.5094407 L15.5088241,14.433041 L18.6192054,7.984237 C15.5364148,3.11535317 13.9273018,0.573395879 13.7918663,0.358365126 C13.5790555,0.511491653 10.8061687,2.3935607 5.47320593,6.00457225 Z"
                      id="path-3"
                    ></path>
                    <path
                      d="M7.50063644,21.2294429 L12.3234468,23.3159332 C14.1688022,24.7579751 14.397098,26.4880487 13.008334,28.506154 C11.6195701,30.5242593 10.3099883,31.790241 9.07958868,32.3040991 C5.78142938,33.4346997 4.13234973,34 4.13234973,34 C4.13234973,34 2.75489982,33.0538207 2.37032616e-14,31.1614621 C-0.55822714,27.8186216 -0.55822714,26.0572515 -4.05231404e-15,25.8773518 C0.83734071,25.6075023 2.77988457,22.8248993 3.3049379,22.52991 C3.65497346,22.3332504 5.05353963,21.8997614 7.50063644,21.2294429 Z"
                      id="path-4"
                    ></path>
                    <path
                      d="M20.6,7.13333333 L25.6,13.8 C26.2627417,14.6836556 26.0836556,15.9372583 25.2,16.6 C24.8538077,16.8596443 24.4327404,17 24,17 L14,17 C12.8954305,17 12,16.1045695 12,15 C12,14.5672596 12.1403557,14.1461923 12.4,13.8 L17.4,7.13333333 C18.0627417,6.24967773 19.3163444,6.07059163 20.2,6.73333333 C20.3516113,6.84704183 20.4862915,6.981722 20.6,7.13333333 Z"
                      id="path-5"
                    ></path>
                  </defs>
                  <g id="g-app-brand" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g id="Brand-Logo" transform="translate(-27.000000, -15.000000)">
                      <g id="Icon" transform="translate(27.000000, 15.000000)">
                        <g id="Mask" transform="translate(0.000000, 8.000000)">
                          <mask id="mask-2" fill="white">
                            <use xlink:href="#path-1"></use>
                          </mask>
                          <use fill="#696cff" xlink:href="#path-1"></use>
                          <g id="Path-3" mask="url(#mask-2)">
                            <use fill="#696cff" xlink:href="#path-3"></use>
                            <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-3"></use>
                          </g>
                          <g id="Path-4" mask="url(#mask-2)">
                            <use fill="#696cff" xlink:href="#path-4"></use>
                            <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-4"></use>
                          </g>
                        </g>
                        <g
                          id="Triangle"
                          transform="translate(19.000000, 11.000000) rotate(-300.000000) translate(-19.000000, -11.000000) "
                        >
                          <use fill="#696cff" xlink:href="#path-5"></use>
                          <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-5"></use>
                        </g>
                      </g>
                    </g>
                  </g>
                </svg>
              </span>
              <span class="app-brand-text demo menu-text fw-bolder ms-2">Laundree</span>
            </a>

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
              <i class="bx bx-chevron-left bx-sm align-middle"></i>
            </a>
          </div>

          <div class="menu-inner-shadow"></div>

          <ul class="menu-inner py-1">
            <!-- Dashboard -->
            <li class="menu-item active">
              <a href="index.php" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
              </a>
            </li>
            <!-- Layouts -->
            <li class="menu-item">
              <a href="order.php" class="menu-link">
                <i class="menu-icon tf-icons bx bx-shopping-bag"></i>
                <div data-i18n="Layouts">Order</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="list-member.php" class="menu-link">
                <i class="menu-icon tf-icons bx bx-user-circle"></i>
                <div data-i18n="Analytics">Member</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="list-petugas.php" class="menu-link">
                <i class="menu-icon tf-icons bx bxs-user-badge"></i>
                <div data-i18n="Authentications">Petugas</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="tambah-paket.php" class="menu-link">
                <i class="menu-icon tf-icons bx bx-plus-circle"></i>
                <div data-i18n="Authentications">Add Packet</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="../php/logout.php" class="menu-link">
                <i class="menu-icon tf-icons bx bx-log-out"></i>
                <div data-i18n="Authentications">Log Out</div>
              </a>
            </li>
          </ul>
        </aside>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->
            <div class="container-xxl flex-grow-1 container-p-y">
            <nav aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-style1">
                      <li class="breadcrumb-item">
                        <a href="index.php">Dashboard</a>
                      </li>
                      <li class="breadcrumb-item active">
                        <a href="detail-transaksi.php">Detail Transaksi</a>
                      </li>
                    </ol>
                  </nav>
              <div class="row">
              <div class="col-md-12">
                <?php
                include_once("../php/connection.php");
                $qry_get = mysqli_query($conn, "select * from transaksi where id = '" . $_GET['id'] . "'");
                $dt_get = mysqli_fetch_array($qry_get);
                ?>
                <form action="../php/proses-ubah-transaksi.php" method="post">
                  <div class="card mb-4">
                    <div class="card-body">
                      <div class="mb-3">
                        <label class="form-label">Nama Member</label>
                        <input
                          readonly
                          style="cursor: not-allowed;"
                          type="text"
                          class="form-control "
                          name="member"
                          value="<?php
                                    $qry_member = mysqli_query($conn, "select * from member where id = '" . $dt_get['id_member'] . "'");
                                    $dt_member = mysqli_fetch_array($qry_member);
                                    echo $dt_member['username'];
                                    ?>"
                        />
                      </div>
                      <div class="mb-3">
                        <label class="form-label">Tanggal Pemesanan</label>
                        <input
                          readonly
                          style="cursor: not-allowed;"
                          type="text"
                          class="form-control "
                          name="tanggal"
                          value="<?= $dt_get['tanggal'] ?>"
                        />
                      </div>
                      <div class="mb-3">
                        <label class="form-label">Batas Waktu</label>
                        <input
                          type="date"
                          class="form-control "
                          name="batas_waktu"
                          value="<?= $dt_get['batas_waktu'] ?>"
                        />
                      </div>
                      <div class="mb-3">
                        <label class="form-label">Tanggal Pembayaran</label>
                        <input
                          type="date"
                          class="form-control "
                          name="tanggal_pembayaran"
                          value="<?= $dt_get['tanggal_pembayaran'] ?>"
                        />
                      </div>
                      <div class="mb-3">
                        <label class="form-label">Status Pembayaran</label>
                        <?php
                        $arr_pembayaran = array('lunas' => 'Lunas', 'belum_lunas' => 'Belum Lunas');
                        ?>
                        <select name="status_pembayaran" class="form-select">
                            <option disabled>Pilih Status Pembayaran</option>
                            <?php
                            foreach ($arr_pembayaran as $key_pembayaran => $val_pembayaran) :
                                if ($key_pembayaran == $dt_get['status_pembayaran']) {
                                    $select = "selected";
                                } else {
                                    $select = "";
                                }
                            ?>
                            <option value="<?= $key_pembayaran ?>" <?= $select ?>><?= $val_pembayaran ?></option>
                            <?php endforeach ?>
                            </select>
                      </div>
                      <div class="mb-3">
                        <label class="form-label">Status Pengerjaan</label>
                        <?php
                        $arr_status = array('baru' => 'Baru', 'proses' => 'Proses', 'selesai' => 'Selesai', 'diambil' => 'Diambil');
                        ?>
                        <select name="status" class="form-select">
                            <option disabled>Pilih Status status</option>
                            <?php
                            foreach ($arr_status as $key_status => $val_status) :
                                if ($key_status == $dt_get['status']) {
                                    $select = "selected";
                                } else {
                                    $select = "";
                                }
                            ?>
                            <option value="<?= $key_status ?>" <?= $select ?>><?= $val_status ?></option>
                            <?php endforeach ?>
                            </select>
                      </div>
                      <!-- detail transaksi -->
                      <?php
                        $qry_packg = mysqli_query($conn, "select * from detail_transaksi where id_transaksi='$dt_get[id]'");
                        while ($dt_packg = mysqli_fetch_array($qry_packg)) {
                            $qry_pack = mysqli_query($conn, "select * from paket where id='$dt_packg[id_paket]'");
                            $data_pack = mysqli_fetch_array($qry_pack);
                            echo "<div class='mb-3'>
                                <label class='form-label'>Tipe Paket</label>";
                            $qry_pack = mysqli_query($conn, "select * from paket");
                            while ($data_pack = mysqli_fetch_array($qry_pack)) {
                                if ($data_pack['id'] == $dt_packg['id_paket']) {
                                    echo "<input type='text' readonly class='form-control' style='cursor: not-allowed;' value='$data_pack[nama_paket]' />";
                                }
                            }
                            echo "</div>
                              <div class='mb-3'>
                                <label for='qty' class='form-label'>Kuantitas</label>
                                <div class='d-flex align-items-center'>
                                  <input type='text' readonly name='qty' class='form-control me-3' style='cursor: not-allowed;' value='$dt_packg[qty]' />
                                  <span>Kg</span>
                                </div>
                              </div>";
                        }
                        ?>
                      <!-- detail transaksi end -->
                        <input type="submit" name="simpan" value="Ubah Transaksi" class="btn btn-primary mt-3">
                        <a href="../php/hapus-transaksi.php?id=<?= $_GET['id'] ?>" class="btn btn-danger mt-3" onclick="return confirm ('Apakah anda yakin menghapus data ini ?')">
                            Hapus Transaksi
                        </a>
                        <input type="button" name="simpan" value="Unduh Laporan" class="btn btn-success mt-3" onclick="const printBtn = document.getElementById('print'); window.print();" id="print">
                  </form>
                </div>
          </div>
        </div>
            <!-- / Content -->

            <!-- Footer -->
            <footer class="content-footer footer bg-footer-theme">
              <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                <div class="mb-2 mb-md-0">
                  ©
                  <script>
                    document.write(new Date().getFullYear());
                  </script>
                  , made with ❤️ by
                  <a href="https://themeselection.com" target="_blank" class="footer-link fw-bolder">Me</a>
                </div>
                <div>
                  <a href="https://themeselection.com/license/" class="footer-link me-4" target="_blank">License</a>
                  <a href="https://themeselection.com/" target="_blank" class="footer-link me-4">More Themes</a>

                  <a
                    href="https://themeselection.com/demo/sneat-bootstrap-html-admin-template/documentation/"
                    target="_blank"
                    class="footer-link me-4"
                    >Documentation</a
                  >

                  <a
                    href="https://github.com/themeselection/sneat-html-admin-template-free/issues"
                    target="_blank"
                    class="footer-link me-4"
                    >Support</a
                  >
                </div>
              </div>
            </footer>
            <!-- / Footer -->

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->
    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../assets/vendor/libs/popper/popper.js"></script>
    <script src="../assets/vendor/js/bootstrap.js"></script>
    <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="../assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="../assets/vendor/libs/apex-charts/apexcharts.js"></script>

    <!-- Main JS -->
    <script src="../assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="../assets/js/dashboards-analytics.js"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>