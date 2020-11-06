
<?php
// Route pages
include_once ("../config/configuration.php");

// Bagian Dashboard
if ($_GET['content']=='home'){  
  include "content/home.php";
}
// Bagian User
if ($_GET['content']=='user'){
  include "content_user/user.php";
}
if ($_GET['content']=='user_tambah'){
  include "content_user/tambah.php";
}
if ($_GET['content']=='user_tambahaksi'){
  include "content_user/tambah_aksi.php";
}
if ($_GET['content']=='user_delete'){
  include "content_user/delete.php";
}
if ($_GET['content']=='user_edit'){
  include "content_user/edit.php";
}
// Bagian Transaksi ----------------
if ($_GET['content']=='product'){
  include "content_product/product.php";
}
if ($_GET['content']=='product_tambah'){
  include "content_product/tambah.php";
}
if ($_GET['content']=='product_tambahaksi'){
  include "content_product/tambah_aksi.php";
}
if ($_GET['content']=='product_delete'){
  include "content_product/delete.php";
}
if ($_GET['content']=='product_edit'){
  include "content_product/edit.php";
}
if ($_GET['content']=='product_editaksi'){
  include "content_product/edit_aksi.php";
}
// Bagian COA ----------------
if ($_GET['content']=='coa'){
  include "content_coa/coa.php";
}
if ($_GET['content']=='coa_tambah'){
  include "content_coa/tambah.php";
}
if ($_GET['content']=='coa_tambahaksi'){
  include "content_coa/tambahaksi.php";
}
if ($_GET['content']=='coa_delete'){
  include "content_coa/delete.php";
}
if ($_GET['content']=='coa_edit'){
  include "content_coa/edit.php";
}
if ($_GET['content']=='coa_editaksi'){
  include "content_coa/edit_aksi.php";
}
if ($_GET['content']=='coa_test'){
  include "content_coa/test.php";
}

// Bagian Buku Besar
if ($_GET['content']=='buku_besar'){
  include "content_buku/buku_besar.php";
}
if ($_GET['content']=='buku_besar_show'){
  include "content_buku/buku_besar_show.php";
}
// Bagian Laporan ----------------
if ($_GET['content']=='labarugi'){
  include "content_laporan/labarugi.php";

}

?>