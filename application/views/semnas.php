<!DOCTYPE HTML>
<html>
<head>
  <?php include_once('master.php'); ?>

</head>
<body>
  <?php include_once('layouts/partials/navigation.php');  ?>

  <div id="intro" style="">
    <div class="intro-text">
      <div class="container wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">
        <div class="row">
          <div class="col-md-12">
            <div class="brand">
              <img src="<?php echo base_url();?>assets/images/maskot.png" alt="" height="250px" width="200px" style="padding: 10px;">
              <!--<div class="line-spacer"></div>-->
              <br><br>
              <p style="color: white;" class="caption-text animated typewrite" data-period="2000" data-type='[ "<strong>CATCH THE LIMIT OF TECHNOLOGY</strong>" ]'>
              </div>
              <!--<div class="line-spacer"></div>-->
              <div class="cloud cloudAnimate"></div>

            </div>
          </div>
        </div>
      </div><br><br>
      <div class="row">
        <div class="col-md-4 col-md-offset-4" style="margin-top:40px">
          <h3 style="background-color: #1c2c3e;" class="time-header">TIME REMAINING</h3>
          <h4 style="background-color: #1c2c3e;" class="time-detail" id="demo"></h4>
        </div>
      </div>
    </div>
    <div id="about" class="home-section bg-white wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">
      <div class="container">
        <div class="row">
          <div class="col-md-offset-1 col-md-10">
            <div class="section-heading">
              <h2>ABOUT SEMNASTI 2019</h2>
              <br>
              <p style="text-align: justify; color: white;"><strong>Seminar Nasional Teknik Informatika (SEMNASTI)</strong> Seminar Nasional Teknik Informatika (SEMNASTI) adalah salah satu event tahunan terbesar yang diselenggarakan oleh Himpunan Mahasiswa Teknik Informatika (HMTI) Universitas Dian Nuswantoro Semarang. Dengan adanya SEMNASTI, diharapkan mahasiswa mampu mendapatkan informasi ter-update dari perkembangan Teknologi masa kini. Dan dapat menambah wawasan mahasiswa mengenai Teknologi.
             </p>
            </div>
            <div class="cloud cloudAnimate" style="top:20%;"></div>
            <img src="<?php echo base_url();?>assets/images/posterganti.png" alt="Poster" width="100%">
          </div>
        </div>
      </div>
    </div>

    <div id="speakers" class="home-section bg-blue wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s" > <!-- style="background-color: #2E8B57" -->
      <div class="container">
        <div class="row">
          <div class="col-md-10 col-md-offset-1">
            <div class="section-heading">
              <!-- <h2>SPEAKERS</h2> -->

              <!-- INI YANG DI TAMBAHKAN  -->
            </div>
          </div>
          <img src="<?php echo base_url();?>assets/images/speakered.png" alt="" class="img-responsive" width="100%" />

          <div class="cloud cloudAnimate" style="top:10%;"></div>
        </div>
      </div>
    </div>

    <div id="alur" class="home-section wow fadeInDown" data-wow-duration=".8s" data-wow-delay=".2s">
      <img src="<?php echo base_url();?>assets/images/alur.png" alt="Alur Pendaftaran SEMNASTI" width="100%">
  </div>
