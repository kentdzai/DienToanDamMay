<?php
include 'db.php';
$fk_maLoai = "";
$moTa = "";
$tenLoai = "";
$action = "";
$tenSP = "";
$giaSanPham = "";

$action = $_REQUEST ["action"];
if ($action == "product") {
	$fk_maLoai = $_REQUEST ["fk_maLoai"];
	$moTa = $_REQUEST ["moTa"];
	$tenSP = $_REQUEST ["tenSanPham"];
	$giaSanPham = $_REQUEST ["giaSanPham"];
	
}else if ($action = "category") {
	$tenLoai = $_REQUEST ["tenLoai"];
}

$arr = array ();


if ($action == "category") {
	
	$insertC = "INSERT INTO `tbl_loaisanpham` (`maLoai`, `tenLoai`) VALUES (NULL, '$tenLoai');";
	if ($conn->query ( $insertC ) === TRUE) {
		$arr ['result'] = 'true';
	} else {
		$arr ['result'] = 'false';
	}
	echo json_encode ( $arr );
	return;
}

if ($action == "product") {
	$insertP = "INSERT INTO `tbl_sanpham` (`maSanPham`,`tenSanPham`, `giaSanPham`, `fk_maLoai`, `moTa`) VALUES (NULL,'$tenSP', '$giaSanPham', '$fk_maLoai', '$moTa');";
	if ($conn->query ( $insertP ) === TRUE) {
		
		$arr ['result'] = 'true';
	} else {
		$arr ['result'] = 'false';
	}
	echo json_encode ( $arr );
	return;
}

?>