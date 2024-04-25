<?php
require_once("fnCSDL2.php");
//hàm trả về mảng chứa các nhân viên từ bảng tbNhanvien
function getListBenhNhan()
{
    $conn = ConnectDB();
    if($conn==NULL)
        return NULL;
    $sql = "SELECT * FROM benh_nhan";
    $pdo_stm = $conn->prepare($sql);//tạo đối tượng PDOStatement
    $ketqua = $pdo_stm->execute();//thực thi câu sql
    if($ketqua==FALSE)
        return NULL;
    else
    {
        $rows = $pdo_stm->fetchAll(PDO::FETCH_BOTH);
        return $rows;//Trả về mảng các dòng dữ liệu
    } 
}
//Hàm thêm nhân viên
function AddBenhNhan($hoten,$tuoi,$gioitinh,$ngaysinh,$diachi,$mathe, $trangthai, $benh)
{
    $conn = ConnectDB();
    if($conn==NULL)
        return NULL;
    $sql = "INSERT INTO benh_nhan VALUES(NULL,?,?,?,?,?,?,?,?)";
    $pdo_stm = $conn->prepare($sql);//tạo đối tượng PDOStatement
    $pdo_stm->bindParam(1,$hoten);
    $pdo_stm->bindParam(2,$tuoi);
    $pdo_stm->bindParam(3,$gioitinh);
    $pdo_stm->bindParam(4,$ngaysinh);
    $pdo_stm->bindParam(5,$diachi);
    $pdo_stm->bindParam(6,$mathe);
    $pdo_stm->bindParam(7,$trangthai);
    $pdo_stm->bindParam(8,$benh);
    $ketqua = $pdo_stm->execute();
    return $ketqua;//TRUE/FALSE
}
function getBenhnhan($id)
{
    $conn = ConnectDB();
    if($conn==NULL)
        return NULL;
    $sql = "SELECT * FROM benh_nhan WHERE id=?";
    $pdo_stm = $conn->prepare($sql);
    $pdo_stm->bindParam(1,$id);
    $ketqua = $pdo_stm->execute();
    if($ketqua==FALSE)
        return NULL;
    else
    {
        $row = $pdo_stm->fetch(PDO::FETCH_BOTH);
        return $row;
    } 
}

function UpdateBenhNhan($id, $hoten,$tuoi,$gioitinh,$ngaysinh,$diachi,$mathe, $trangthai, $benh)
{
    $conn = ConnectDB();
    if($conn==NULL)
        return NULL;
    $sql = "UPDATE benh_nhan
            SET ho_ten=?,tuoi=?,gioi_tinh=?,ngay_sinh=?,dia_chi=?,ma_the_bhyt=?,trang_thai=?,benh=? WHERE id=?";
    $pdo_stm = $conn->prepare($sql);
    $pdo_stm->bindParam(1,$hoten);
    $pdo_stm->bindParam(2,$tuoi);
    $pdo_stm->bindParam(3,$gioitinh);
    $pdo_stm->bindParam(4,$ngaysinh);
    $pdo_stm->bindParam(5,$diachi);
    $pdo_stm->bindParam(6,$mathe);
    $pdo_stm->bindParam(7,$trangthai);
    $pdo_stm->bindParam(8,$benh);
    $pdo_stm->bindParam(9,$id);
    $ketqua = $pdo_stm->execute();
    return $ketqua;
}

function DeleteBenhnhan($id)
{
    $conn = ConnectDB();
    if($conn==NULL)
        return NULL;
    $sql = "DELETE FROM benh_nhan WHERE id=?";
    $pdo_stm = $conn->prepare($sql);
    $pdo_stm->bindParam(1,$id);
    $ketqua = $pdo_stm->execute();
    return $ketqua;
}


function getExistingPatient($ma_the_bhyt)
{
    $conn = ConnectDB();
    if ($conn == NULL)
        return NULL;

    $sql = "SELECT * FROM benh_nhan WHERE ma_the_bhyt=?";
    $pdo_stm = $conn->prepare($sql);
    $pdo_stm->bindParam(1, $ma_the_bhyt);
    $ketqua = $pdo_stm->execute();

    if ($ketqua == FALSE)
        return NULL;
    else {
        $row = $pdo_stm->fetch(PDO::FETCH_BOTH);
        return $row;
    }
}
?>