
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Bot Console</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/iconfonts/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.addons.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
        <a class="navbar-brand brand-logo" href="#">
          <img src="images/logo.svg" alt="logo" />
        </a>
        <a class="navbar-brand brand-logo-mini" href="#">
          <img src="images/logo-mini.svg" alt="logo" />
        </a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center">
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
          data-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->

      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <!-- <li class="nav-item">
            <a class="nav-link" href="/c-botof-broadcast.php">
              <i class="menu-icon mdi mdi-television"></i>
              <span class="menu-title">ส่งข้อความ Line Bot</span>
            </a>
          </li> -->
          <li class="nav-item">
            <a class="nav-link" href="/c-botself-broadcast.php">
              <i class="menu-icon mdi mdi-television"></i>
              <span class="menu-title">Line Self Bot ประกาศ</span>
            </a>
          </li>
        </ul>
      </nav>

      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <!-- TYPE_00 -->
          <div class="row">
            <div class="col-md-12 d-flex align-items-stretch grid-margin stretch-card">
              <div class="row flex-grow">
                <div class="col-12">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">ส่งข้อความ</h4>
                      <form action="s-botself-send-broadcast-1552944092.php" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                          <label for="param01">รูปแบบ</label>
                          <input type="text" class="form-control" id="param01" name="param01"
                            placeholder="" value="TYPE_TEXT" readonly required>
                        </div>
                        <div class="form-group">
                          <label for="param02">ข้อความ</label>
                          <textarea class="form-control" id="param02" name="param02" rows="4"></textarea>
                        </div>
                        <button type="submit" class="btn btn-success mr-2" name="submit">ส่งข้อความ</button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- TYPE_00 -->
          <div class="row">
            <div class="col-md-6 d-flex align-items-stretch grid-margin stretch-card">
              <div class="row flex-grow">
                <div class="col-12">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">ตัวอย่างรูปแบบที่ 0</h4>
                      <img src="/images/console/example_TYPE_00.png" width="50%" alt="EXAMPLE TYPE_00">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 d-flex align-items-stretch grid-margin stretch-card">
              <div class="row flex-grow">
                <div class="col-12">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">ส่งข้อความรูปแบบที่ 0</h4>
                      <form action="s-botself-send-broadcast-1552944092.php" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                          <label for="param01">รูปแบบ</label>
                          <input type="text" class="form-control" id="param01" name="param01"
                            placeholder="" value="TYPE_00" readonly required>
                        </div>
                        <div class="form-group">
                          <label for="param_img_01">รูปภาพ [สัดส่วน 1:1]</label>
                          <input type="file" class="form-control" id="param_img_01" name="param_img_01"
                            placeholder="" required>
                        </div>
                        <div class="form-group">
                          <label for="param03">รูปภาพ [คลิก] (ลิงค์เว็บ , ลิงค์ไลน์)</label>
                          <input type="text" class="form-control" id="param03" name="param03"
                            placeholder="https:// , line://ti/.." required>
                        </div>
                        <button type="submit" class="btn btn-success mr-2" name="submit">ส่งข้อความ</button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- TYPE_01 -->
          <div class="row">
            <div class="col-md-6 d-flex align-items-stretch grid-margin  stretch-card">
              <div class="row flex-grow">
                <div class="col-12">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">ตัวอย่างรูปแบบที่ 1</h4>
                      <img src="/images/console/example_TYPE_01.png" width="50%"  alt="EXAMPLE TYPE_01">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 d-flex align-items-stretch grid-margin stretch-card">
              <div class="row flex-grow">
                <div class="col-12">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">ส่งข้อความรูปแบบที่ 1</h4>
                      <form action="s-botself-send-broadcast-1552944092.php" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                          <label for="param01">รูปแบบ</label>
                          <input type="text" class="form-control" id="param01" name="param01"
                            placeholder="" value="TYPE_01" readonly required>
                        </div>
                        <div class="form-group">
                          <label for="param_img_01">รูปภาพ [สัดส่วน 1:1]</label>
                          <input type="file" class="form-control" id="param_img_01" name="param_img_01"
                            placeholder="" required>
                        </div>
                        <div class="form-group">
                          <label for="param03">รูปภาพ [คลิก] (ลิงค์เว็บ , ลิงค์ไลน์)</label>
                          <input type="text" class="form-control" id="param03" name="param03"
                            placeholder="https:// , line://ti/.." required>
                        </div>
                        <div class="form-group">
                          <label for="param04">ข้อความ 1</label>
                          <input type="text" class="form-control" id="param04" name="param04"
                            placeholder="ข้อความ 1" required>
                        </div>
                        <div class="form-group">
                          <label for="param05">ข้อความ 2</label>
                          <input type="text" class="form-control" id="param05" name="param05"
                            placeholder="ข้อความ 1" required>
                        </div>
                        <div class="form-group">
                          <label for="param06">ข้อความปุ่มกด 1</label>
                          <input type="text" class="form-control" id="param06" name="param06"
                            placeholder="ข้อความปุ่มกด 1" required>
                        </div>
                        <div class="form-group">
                          <label for="param07">ปุ่มกด 1 [คลิก] (ลิงค์เว็บ , ลิงค์ไลน์)</label>
                          <input type="text" class="form-control" id="param07" name="param07"
                            placeholder="https:// , line://ti/.." required>
                        </div>
                        <div class="form-group">
                          <label for="param08">ข้อความปุ่มกด 2</label>
                          <input type="text" class="form-control" id="param08" name="param08"
                            placeholder="ข้อความปุ่มกด 2" required>
                        </div>
                        <div class="form-group">
                          <label for="param09">ปุ่มกด 2 [คลิก] (ลิงค์เว็บ , ลิงค์ไลน์)</label>
                          <input type="text" class="form-control" id="param09" name="param09"
                            placeholder="https:// , line://ti/.." required>
                        </div>
                        <button type="submit" class="btn btn-success mr-2" name="submit">ส่งข้อความ</button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- TYPE_02 -->
          <div class="row">
            <div class="col-md-6 d-flex align-items-stretch grid-margin  stretch-card">
              <div class="row flex-grow">
                <div class="col-12">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">ตัวอย่างรูปแบบที่ 2</h4>
                      <img src="/images/console/example_TYPE_02.png" width="100%" alt="EXAMPLE TYPE_02">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 d-flex align-items-stretch grid-margin stretch-card">
              <div class="row flex-grow">
                <div class="col-12">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">ส่งข้อความรูปแบบที่ 2</h4>
                      <form action="s-botself-send-broadcast-1552944092.php" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                          <label for="param01">รูปแบบ</label>
                          <input type="text" class="form-control" id="param01" name="param01"
                            placeholder="" value="TYPE_02" readonly required>
                        </div>
                        <div class="form-group">
                          <label for="param02">ข้อความ 1</label>
                          <input type="text" class="form-control" id="param02" name="param02"
                            placeholder="ข้อความ 1" required>
                        </div>
                        <div class="form-group">
                          <label for="param03">ข้อความปุ่มกด 1</label>
                          <input type="text" class="form-control" id="param03" name="param03"
                            placeholder="ข้อความปุ่มกด 1" required>
                        </div>
                        <div class="form-group">
                          <label for="param04">ปุ่มกด 1 [คลิก] (ลิงค์เว็บ , ลิงค์ไลน์)</label>
                          <input type="text" class="form-control" id="param04" name="param04"
                            placeholder="https:// , line://ti/.." required>
                        </div>
                        <div class="form-group">
                          <label for="param05">ข้อความปุ่มกด 2</label>
                          <input type="text" class="form-control" id="param05" name="param05"
                            placeholder="ข้อความปุ่มกด 2" required>
                        </div>
                        <div class="form-group">
                          <label for="param06">ปุ่มกด 2 [คลิก] (ลิงค์เว็บ , ลิงค์ไลน์)</label>
                          <input type="text" class="form-control" id="param06" name="param06"
                            placeholder="https:// , line://ti/.." required>
                        </div>
                        <button type="submit" class="btn btn-success mr-2" name="submit">ส่งข้อความ</button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- TYPE_03 -->
          <div class="row">
            <div class="col-md-6 d-flex align-items-stretch grid-margin  stretch-card">
              <div class="row flex-grow">
                <div class="col-12">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">ตัวอย่างรูปแบบที่ 3</h4>
                      <img src="/images/console/example_TYPE_03.png" width="40%" alt="EXAMPLE TYPE_03">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 d-flex align-items-stretch grid-margin stretch-card">
              <div class="row flex-grow">
                <div class="col-12">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">ส่งข้อความรูปแบบที่ 3</h4>
                      <form action="s-botself-send-broadcast-1552944092.php" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                          <label for="param01">รูปแบบ</label>
                          <input type="text" class="form-control" id="param01" name="param01"
                            placeholder="" value="TYPE_03" readonly required>
                        </div>
                        <div class="form-group">
                          <label for="param_img_01">รูปภาพ 1 [สัดส่วน 1:1]</label>
                          <input type="file" class="form-control" id="param_img_01" name="param_img_01"
                            placeholder="" required>
                        </div>
                        <div class="form-group">
                          <label for="param_img_02">รูปภาพ 2 [สัดส่วน 1:1]</label>
                          <input type="file" class="form-control" id="param_img_02" name="param_img_02"
                            placeholder="" required>
                        </div>
                        <div class="form-group">
                          <label for="param04">ข้อความปุ่มกด 1</label>
                          <input type="text" class="form-control" id="param04" name="param04"
                            placeholder="ข้อความปุ่มกด 1" required>
                        </div>
                        <div class="form-group">
                          <label for="param05">ปุ่มกด 1 [คลิก] (ลิงค์เว็บ , ลิงค์ไลน์)</label>
                          <input type="text" class="form-control" id="param05" name="param05"
                            placeholder="https:// , line://ti/.." required>
                        </div>
                        <button type="submit" class="btn btn-success mr-2" name="submit">ส่งข้อความ</button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="container-fluid clearfix">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2019
              <a href="/">X</a>. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">
              X
            </span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <script src="vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/misc.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <!-- End custom js for this page-->
</body>

</html>

