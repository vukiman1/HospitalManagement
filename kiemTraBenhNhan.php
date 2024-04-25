<?php
            require_once("tblBenhnhan.php");

if (isset($_POST["submit"])) {
    $ma_the_bhyt = $_POST["ma_the_bhyt"];
    
    // Check if the Health Insurance Card Number exists
    $existingPatient = getExistingPatient($ma_the_bhyt);

    echo "<div class='container mt-5'>";
    if ($existingPatient) {
        // Display buttons and notification for existing patient
        echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>";
        echo "<p>Bệnh nhân đã thăm khám trước đó. Bạn có muốn sửa thông tin không?</p>";
        echo "<a class='btn btn-primary me-2' href='SuaBN.php?id=" . $existingPatient['id'] . "'>Sửa thông tin</a>";
        echo "<a class='btn btn-secondary' href='DanhSachBN.php'>Quay lại danh sách bệnh nhân</a>";
        echo "<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>";
        echo "</div>";
    } else {
        // Display buttons and notification for new patient
        echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>";
        echo "<p>Bệnh nhân mới. Bạn có muốn tạo mới hồ sơ không?</p>";
        echo "<a class='btn btn-primary me-2    ' href='ThemBN.php?ma_the_bhyt=" . $ma_the_bhyt . "'>Tạo mới bệnh nhân</a>";
        echo "<a class='btn btn-secondary' href='DanhSachBN.php'>Quay lại danh sách bệnh nhân</a>";
        echo "<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>";
        echo "</div>";
    }
    echo "</div>";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Nhập mã BHYT</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Add your other head elements here -->
</head>

<body>
    <div class="container mt-5">
        <form method="post" action="">
            <div class="mb-3">
                <label for="ma_the_bhyt" class="form-label">Nhập mã Bảo Hiểm Y Tế:</label>
                <input type="text" class="form-control" id="ma_the_bhyt" name="ma_the_bhyt" required>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Kiểm tra</button>
        </form>
    </div>
    <!-- Bootstrap JS (optional, but needed for the close button) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
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
</style>

</html>