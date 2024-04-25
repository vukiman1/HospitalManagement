function validateForm() {
  var hoten = document.forms["form1"]["tHoten"].value;
  var tuoi = document.forms["form1"]["tTuoi"].value;
  var gioitinh = document.forms["form1"]["tGioitinh"].value;
  var ngaysinh = document.forms["form1"]["tNgaysinh"].value;
  var diachi = document.forms["form1"]["tDiachi"].value;
  var mathe = document.forms["form1"]["tMathe"].value;
  var trangthai = document.forms["form1"]["tTrangThai"].value;
  var benh = document.forms["form1"]["tBenh"].value;

  if (
    hoten == "" ||
    tuoi == "" ||
    gioitinh == "Chọn giới tính" ||
    ngaysinh == "" ||
    diachi == "" ||
    mathe == "" ||
    trangthai == "" ||
    benh == ""
  ) {
    alert("Vui lòng điền đầy đủ thông tin cho tất cả các trường.");
    return false;
  }
  return true;
}