<br><br><br><br><br>
  <div id="register" class="home-section bg-white wow fadeInDown" data-wow-duration=".8s" data-wow-delay=".2s" style="margin-top:-10%">
    <div class="row">
      <div class="col-md-offset-2 col-md-8">
        <div class="section-heading">
          <h2>PENDAFTARAN </h2>
        <br>
          <!-- <div class="alert alert-danger">Mohon Maaf <strong>Pendaftaran SEMNASTI 2019 telah di TUTUP</strong></div> -->
        </div>
      </div>
          <!-- <img src="<?php echo base_url();?>assets/images/tutupan.png" alt="Registration Closed" width="100%"> -->
            
      <div style="color: white;" class="col-md-offset-3 col-md-6">
        <form class="" action="<?php echo base_url('peserta/store');?>" method="post">

          <input type="hidden" name="_token" value=" csrf_token() ">
          <div class="form-group">
            <input type="hidden" name="pin" class="form-control" value="<?php echo substr(str_shuffle(str_repeat("0123456789abcdefghijklmnopqrstuvwxyz",3)),0,5)?>" readonly="true">
          </div>
          <div class="form-group">
            <input type="text" name="name" class="form-control" placeholder="Nama Lengkap" />
          </div>
          <div class="form-group">
            <input type="email" class="form-control" name="email" placeholder="Email"/>
          </div>
          <div class="form-group">
            <input type="tel" name="telp" class="form-control" placeholder="No HP / No Wa" />
          </div>
          <div class="form-group">
            <label for="kategori" style="font-size:16px"><strong>Kategori</strong></label><br>
            <input type="radio" name="kategori" value="mhs"> Mahasiswa Udinus
            <input type="radio" name="kategori" value="umum"> Umum
          </div>
          <div class="form-group" id="nim" style="display:none">
            <input type="text" name="nim" class="form-control" placeholder="NIM" hidden="true" />
          </div>
          <div class="form-group" id="progdi"  style="display:none">
            <input type="text" name="progdi" class="form-control" placeholder="Progdi" hidden="true" />
          </div>
          <div class="form-group" id="alamat"  style="display:none">
            <input type="text" name="alamat" class="form-control" placeholder="Alamat Lengkap" hidden="true"/>
          </div>
          <div class="text-center">
            <input type="submit" name="Submit" value="Daftar" class="btn btn-lg btn-block btn-primary">
          </div>
        </form>
      </div>
    </div>
  </div>
  <br>

  <div id="faq" class="home-section bg-gradient wow fadeInDown" data-wow-duration=".8s" data-wow-delay=".2s" >  <!--style="background-color: #2E8B57"-->
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>Frequently Asked Question</h2>
          </div>
          <div class="cloud cloudAnimate" style="top:20%;"></div>
          <div class="cloud cloudAnimate" style="top:50%;"></div>
          <div class="col-md-8 col-md-offset-2" style="text-align:justify">
            <div class="panel-group" id="faqAccordion">
              <div class="panel panel-default ">
                <div class="panel-heading accordion-toggle question-toggle collapsed" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question0" style="cursor: pointer;">
                  <h4 class="panel-title">
                    <a  class="ing">Q: Kapan SEMNASTI 2019 dilaksanakan ?</a>
                  </h4>

                </div>
                <div id="question0" class="panel-collapse collapse" style="height: 0px;">
                  <div class="panel-body">
                    <p class="answer-question" style="text-align:left;">
                      Catch The Limit Of Technology
                      dilaksanakan pada : <br>
                      <b>Hari, tanggal  :</b> Sabtu, 4 Mei 2019<br>
                      <b>Tempat         : </b> Aula Gedung E Lantai 3 Universitas Dian Nuswantoro Semarang <br>
                      <b>Pukul          : </b> 07.00 - selesai
                    </p>
                  </div>
                </div>
              </div>
              <div class="panel panel-default ">
                <div class="panel-heading accordion-toggle question-toggle collapsed" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question1" style="cursor: pointer;">
                  <h4 class="panel-title">
                    <a  class="ing">Q: Berapa HTM SEMNASTI 2019  ?</a>
                  </h4>

                </div>
                <div id="question1" class="panel-collapse collapse" style="height: 0px;">
                  <div class="panel-body">
                    <p class="answer-question" style="text-align:left;">
                      HTM SEMNASTI 2019 sebesar : <br>
                      <b>Mahasiswa UDINUS  : </b> Rp. 80.000<br>
                      <b>Umum          : </b> Rp. 85.000 <br>
                      <b>Untuk pertanggal 26 April Naik Sebesar  : </b> Rp. 5.000
                    </p>
                  </div>
                </div>
              </div>
              <div class="panel panel-default ">
                <div class="panel-heading accordion-toggle question-toggle collapsed" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question2" style="cursor: pointer;">
                  <h4 class="panel-title">
                    <a  class="ing">Q: Bagaimana cara mendaftar SEMNASTI 2019 ?</a>
                  </h4>

                </div>
                <div id="question2" class="panel-collapse collapse" style="height: 0px;">
                  <div class="panel-body">
                    <p class="answer-question" style="text-align:left;">
                      Pendaftaran dapat diakses melalui link <a href="http://hmti.dinus.ac.id/semnasti" target="_blank" style="color:rgb(249, 172, 52)">https://hmti.dinus.ac.id/semnasti </a>
                  	atau dapat langsung datang ke stand pendaftaran
                        <b>SEMNASTI 2019</b> di gedung H dan gedung D lantai 1  <b>Universitas Dian Nuswantoro Semarang.</b>
                    </p>
                  </div>
                </div>
              </div>
              <div class="panel panel-default ">
                <div class="panel-heading accordion-toggle question-toggle collapsed" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question3" style="cursor: pointer;">
                  <h4 class="panel-title">
                    <a  class="ing">Q:   Apakah pembayaran dapat melalui transfer Rekening ?</a>
                  </h4>

                </div>
                <div id="question3" class="panel-collapse collapse" style="height: 0px;">
                  <div class="panel-body">
                    <p class="answer-question" style="text-align:left;">
                      Pembayaran melalui rekening dapat dikirim ke :<br>
                      <b>304401018162532</b><b> (BRI)</b><br>
                      <b>A/n : Ardian Ferdy F </b>
                    </p>
                  </div>
                </div>
              </div>
              <div class="panel panel-default ">
                <div class="panel-heading accordion-toggle question-toggle collapsed" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question4" style="cursor: pointer;">
                  <h4 class="panel-title">
                    <a  class="ing">Q: Apakah ada batas waktu pembayaran Tiket SEMNASTI 2019 ?</a>
                  </h4>

                </div>
                <div id="question4" class="panel-collapse collapse" style="height: 0px;">
                  <div class="panel-body">
                    <p class="answer-question" style="text-align:left;">
                      <b>Ada, batas maksimal pembayaran tiket SEMNASTI 2 hari</b>.
                      Jika melebihi waktu pembayaran  yang telah ditentukan maka tiket akan
                      hangus dan akan dialihkan kepada pendaftar lain.
                    </p>
                  </div>
                </div>
              </div>
              <div class="panel panel-default ">
                <div class="panel-heading accordion-toggle question-toggle collapsed" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question5" style="cursor: pointer;">
                  <h4 class="panel-title">
                    <a  class="ing">Q: Kapan pendaftaran SEMNASTI 2019 mulai DIBUKA ?</a>
                  </h4>

                </div>
                <div id="question5" class="panel-collapse collapse" style="height: 0px;">
                  <div class="panel-body">
                    <p class="answer-question" style="text-align:left;">
                      Pendaftaran SEMNASTI 2019 dibuka mulai pada :<br>
                      Hari, Tanggal : Senin, 8 April 2019
                    </p>
                  </div>
                </div>
              </div>
              <div class="panel panel-default ">
                <div class="panel-heading accordion-toggle question-toggle collapsed" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question6" style="cursor: pointer;">
                  <h4 class="panel-title">
                    <a  class="ing">Q: Kapan pendaftaran SEMNASTI 2019 akan DITUTUP ?</a>
                  </h4>

                </div>
                <div id="question6" class="panel-collapse collapse" style="height: 0px;">
                  <div class="panel-body">
                    <p class="answer-question" style="text-align:left;">

                        Pendaftaran SEMNASTI 2019 akan ditutup pada :<br>
                        Hari, Tanggal : Selasa,  28 April  2019<br>
                        <b style="color:rgb(249, 172, 52)">Pendaftaran akan ditutup ketika kuota telah terpenuhi.</b>
                    </p>
                  </div>
                </div>
              </div>
              <div class="panel panel-default ">
                <div class="panel-heading accordion-toggle question-toggle collapsed" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question7" style="cursor: pointer;">
                  <h4 class="panel-title">
                    <a  class="ing">Q: Dimana lokasi SEMNASTI 2019 diselenggarakan ?</a>
                  </h4>

                </div>
                <div id="question7" class="panel-collapse collapse" style="height: 0px;">
                  <div class="panel-body">
                    <p class="answer-question" style="text-align:left;">
                      Seminar Nasional Teknik Informatika 2019 diselenggarakan di :<br>
                      Aula Gedung E Lantai 3 Universitas Dian Nuswantoro Semarang<br>
                      Jl. Nakula No. 5 – 11 Pendrikan Kidul, Semarang Tengah, Kota Semarang, Jawa Tengah 50131.
                    </p>
                  </div>
                </div>
              </div>
              <div class="panel panel-default ">
                <div class="panel-heading accordion-toggle question-toggle collapsed" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question8" style="cursor: pointer;">
                  <h4 class="panel-title">
                    <a  class="ing">Q: Apa saja fasilitas yang didapat ?</a>
                  </h4>

                </div>
                <div id="question8" class="panel-collapse collapse" style="height: 0px;">
                  <div class="panel-body">
                    <p class="answer-question" style="text-align:left;">
                      Peserta yang telah mendaftar <b>SEMNASTI 2019</b> dan hadir saat acara, akan mendapatkan fasilitas :<br>
                      - Sertifikat<br>
                      - Merchandise<br>
                      - Snack<br>
                      - Lunch Box<br>
                      - Seminar Kit<br>
                      - Doorprize
                    </p>
                  </div>
                </div>
              </div>
              <div class="panel panel-default ">
                <div class="panel-heading accordion-toggle question-toggle collapsed" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question9" style="cursor: pointer;">
                  <h4 class="panel-title">
                    <a  class="ing">Q:  Kapan dan di mana pengambilan SERTIFIKAT ?</a>
                  </h4>

                </div>
                <div id="question9" class="panel-collapse collapse" style="height: 0px;">
                  <div class="panel-body">
                    <p class="answer-question" style="text-align:left;">
                      Sertifikat <b>SEMNASTI 2019</b> akan dibagikan setelah acara selesai hari itu juga. <br>
                      Pada    : Sabtu, 4 Mei 2019 <br>
                      Tempat  : Aula Gedung E Lantai 3 Universitas Dian Nuswantoro Semarang.
                    </p>
                  </div>
                </div>
              </div>
              <div class="panel panel-default ">
                <div class="panel-heading accordion-toggle question-toggle collapsed" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question10" style="cursor: pointer;">
                  <h4 class="panel-title">
                    <a  class="ing">Q: Apakah SEMNASTI 2019 hanya ditujukan untuk mahasiswa UDINUS saja ?</a>
                  </h4>

                </div>
                <div id="question10" class="panel-collapse collapse" style="height: 0px;">
                  <div class="panel-body">
                    <p class="answer-question" style="text-align:left;">
                      Tidak, Seminar Nasional Teknik Informatika 2019 ditujukan untuk semua kalangan atau untuk umum.
                    </p>
                  </div>
                </div>
              </div>
              <div class="panel panel-default ">
                <div class="panel-heading accordion-toggle question-toggle collapsed" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question11" style="cursor: pointer;">
                  <h4 class="panel-title">
                    <a  class="ing">Q: Apa akun official SEMNASTI 2019 ?</a>
                  </h4>

                </div>
                <div id="question11" class="panel-collapse collapse" style="height: 0px;">
                  <div class="panel-body">
                    <p class="answer-question" style="text-align:left;">
                      Informasi mengenai Seminar Nasional Teknik Informatika 2018 hanya akan kami infokan melalui official account kami, diantaranya :<br>
                      - Web : <a href="http://hmti.dinus.ac.id/semnasti" target="_blank" style="color:rgb(249, 172, 52)">https://hmti.dinus.ac.id/semnasti </a><br>
                      - Twittter : <a href="http://twitter.com/semnasti_hmti" target="_blank" style="color:rgb(249, 172, 52)">@semnasti_hmti</a><br>
                      - Instagram : <a href="http://www.instagram.com/semnasti/" target="_blank" style="color:rgb(249, 172, 52)"> @semnasti</a><br>
                      - Facebook : <a href="http://hmti.dinus.ac.id/semnasti/" target="_blank" style="color:rgb(249, 172, 52)">semnastihmti</a><br>
                      - Email : semnasti.hmti@gmail.com
                    </p>
                  </div>
                </div>
              </div>

            </div>
            <!--/panel-group-->
          </div>

        </div>
      </div>
    </div>

    <!-- <div id="sponsor" class="home-section bg-white wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">
    <div class="container">
    <div class="row">
    <div class="col-md-10 col-md-offset-1">
    <div class="section-heading">
    <h2>OUR SPONSORS AND MEDIA PARTNERS</h2>
    <div class="row">
    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
    <div class="box-team wow bounceInDown" data-wow-delay="0.1s">
    <img src="<?php echo base_url();?>assets/img/team/a.png" alt="" class="img-responsive" />
    <h4>My Republik</h4>
  </div>
