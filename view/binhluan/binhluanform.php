<?php
session_start();
$idpro = $_REQUEST['idpro'];
if (isset($_SESSION['user'])) {
   $iduser = $_SESSION['user']['id'];
}
include '../../model/binhluan.php';
include '../../model/pdo.php';
$binhluan = load_binhluan($idpro);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.css" rel="stylesheet" />

</head>

<body>
    <div class="card shadow-0 border mt-5" style="background-color: #f0f2f5;">
        <h2 class="mt-3" style="margin-left:20px; ">Bình Luận</h2>
        <div class="card-body p-4">
            <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
                <?php if (isset($_SESSION['user'])) { ?>
                    <div class="form-outline mb-2">
                        <input type="hidden" name="idpro" value="<?= $idpro ?>">
                        <input type="text" id="addANote" class="form-control" name='noidung' placeholder="Nhập bình luận" />
                        <label class="form-label" for="addANote">+ Thêm bình luận</label>

                    </div>
                    <div class="text-center">
                        <input class="btn btn-primary " type="submit" name="guibinhluan" id="" value='gửi bình luận'>
                    </div>
                <?php } else { ?>
                    <p>Vui lòng đăng nhập để bình luận</p>
                <?php } ?>
            </form>
            <?php

            foreach ($binhluan as $bl) {
                extract($bl);
                echo '<div class="card mb-4 mt-3">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <div class="d-flex flex-row align-items-center">
                                        <p class="small mb-0 ms-2">' . $user . '</p>
                                    </div>
                                    <div class="d-flex flex-row align-items-center">
                                        <p class="small text-muted mb-0">' . $ngaybinhluan . '</p>
                                    </div>
                                </div>
                                <p>' . $noidung . '</p>
                            </div>
                        </div>';
            }
            ?>
        </div>
        <?php
        if (isset($_POST['guibinhluan']) && ($_POST['guibinhluan'])) {
            $noidung = $_POST['noidung'];
            $idpro = $_POST['idpro'];
            $iduser = $_SESSION['user']['id'];
            $date = date('Y-m-d');
            insert_binhluan($noidung, $iduser, $idpro, $date);
        }
        ?>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.min.js" integrity="sha512-WW8/jxkELe2CAiE4LvQfwm1rajOS8PHasCCx+knHG0gBHt8EXxS6T6tJRTGuDQVnluuAvMxWF4j8SNFDKceLFg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.js"></script>

</body>

</html>