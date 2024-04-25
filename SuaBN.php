<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Sửa bệnh nhân</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" rel="stylesheet">
</head>

<body>



    <div class="contaner d-flex justify-content-center align-items-center mt-3">
        <?php
            if(isset($_REQUEST["id"])==false)
                die("<p>chưa có id</p>");
            $id = $_REQUEST["id"];
            if($id=="" || is_numeric($id)==false)
                die("<p>id không được rỗng và phải là số</p>");
            require_once("tblBenhnhan.php");
            $row = getBenhNhan($id);//lấy thông tin nhân viên theo id   
        ?>

        <form class="shadow p-4 border rounded mt-1" name="form1" onsubmit="return validateForm()" method="post"
            action="XulySuaBN.php">
            <h1 class='text-primary text-center mb-3'><b>SỬA BỆNH NHÂN</b></h1>
            <input type="hidden" name="id" id="id" value="<?=$row["id"]?>">

            <div class="input-group mb-3">
                <span class="input-group-text"><i class="bi bi-person-circle"></i></span>
                <div class="form-floating">
                    <input type="text" class="form-control" name="tHoten" id="tHoten" placeholder="Họ Tên"
                        value="<?=$row["ho_ten"]?>">
                    <label for="floatingInputGroup1">Họ Tên</label>
                </div>
            </div>



            <div class='d-flex'>
                <div class="input-group mb-3">
                    <span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                            fill="currentColor" class="bi bi-123" viewBox="0 0 16 16">
                            <path
                                d="M2.873 11.297V4.142H1.699L0 5.379v1.137l1.64-1.18h.06v5.961zm3.213-5.09v-.063c0-.618.44-1.169 1.196-1.169.676 0 1.174.44 1.174 1.106 0 .624-.42 1.101-.807 1.526L4.99 10.553v.744h4.78v-.99H6.643v-.069L8.41 8.252c.65-.724 1.237-1.332 1.237-2.27C9.646 4.849 8.723 4 7.308 4c-1.573 0-2.36 1.064-2.36 2.15v.057zm6.559 1.883h.786c.823 0 1.374.481 1.379 1.179.01.707-.55 1.216-1.421 1.21-.77-.005-1.326-.419-1.379-.953h-1.095c.042 1.053.938 1.918 2.464 1.918 1.478 0 2.642-.839 2.62-2.144-.02-1.143-.922-1.651-1.551-1.714v-.063c.535-.09 1.347-.66 1.326-1.678-.026-1.053-.933-1.855-2.359-1.845-1.5.005-2.317.88-2.348 1.898h1.116c.032-.498.498-.944 1.206-.944.703 0 1.206.435 1.206 1.07.005.64-.504 1.106-1.2 1.106h-.75z" />
                        </svg></span>
                    <div class="form-floating">
                        <input type="number" class="form-control" name="tTuoi" id="tTuoi" placeholder="Username"
                            value="<?=$row["tuoi"]?>">
                        <label for="floatingInputGroup1">Tuổi</label>
                    </div>
                </div>

                <div class="form-floating mb-3 ms-3">
                    <select class="form-select" name="tGioitinh" id="tGioitinh"
                        aria-label="Floating label select example value=" <?=$row["gioi_tinh"]?>>
                        <option selected>Chọn giới tính</option>
                        <option value="Nam" <?=$row['gioi_tinh'] == 'Nam' ? ' selected="selected"' : '';?>>Nam</option>
                        <option value="Nữ" <?=$row['gioi_tinh'] == 'Nữ' ? ' selected="selected"' : '';?>>Nữ</option>
                    </select>
                    <label for="floatingSelect">Giới tính</label>
                </div>
            </div>











            <div class="input-group mb-3">
                <span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                        fill="currentColor" class="bi bi-cake-fill" viewBox="0 0 16 16">
                        <path
                            d="m7.399.804.595-.792.598.79A.747.747 0 0 1 8.5 1.806V4H11a2 2 0 0 1 2 2v3h1a2 2 0 0 1 2 2v4a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1v-4a2 2 0 0 1 2-2h1V6a2 2 0 0 1 2-2h2.5V1.813a.747.747 0 0 1-.101-1.01ZM12 6.414a.9.9 0 0 1-.646-.268 1.914 1.914 0 0 0-2.708 0 .914.914 0 0 1-1.292 0 1.914 1.914 0 0 0-2.708 0A.9.9 0 0 1 4 6.414v1c.49 0 .98-.187 1.354-.56a.914.914 0 0 1 1.292 0c.748.747 1.96.747 2.708 0a.914.914 0 0 1 1.292 0c.374.373.864.56 1.354.56zm2.646 5.732a.914.914 0 0 1-1.293 0 1.914 1.914 0 0 0-2.707 0 .914.914 0 0 1-1.292 0 1.914 1.914 0 0 0-2.708 0 .914.914 0 0 1-1.292 0 1.914 1.914 0 0 0-2.708 0 .914.914 0 0 1-1.292 0L1 11.793v1.34c.737.452 1.715.36 2.354-.28a.914.914 0 0 1 1.292 0c.748.748 1.96.748 2.708 0a.914.914 0 0 1 1.292 0c.748.748 1.96.748 2.707 0a.914.914 0 0 1 1.293 0 1.915 1.915 0 0 0 2.354.28v-1.34z" />
                    </svg></span>
                <div class="form-floating">
                    <input type="date" class="form-control" name="tNgaysinh" id="tNgaysinh"
                        value="<?=$row["ngay_sinh"]?>">
                    <label for="floatingInputGroup1">Ngày sinh</label>
                </div>
            </div>





            <div class="input-group mb-3">
                <span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                        fill="currentColor" class="bi bi-house-add-fill" viewBox="0 0 16 16">
                        <path
                            d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 1 1-1 0v-1h-1a.5.5 0 1 1 0-1h1v-1a.5.5 0 0 1 1 0" />
                        <path
                            d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L8 2.207l6.646 6.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293z" />
                        <path d="m8 3.293 4.712 4.712A4.5 4.5 0 0 0 8.758 15H3.5A1.5 1.5 0 0 1 2 13.5V9.293z" />
                    </svg></i></span>
                <div class="form-floating">
                    <input type="text" class="form-control" name="tDiachi" id="tDiachi" value="<?=$row["dia_chi"]?>">
                    <label for="floatingInputGroup1">Địa chỉ</label>
                </div>
            </div>



            <div class="input-group mb-3">
                <span class="input-group-text"><i class="bi bi-upc-scan"></i></i></span>
                <div class="form-floating">
                    <input type="number" class="form-control" name="tMathe" id="tMathe"
                        value="<?=$row["ma_the_bhyt"]?>">
                    <label for="floatingInputGroup1">Mã thẻ bảo hiểm</label>
                </div>
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                        fill="currentColor" class="bi bi-clipboard2-pulse-fill" viewBox="0 0 16 16">
                        <path
                            d="M10 .5a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5.5.5 0 0 1-.5.5.5.5 0 0 0-.5.5V2a.5.5 0 0 0 .5.5h5A.5.5 0 0 0 11 2v-.5a.5.5 0 0 0-.5-.5.5.5 0 0 1-.5-.5" />
                        <path
                            d="M4.085 1H3.5A1.5 1.5 0 0 0 2 2.5v12A1.5 1.5 0 0 0 3.5 16h9a1.5 1.5 0 0 0 1.5-1.5v-12A1.5 1.5 0 0 0 12.5 1h-.585q.084.236.085.5V2a1.5 1.5 0 0 1-1.5 1.5h-5A1.5 1.5 0 0 1 4 2v-.5q.001-.264.085-.5M9.98 5.356 11.372 10h.128a.5.5 0 0 1 0 1H11a.5.5 0 0 1-.479-.356l-.94-3.135-1.092 5.096a.5.5 0 0 1-.968.039L6.383 8.85l-.936 1.873A.5.5 0 0 1 5 11h-.5a.5.5 0 0 1 0-1h.191l1.362-2.724a.5.5 0 0 1 .926.08l.94 3.135 1.092-5.096a.5.5 0 0 1 .968-.039Z" />
                    </svg></span>
                <div class="form-floating">
                    <input type="text" class="form-control" name="tBenh" id="tBenh" value="<?=$row["benh"]?>">
                    <label>Bệnh cần điều trị</label>
                </div>
            </div>

            <div class="form-floating mb-3">
                <select class="form-select" name="tTrangThai" id="tTrangThai"
                    aria-label="Floating label select example value=" <?=$row["trang_thai"]?>>
                    <option value="1" <?=$row['trang_thai'] == '1' ? ' selected="selected"' : '';?>>Đang
                        điều trị</option>
                    <option value="0" <?=$row['trang_thai'] == '0' ? ' selected="selected"' : '';?>>Đã xuất
                        viện
                    </option>
                </select>
                <label for="floatingSelect">Tình trạng</label>
            </div>

            <div class='d-flex justify-content-around'>
                <input class="btn btn-primary input-css" type="submit" name="b1" id="b1" value="Đồng ý">
                &nbsp;&nbsp;
                <input class="btn btn-danger input-css" type="reset" name="b2" id="b2" value="Nhập lại">
            </div>



        </form>
    </div>

</body>

<style>
form {
    width: 50%;
    background-color: white;
}

body {
    background-color: #efefef;
    background-image: url('bg.jpg');
    background-position: center;
    background-repeat: no-repeat;
    background-size: 100% 100%;
    height: 97vmin;
    margin: 0;
}


.input-css {
    width: 45%;
}
</style>


<script src='./assets/validate.js'>
validateForm()
</script>

</html>