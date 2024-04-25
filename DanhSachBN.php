<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách bệnh nhân</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" rel="stylesheet">
</head>

<body>
    <h1 class="text-center mt-3 text-primary "><b><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                fill="currentColor" class="bi bi-person-vcard-fill mb-2 me-2" viewBox="0 0 16 16">
                <path
                    d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm9 1.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 0-1h-4a.5.5 0 0 0-.5.5M9 8a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 0-1h-4A.5.5 0 0 0 9 8m1 2.5a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 0-1h-3a.5.5 0 0 0-.5.5m-1 2C9 10.567 7.21 9 5 9c-2.086 0-3.8 1.398-3.984 3.181A1 1 0 0 0 2 13h6.96q.04-.245.04-.5M7 6a2 2 0 1 0-4 0 2 2 0 0 0 4 0" />
            </svg>DANH SÁCH BỆNH NHÂN</b></h1>
    <p class='text-center'><a class="btn btn-primary" href="kiemTraBenhNhan.php"> <svg
                xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                class="bi bi-person-plus-fill me-2 mb-1" viewBox="0 0 16 16">
                <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                <path fill-rule="evenodd"
                    d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5" />
            </svg>Thêm bệnh nhân</a></p>
    <div class="container table-responsive">
        <table class="table align-middle table-hover shadow p-3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>HỌ TÊN</th>
                    <th>TUỔI</th>
                    <th>GIỚI TÍNH</th>
                    <th>NGÀY SINH</th>
                    <th>ĐỊA CHỈ</th>
                    <th>MÃ THẺ BẢO HIỂM</th>
                    <th>Bệnh</th>
                    <th>TRẠNG THÁI</th>
                    <th class='text-center'>XỬ LÝ</th>
                </tr>
            </thead>
            <tbody>

                <?php
            require_once("tblBenhnhan.php");
            $rows = getListBenhNhan();
            if($rows==NULL)
                die("<p> LỖI CƠ SỞ DỮ LIỆU </p>");
            foreach($rows as $row)//lặp từng dòng
            {
        ?>
                <tr>
                    <td><?=$row["id"]?></td>
                    <td><?=$row["ho_ten"]?></td>
                    <td><?=$row["tuoi"]?></td>
                    <td class='<?=$row["gioi_tinh"]=='Nam'?"text-success":"text-info"?>'><?=$row["gioi_tinh"]?></td>
                    <td><?=$row["ngay_sinh"]?></td>
                    <td><?=$row["dia_chi"]?></td>
                    <td><?=$row["ma_the_bhyt"]?></td>
                    <td><?=$row["benh"]?></td>
                    <td class='<?=$row["trang_thai"]=='1'?"text-primary":"text-danger"?>'>
                        <?=$row["trang_thai"]=='1'?"Đang điều trị":"Đã xuất viện"?>
                    </td>
                    <td>
                        <a class='btn btn-success m-1' href="SuaBN.php?id=<?=$row["id"]?>"><i
                                class="bi bi-gear-fill me-1"></i>Sửa</a>

                        <a class='btn btn-danger m-1' href="XoaBN.php?id=<?=$row["id"]?>"
                            onclick="return confirm('Chắc chắn xóa?')"><i class="bi bi-trash-fill"></i> Xóa</a>
                    </td>
                </tr>
                <?php
    }//đóng foreach
 ?>
            </tbody>

        </table>
    </div>
</body>

<style>
body {
    background-color: #efefef;
    background-image: url('bg.jpg');
    background-position: center;
    background-repeat: no-repeat;
    background-size: 100% 100%;
    height: 97vmin;
    margin: 0;
}

h1 {
    cursor: pointer;
}

td {
    color: #6a6a6a !important;

}

tr>td:first-child,
th:first-child {
    padding-left: 30px;
}

td:nth-child(2) {
    font-weight: bold !important;
}

td {
    font-weight: 500;
}

thead>tr>th {
    background-color: #0d6efd !important;
    color: white !important;
}

thead>tr>th:first-child {
    border-top-left-radius: 15px;
}

thead>tr>th:last-child {
    border-top-right-radius: 15px;
}
</style>

</html>