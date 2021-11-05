<?php ?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <title>Sistem Pengaduan STIKI</title>
<!--
SOFTY PINKO
https://templatemo.com/tm-535-softy-pinko
-->

    <!-- Additional CSS Files -->
    <link href="/pengaduan/assets/front/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

     <link href="/pengaduan/assets/front/css/font-awesome.css" rel="stylesheet" type="text/css" />

     <link href="/pengaduan/assets/front/css/templatemo-softy-pinko.css" rel="stylesheet" type="text/css" />
     <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />

<link href="/pengaduan/assets/sbadmin/css/jquery-confirm.min.css"  rel="stylesheet" type="text/css" />
<link href="/pengaduan/assets/css/pnoty/pnotify.css"  rel="stylesheet" type="text/css" />
<link href="/pengaduan/assets/css/pnoty/pnotify.brighttheme.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" type="text/css" href="/pengaduan/assets/front/css/bootstrap-datepicker.min.css">
<link rel="stylesheet" type="text/css" href="/pengaduan/assets/front/css/dropzone.min.css">
<link rel="stylesheet" type="text/css" href="/pengaduan/assets/front/css/basic.min.css">
</head>
<body>
    
    
    <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
  <nav class="nav-container layout-full-width ">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="#" class="logo">
                            <img src="/pengaduan/assets/front/images/logo.png" alt="Softy Pinko"/>
                        </a>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Welcome Area Start ***** -->
    <div class="welcome-area" id="welcome">

<!-- ***** Header Text Start ***** -->
<div class="header-text">
    <div class="container">
        <div class="row" >
            <div class="offset-xl-3 col-xl-6 offset-lg-2 col-lg-8 col-md-12 col-sm-12">
                <br>
                <br>
                <h1><strong>Layanan Pengaduan Online</strong>  STMIK STIKOM Indonesia</h1>
            </div>
        </div>
    </div>
</div>
<!-- ***** Header Text End ***** -->
</div>
    <!-- ***** Welcome Area End ***** -->

    <!-- ***** Features Small Start ***** -->
    <br>
    <br>
 
    <section class="section home-feature" >
        <div class="container" >
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                      

                        <!-- ***** Features Small Item Start ***** -->
       <div class="col-lg-12 col-md-8 col-sm-8 col-12" data-scroll-reveal="enter bottom move 80px over 0.6s after 0.4s" style="margin-top: -50px;">

    <div class="pricing-item">
        <div class="col-lg-12 col-md-8 col-sm-8 col-12" align="center" >
          <div class="btn-group btn-complaint-type" id="classification_complaint" data-toggle="buttons">
            <label class="classification_complaint btn btn-default active" type = "0">
            <input type="radio" name="classification_id" id="radioapp" value="1" class="sr-only" ><span>ADUAN</span></label>
            <label class="classification_complaint btn btn-default" type = "1">
            <input type="radio" name="classification_id" id="radionwk" value="3" class="sr-only" ><span>APLIKASI</span></label>
            <label class="classification_complaint btn btn-default" type = "2">
            <input type="radio" name="classification_id" id="radionwk" value="5" class="sr-only" ><span>RIWAYAT ADUAN</span></label>
        </div>
        <div class="row" style="margin-top: 10px;">
                <div class="col-lg-12 col-md-8 col-sm-8 col-12" align="center">
                    <div class="contact-form">
                    <form action="/aplikasimahasiswa/create" method="POST">
                        {{csrf_field()}}
                          <input type="hidden" id="type_laporan" name="type_laporan" value="0">
                          <div class="row" align="center">

<!-- ***** ADUAN ***** -->


<br>
<div class="col-lg-12" align="left" id="RowApp">
<div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Nama</th>
                  <th>Aduan</th>
                  <th>Tanggal</th>
                  <th>Status</th>
                </tr>
                </thead>
                <tbody>
                  @foreach ($aplikasimahasiswa as $m)
                <tr>
                  <td>{{ $m->nama}}</td>
                  <td>{{ $m->deskripsi_laporan}}</td>
                  <td>{{ $m->tgl_kejadian}}</td>
                  <td>{{ $m->status}}</td>
                
                </tr>
                @endforeach
              </tbody>
              </table>
            </div>
          </div>

                            
                            </div>
                    
