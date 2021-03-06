<?php
  error_reporting(E_ALL ^ E_NOTICE);
  session_start();
  header('Cache-control: private');
  header('Last-Modified: ' . gmdate("D, d M Y H:i:s") . ' GMT');
  header('Cache-Control: no-store, no-cache, must-revalidate');
  header('Cache-Control: post-check=0, pre-check=0', false);
  header('Pragma: no-cache');

  $cookie_name = 'siteAuth';
  $cookie_time = (3600 * 24 * 30);

  $algoritma         = "rijndael-256";
  $mode              = "cfb";
  $secretkey         = "sipdikti";
  $TITLE             = "Sistem Informasi Pelaporan";
  $domain            = "localhost";
  $url_rewrite       = "http://localhost/base-cframe/";
  $url_img           = "http://localhost/base-cframe/";
  $REQUEST           = "base-cframe/content";
  $PROSES_REQUEST    = "base-cframe/proses";
  $path              = "/srv/www/htdocs/base-cframe/";
  $path_upload       = "/srv/www/htdocs/base-cframe/static/uploads/img/";
  $path_upload_album = "/srv/www/htdocs/base-cframe/static/uploads/album";

  class config {
    public $db_host              = "";
    public $db_user              = "";
    public $db_pass              = "";
    public $database             = "";
    public $url_rewrite_class    = "http://localhost/base-cframe";
    public $session_expired_time = "7200";
    public $hashing_number       = "d1kt1w4rr10r5";
    public $debug                = 1;

    public function open_connection() {
      $this->link_db = mysqli_connect($this->db_host, $this->db_user, $this->db_pass,$this->database)
      or die("Koneksi Database gagal");
      return $this->link_db;
    }
    
  }
?>
