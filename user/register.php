<?php include("includes/header.php"); ?>
<?php include("includes/navbar.php"); ?>

<div class="container shadow my-3 py-3">

    <div class="row justify-content-center my-3">
        <div class="col-md-12">
            <div class="mx-auto" style="width: 22rem;">
                <img src="./images/services/img2.jpg" class="card-img-top" alt="...">
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-6">

            <div class="card shadow">

                <div class="card-header text-center bg-success text-white">
                    <h4>ระบบลงทะเบียน</h4>
                </div>

                <div class="card-body fs-4">
                    <form action="registercode.php" method="post">
                        <div class="mb-3">
                            <label class="form-label">ชื่อสกุล</label>
                            <input type="firstname" name="fname" placeholder="โปรดกรอกชื่อ" class="form-control" require>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">นามสกุล</label>
                            <input type="lastname" name="lname" placeholder="โปรดกรอกนามสกุล" class="form-control" require>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">อีเมลล์</label>
                            <input type="email" name="email" placeholder="โปรดกรอกอีเมลล์" class="form-control" require>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">รหัสผ่าน</label>
                            <input type="password" name="password" placeholder="โปรดกรอกรหัสผ่าน" class="form-control" require>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">ยืนยันรหัสผ่าน</label>
                            <input type="password" name="cpassword" required placeholder="โปรดกรุณาป้อน รหัสผ่านซ้ำ" class="form-control">
                        </div>

                        <div class="mb-3">
                            <button type="submit" name="register_btn" class="btn btn-success">ลงทะเบียน</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include("includes/footer.php"); ?>