<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" rel="stylesheet">
</head>

<body>
    <div class='text-center mt-5 mb-3'>
        <svg xmlns="http://www.w3.org/2000/svg" width="120" height="120" fill="white"
            class="bi bi-check-circle-fill mt-5" viewBox="0 0 16 16">
            <path
                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
        </svg>
    </div>


    <?php
    require_once("tblBenhnhan.php");
    // lấy dữ liệu từ request
    if(isset($_REQUEST["id"])==false)
        die("<p>chưa có id bệnh nhân</p>");
    $id = $_REQUEST["id"];//lấy id nhân viên
    if($id=="" || is_numeric($id)==false)
        die("<p>id không được rỗng và phải là số</p>");
        
    $ketqua = DeleteBenhnhan($id);
    if($ketqua==TRUE)
        echo "
            <div class='text-center'>
                <h1>THÀNH CÔNG </h1>
                <span>Bệnh nhân đã được khoá thành công khỏi danh sách!</span>
            </div>
    
    ";
    else
        echo "<h3> LỖI Xóa DỮ LIỆU</h3>";
?>



    <div class='text-center mt-4'>

        <a class='btn btn-light text-success' href="DanhSachBN.php">
            <b><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-arrow-return-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M1.5 1.5A.5.5 0 0 0 1 2v4.8a2.5 2.5 0 0 0 2.5 2.5h9.793l-3.347 3.346a.5.5 0 0 0 .708.708l4.2-4.2a.5.5 0 0 0 0-.708l-4-4a.5.5 0 0 0-.708.708L13.293 8.3H3.5A1.5 1.5 0 0 1 2 6.8V2a.5.5 0 0 0-.5-.5" />
                </svg> XEM DANH SÁCH BỆNH NHÂN</b> </a>
    </div>
</body>


<style>
body {
    background-color: #31c07e;
    font-family: Arial, Helvetica, sans-serif;
}

h1 {
    color: white;
    font-weight: bold;
}

span {
    color: white;
}

i::before {
    width: 500px;
}
</style>



</html>