<!-- ***** ADUAN End ***** -->


                  <div class="row"  id="RowJaringan" style="display: none; width: 100%; margin-left: 5px;">
                            <div class="col-lg-12"  align="left">
                            <fieldset>
                                 <input name="nim" type="text" class="form-control" id="nim" placeholder="NIM" required="">
                              </fieldset> 
                            </div>

                            <div class="col-lg-12">
                              <fieldset>
                                 <input name="nama" type="text" class="form-control" id="nama" placeholder="Nama" required="">
                              </fieldset>
                            </div>

                            <div class="col-lg-12"  align="left">
                            <div class="form-group">
                            <select class="form-control select2" style="width: 100%;" id="prodi" name="prodi">
                                  <option value="-">-- Pilih Prodi --</option>
                                  <option value="0001">Teknik Informatika</option>
                                  <option value="0002">Sistem Komputer</option>
                            </select>
                            </div>
                        </div>
                            
                            <div class="col-lg-12"  align="left">
                            <div class="form-group">
                            <select class="form-control" name="kategorilayanan">
                                  <option value="">--Pilih Aplikasi--</option>
                                  @foreach ($kategorilayanan as $k)
                                  <option value="{{ $k->id }}">{{ $k->nama }}</option>
                                  @endforeach
                            </select>
                            </div>
                            </div>

                              <div class="col-lg-12">
                              <div class="form-group">
                            <fieldset>
                                  <input type="date" name="tgl_kejadian" />
                                  <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                             </fieldset>
                            </div>
                          </div>
                         
                             

                            <div class="col-lg-12">
                              <fieldset>
                                 <input name="judul_laporan" type="text" class="form-control" id="judul_laporan" placeholder="Judul" required="">
                              </fieldset>
                            </div>
                            
                             <div class="col-lg-12">
                              <fieldset>
                                <textarea name="deskripsi_laporan" rows="4" class="form-control" id="deskripsi_laporan" placeholder="Deskripsi" required=""></textarea>
                              </fieldset>
                            </div>

                            <div class="col-lg-12">
                              <fieldset>
                                <textarea name="lampiran" rows="4" class="form-control" id="lampiran" placeholder="Lampiran" required=""></textarea>
                              </fieldset>
                            </div>

                     <div class="col-lg-12" align="left">
                     <fieldset>
                     <button type="submit" id="form-submit" class="main-button">Laporkan!</button>
                      </fieldset>
                          </div>
                        </div>
                       
                    </div>
                </div>
              </div>

         

               </form>    
                    </div>
                </div>   
                    </div>
                </div>
              </div>
                 
                </div>
            </div>
        </div>

    </section>
    <!-- ***** APLIKASI End ***** -->


        <!-- ***** Testimonials Start ***** -->
    <section class="section" style="margin-top: -100px;">
        <div class="container" align="center">
            <div class="row">
                 <div class="col-lg-12 center" >
                <div class="row bs-wizard" style="border-bottom:0;" >
                    <div class="col-lg-3 col-xs-offset-1 bs-wizard-step active">
                      <div class="progress"><div class="progress-bar"></div></div>
                      <span class="bs-wizard-dot">
                          <i class="fa fa-pencil-square-o"></i>
                      </span>
                      <div class="text-center bs-wizard-stepnum">Tulis Laporan</div>
                      <div class="bs-wizard-info text-center">
                          Laporkan keluhan<br> anda dengan jelas dan lengkap
                      </div>
                    </div>

                    <div class="col-lg-3 bs-wizard-step active">
                      <div class="progress"><div class="progress-bar"></div></div>
                      <span class="bs-wizard-dot">
                          <i class="fa fa-gear"></i>
                      </span>
                     <div class
                     ="text-center bs-wizard-stepnum">Proses Tindak Lanjut</div>
                      <div class="bs-wizard-info text-center">
                         Laporan Anda akan terus <br> ditindaklanjuti hingga terselesaikan
                      </div>
                    </div>

                    <div class="col-lg-3 bs-wizard-step active">
                      <div class="progress"><div class="progress-bar"></div></div>
                      <span class="bs-wizard-dot">
                          <i class="fa fa-check"></i>
                      </span>
                      <div class="text-center bs-wizard-stepnum">Laporan Anda Selesai</div>
                      <div class="bs-wizard-info text-center">
                          Laporan Anda Terselesaikan
                      </div>
                    </div>

                     <div class="col-lg-3 bs-wizard-step complete">
                      <div class="progress"><div class="progress-bar"></div></div>
                      <span class="bs-wizard-dot">
                          <i class="fa fa-star"></i>
                      </span>
                      <div class="text-center bs-wizard-stepnum">Beri Penilaian</div>
                      <div class="bs-wizard-info text-center">
                          Beri Penilaian<br> untuk layanan yang semakin baik
                      </div>
                    </div>

                </div>
               
                <!-- ***** Testimonials Item End ***** -->
            </div>
        </div>
    </div>
    </section>
    <!-- ***** Testimonials End ***** -->
            </div>
        </div>
    </section>




  


    
    <!-- ***** Footer Start ***** -->
    <footer >
        <div class="container">
           
            <div class="row">
                <div class="col-lg-12"  >
                    <p align="left" class="copyright">Made with  <i class="fa fa-heart" aria-hidden="true" style="color:#be1931"></i> by SIMJAR - STMIK-STIKOM Indonesia</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- jQuery -->
    <!-- <script src="assets/js/jquery-2.1.0.min.js"></script> -->

<script type="text/javascript" src="/pengaduan/assets/front/js/jquery-2.1.0.min.js" ></script>

  <script type="text/javascript">
$("#simpan1").click(function() {    
        $.confirm({
          title: 'Konfirmasi',
          content: 'Laporkan  ?',
           type: 'red',
          buttons: {
              Simpan: function () {
                 //  $.LoadingOverlay("show");
                  $("#Simpan").submit();
              },
              Batal: function () {
                
              },
          }
      });

});
</script>



