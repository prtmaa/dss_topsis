<?php
include('../database/koneksi.php');
include('inc/header.php');

?>

<?php
$_SESSION["id"] = "1";

if (count($_POST) > 0) {
    $result = mysqli_query($koneksi, "SELECT *from admin WHERE id='" . $_SESSION["id"] . "'");
    $row = mysqli_fetch_array($result);
    if ($_POST["currentPassword"] == $row["password"]) {
        mysqli_query($koneksi, "UPDATE admin set password='" . $_POST["newPassword"] . "' WHERE id='" . $_SESSION["id"] . "'");
        $sukses = "Password Berhasil Diubah";
    } else $message = "Password Lama Tidak Valid";
}
?>



<title>ADMIN | Profil</title>

<div class="container-fluid px-2 px-md-4">
    <div class="page-header min-height-300 border-radius-xl mt-4" style="background-image: url('../assets/img/cool-background.png');">
        <span class="mask  bg-gradient-primary  opacity-6"></span>
    </div>
    <div class="card card-body mx-3 mx-md-4 mt-n6">
        <div class="row gx-4 mb-2">
            <div class="col-auto">
                <div class="avatar avatar-xl position-relative">
                    <img src="../assets/img/admin.png" alt="profile_image" class="w-100 border-radius-lg shadow-sm">
                </div>
            </div>
            <?php
            $cari = mysqli_query($koneksi, "SELECT * FROM admin");
            $hasil = mysqli_fetch_array($cari);
            ?>
            <div class="col-auto my-auto">
                <div class="h-100">
                    <p class="mb-0 font-weight-normal text-sm">
                        Username
                    </p>
                    <h5 class="mb-1">
                        <?= $hasil['username']; ?>
                    </h5>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="row">
                <div class="col-12 col-xl-4">
                    <div class="card card-plain h-100">
                        <div class="card-header pb-0 p-3">
                            <h6 class="mb-0">Ubah Password</h6>
                        </div>
                        <div class="card-body p-3">

                            <form name="frmChange" action="" method="POST" onSubmit="return validatePassword()">

                                <!-- <div class="mb-3 row">
                                    <label for="nama" class="col-form-label">Username</label>
                                    <div class="input-group input-group-outline">
                                        <input type="text" class="form-control" id="nama" name="username" required>
                                    </div>
                                </div> -->


                                <?php if (isset($message)) : ?>
                                    <div class="alert alert-danger alert-dismissible text-white" role="alert">
                                        <span class="text-sm"><?= $message; ?></span>
                                        <button type="button" class="btn-close text-lg py-3 opacity-10" data-bs-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                <?php endif; ?>

                                <?php if (isset($sukses)) : ?>
                                    <div class="alert alert-success alert-dismissible text-white" role="alert">
                                        <span class="text-sm"><?= $sukses; ?></span>
                                        <button type="button" class="btn-close text-lg py-3 opacity-10" data-bs-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                <?php endif; ?>


                                <div class="mb-3 row">
                                    <label for="lama" class="col-form-label">Password Lama</label>
                                    <div class="input-group input-group-outline">
                                        <input type="password" class="form-control" id="currentPassword" name="currentPassword" required>
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="baru" class="col-form-label">Password Baru</label>
                                    <div class="input-group input-group-outline">
                                        <input type="password" class="form-control" id="newPassword" name="newPassword" required>
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="nama" class="col-form-label">Konfirmasi Password</label>
                                    <div class="input-group input-group-outline">
                                        <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" required>
                                    </div>
                                </div>

                                <div class="mb-3 row mt-4">
                                    <div class="col">
                                        <button type="submit" name="submit" value="Submit" class="btn btn-success btn-sm">Konfirmasi</button>
                                    </div>
                                </div>

                            </form>

                        </div>
                    </div>
                </div>
                <!-- <div class="col-12 col-xl-4">
                    <div class="card card-plain h-100">
                        <div class="card-header pb-0 p-3">
                            <div class="row">
                                <div class="col-md-8 d-flex align-items-center">
                                    <h6 class="mb-0">Profile Information</h6>
                                </div>

                            </div>
                        </div>
                        <div class="card-body p-3">

                        </div>
                    </div>
                </div>
                <div class="col-12 col-xl-4">
                    <div class="card card-plain h-100">
                        <div class="card-header pb-0 p-3">
                            <h6 class="mb-0">Profile</h6>
                        </div>
                        <div class="card-body p-3">

                        </div>
                    </div>
                </div> -->



            </div>
        </div>
    </div>
</div>


<script>
    function validatePassword() {
        var currentPassword, newPassword, confirmPassword, output = true;

        currentPassword = document.frmChange.currentPassword;
        newPassword = document.frmChange.newPassword;
        confirmPassword = document.frmChange.confirmPassword;

        if (!currentPassword.value) {
            currentPassword.focus();
            document.getElementById("currentPassword").innerHTML = "required";
            output = false;
        } else if (!newPassword.value) {
            newPassword.focus();
            document.getElementById("newPassword").innerHTML = "required";
            output = false;
        } else if (!confirmPassword.value) {
            confirmPassword.focus();
            document.getElementById("confirmPassword").innerHTML = "required";
            output = false;
        }
        if (newPassword.value != confirmPassword.value) {
            newPassword.value = "";
            confirmPassword.value = "";
            newPassword.focus();
            document.getElementById("confirmPassword").innerHTML = "No Match";
            output = false;
        }
        return output;
    }
</script>




<?php include('inc/footer.php'); ?>