</div>
<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3" data-wow-delay="0.3s">
<div class="box-team wow bounceInDown">
<img src="<?php echo base_url();?>assets/img/team/a.png" alt="" class="img-responsive" />
<h4>Kompas</h4>
</div>
</div>
<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3" data-wow-delay="0.5s">
<div class="box-team wow bounceInDown">
<img src="<?php echo base_url();?>assets/img/team/a.png" alt="" class="img-responsive" />
<h4>DinusTech</h4>
</div>
</div>
<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3" data-wow-delay="0.7s">
<div class="box-team wow bounceInDown">
<img src="<?php echo base_url();?>assets/img/team/a.png" alt="" class="img-responsive" />
<h4>Indoprinting</h4>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
-->
<div id="contact" class="home-section spacer wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="color-light">
          <!-- <h2 class="wow bounceInDown" data-wow-delay="0s">MARK YOUR CALENDAR</h2>
          <p class="lead wow bounceInUp" data-wow-delay="1s">10 April 2018</p> -->
        </div>
      </div>
    </div>
  </div>
</div>
<?php include_once('layouts/partials/footer.php');  ?>
<script type="text/javascript">
var TxtType = function (el, toRotate, period) {
  this.toRotate = toRotate;
  this.el = el;
  this.loopNum = 0;
  this.period = parseInt(period, 10) || 1000;
  this.txt = '';
  this.tick();
  this.isDeleting = false;
};