<!-- Bootstrap -->
<!-- <script src="assets/js/popper.js"></script> -->

<script type="text/javascript" src="/pengaduan/assets/front/js/popper.js" ></script>
<!-- <script src="assets/js/bootstrap.min.js"></script> -->


<script type="text/javascript" src="/pengaduan/assets/front/js/bootstrap.min.js" ></script>
<!-- Plugins -->
<!-- <script src="assets/js/scrollreveal.min.js"></script> -->

<script type="text/javascript" src="/pengaduan/assets/front/js/scrollreveal.min.js" ></script>
<!-- <script src="assets/js/waypoints.min.js"></script> -->

<script type="text/javascript" src="/pengaduan/assets/front/js/waypoints.min.js" ></script>
<!-- <script src="assets/js/jquery.counterup.min.js"></script> -->
<script type="text/javascript" src="/pengaduan/assets/front/js/jquery.counterup.min.js" ></script>
<!-- <script src="assets/js/imgfix.min.js"></script> -->
<script type="text/javascript" src="/pengaduan/assets/front/js/imgfix.min.js" ></script> 

<!-- Global Init -->
<!-- <script src="assets/js/custom.js"></script> -->
<script type="text/javascript" src="/pengaduan/assets/front/js/custom.js" ></script> 

<script type="text/javascript" src="/pengaduan/assets/front/js/jquery-3.3.1.slim.min.js"></script>


<script type="text/javascript" src="/pengaduan/assets/front/js/popper.min.js"></script>


<script type="text/javascript" src="/pengaduan/assets/front/js/select2.min.js"></script>

<script src="/pengaduan/assets/sbadmin/js/jquery-confirm.js" type="text/javascript"></script>
<script type="text/javascript" src="/pengaduan/assets/js/pnoty/pnotify.js" src="src/pnotify.js"></script>
<script type="text/javascript" href="/pengaduan/assets/js/pnoty/pnotify.animate.js" ></script>
<script type="text/javascript" href="/pengaduan/assets/js/pnoty/pnotify.buttons.js" type="text/javascript" ></script>
<script type="text/javascript" src="/pengaduan/assets/js/loadingoverlay.min.js" src="src/pnotify.js"></script>
<script type="text/javascript" src="/pengaduan/assets/front/js/bootstrap-datepicker.min.js"></script>

<script type="text/javascript" src="/pengaduan/assets/front/js/dropzone.min.js"></script>

  </body>

<script type="text/javascript">
 $(document).ready(function(){
   $('.classification_complaint').click(function(){
     var val = $(this).attr('type');
    $('#type_laporan').val(val); 
     
     if (val=='1') {
      $('#RowJaringan').show();
      $('#RowApp').hide();
     }else{
      $('#RowJaringan').hide();
      $('#RowApp').show();
     }
   // alert(val);
});
});
</script>


   
  <script type="text/javascript">
    $(function () {
  $("#tgl_kejadian").datepicker({ 
        autoclose: true, 
        todayHighlight: true
  }).datepicker('update', new Date());
});
  </script>


   <script>
  $(function () {
    $(".select2").select2();
     $(".select3").select2();

    // Dropzone.autoDiscover = false;

  });
  </script>



<script type="text/javascript">
  Dropzone.autoDiscover = false;
   $(document).ready(function(){
    var i = 1;
Dropzone.autoDiscover = false;
var accept = ".pdf,.png,.jpg,.JPEG";
var foto_upload= new Dropzone(".dropzone",{
url:"/pengaduan/index.php/Front/proses_upload",
maxFilesize: 10,
method:"post",
acceptedFiles:accept,
paramName:"userfile",
dictInvalidFileType:"Type file ini tidak dizinkan",
addRemoveLinks:true,
success: function(file,data){
  
 var data_array = data.split(',');
 var nama =data_array[0];
 var namafile =  nama.replace('"', ''); 
 var token =data_array[1];
 var tokenfile =  token.replace('"', ''); 
 var str = String(tokenfile);
 var res = str.substring(3, 10);   
    $('<input>').attr({
        type: 'hidden',
        id: res,//a.token,
        class:tokenfile,
        name: 'file['+i+']', 
        value: namafile
      }).appendTo('form');
      i++; 
}
});



// mengupload
foto_upload.on("sending",function(a,b,c){
  a.token=Math.random();
  var str = String(a.token);
  var res = str.substring(3, 10);
  c.append("token_foto",a.token); //Menmpersiapkan token untuk masing masing foto        
});

//hapus
foto_upload.on("removedfile",function(a){
  var token=a.token;
  var str = String(a.token);
  var res = str.substring(3, 10);
  var namafile = $('#'+res).val();
   $('#'+res).remove();
  $.ajax({
    type:"post",
    data:{nama:namafile},
    url:"/pengaduan/index.php/Front/remove_foto",
    cache:false,
    dataType: 'json',
    success: function(){
      console.log("Foto terhapus");
    },
    error: function(){
      console.log("Error");

    }
  });
 });
  });
</script>




</html>