<style>
    .text-danger{
        color:red !important;
    }
</style>
<div id="breadcrumb">
    <div class="container">
      <div class="breadcrumb">
        <li><a href="index.php">Home</a></li>
        <li>Contact</li>
      </div>
    </div>
  </div>

  <div class="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d3391.7444941807203!2d106.63642074488189!3d10.837220425152074!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1zMzYyLzEwMyBQaGFuIEh1eSDDjWNoLCBQMTIgUXXhuq1uIEfDsiBW4bqlcCwgVHAuSGNt!5e0!3m2!1svi!2s!4v1513690428061" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
  </div>

  <section id="contact-page">
    <div class="container">
      <div class="center">
        <h2>Gửi email cho chúng tôi</h2>
        <p>Gửi thắc mắc cho chúng tôi.</p>
      </div>
        <?php  if (isset($success)) { ?>
            <div class="alert alert-success text-center"><?=$success?></div>
        <?php
        }
      ?>
      <div class="row contact-wrap">
        <div class="status alert alert-success" style="display: none"></div>
        <div class="col-md-6 col-md-offset-3">
          <div id="sendmessage">Your message has been sent. Thank you!</div>
          <div id="errormessage"></div>
<!--          <form action="" method="post" role="form" class="contactForm">-->
            <?=form_open()?>
            <div class="form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Tên bạn" data-rule="minlen:4" data-msg="Ít nhất 4 ký tự" />
                <small id="passwordHelp" class="text-danger" style=" color:red !important;">
                   <?=form_error('name')?>
                </small>
            </div>
            <div class="form-group">
              <input type="email" class="form-control" name="email" id="email" placeholder="Email của bạn" data-rule="email" data-msg="Email không hợp lệ" />
                <small id="passwordHelp" class="text-danger" style=" color:red !important;">
                    <?=form_error('email')?>
                </small>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Tiêu đề" data-rule="minlen:4" data-msg="Ít nhất 8 kí tự" />
                <small id="passwordHelp" class="text-danger" style=" color:red !important;">
                    <?=form_error('subject')?>
                </small>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Tin nhắn"></textarea>
                <small id="passwordHelp" class="text-danger" style=" color:red !important;">
                    <?=form_error('message')?>
                </small>
            </div>
            <div class="text-center"><button type="submit" name="submit" class="btn btn-primary btn-lg" required="required">Gửi tin nhắn</button></div>
          <?=form_close()?>
        </div>
      </div>
      <!--/.row-->
    </div>
    <!--/.container-->
  </section>
  <!--/#contact-page-->