TxtType.prototype.tick = function () {
  var i = this.loopNum % this.toRotate.length;
  var fullTxt = this.toRotate[i];

  if (this.isDeleting) {
    this.txt = fullTxt.substring(0, this.txt.length - 1);
  } else {
    this.txt = fullTxt.substring(0, this.txt.length + 1);
  }

  this.el.innerHTML = '<span class="wrap">' + this.txt + '</span>';

  var that = this;
  var delta = 200 - Math.random() * 100;

  if (this.isDeleting) {
    delta /= 2;
  }

  if (!this.isDeleting && this.txt === fullTxt) {
    delta = this.period;
    this.isDeleting = true;
  } else if (this.isDeleting && this.txt === '') {
    this.isDeleting = false;
    this.loopNum++;
    delta = 500;
  }

  setTimeout(function () {
    that.tick();
  }, delta);
};

window.onload = function () {
  var elements = document.getElementsByClassName('typewrite');
  for (var i = 0; i < elements.length; i++) {
    var toRotate = elements[i].getAttribute('data-type');
    var period = elements[i].getAttribute('data-period');
    if (toRotate) {
      new TxtType(elements[i], JSON.parse(toRotate), period);
    }
  }
  // INJECT CSS
  var css = document.createElement("style");
  css.type = "text/css";
  css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #2f2f2f;color:#2f2f2f;}";
  document.body.appendChild(css);
};
</script>
</body>
</html>
