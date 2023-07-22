<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<section class="">
  <div class="container" style="max-width: 700px;">
    <h3 class="bg-theme-colored p-15 mb-0 text-white">User Registration<span style="padding-left: 350px" onclick="closeWin();"> <button type="button" class="close" data-dismiss="modal">&times;</button></span></h3>
    <div class="section-content bg-white p-30">
      <div class="row">
        <div class="col-md-12">

          <form action="" method="post" enctype="multipart/form-data">
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Name <small>*</small></label>
                  <input name="user_name" type="text" placeholder="Enter Name" required="" class="form-control">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Email <small>*</small></label>
                  <input name="user_email" class="form-control required email" type="email" placeholder="Enter Email">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Password <small>*</small></label>
                  <input name="user_password" type="password" class="form-control">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Confirm Password<small>*</small></label>
                  <input name="user_confirm_password" class="form-control" type="password">
                </div>
              </div>
            </div>
            
            <div class="form-group">
              <label for="form_attachment">Image Upload</label>
              <input id="user_image" name="form_attachment" class="file" type="file" multiple data-show-upload="false" data-show-caption="true">
              <small>Maximum upload file size: 2 MB</small>
            </div>
            <div class="form-group">
              <input name="form_botcheck" class="form-control" type="hidden" value="" />
              <button type="submit" class="btn btn-block btn-dark btn-theme-colored btn-sm mt-20 pt-10 pb-10" data-loading-text="Please wait...">Apply Now</button>
            </div>
          </form>
          <!-- Job Form Validation-->
          <!-- <script type="text/javascript">
            $("#volunteer_apply_form").validate({
              submitHandler: function(form) {
                var form_btn = $(form).find('button[type="submit"]');
                var form_result_div = '#form-result';
                $(form_result_div).remove();
                form_btn.before('<div id="form-result" class="alert alert-success" role="alert" style="display: none;"></div>');
                var form_btn_old_msg = form_btn.html();
                form_btn.html(form_btn.prop('disabled', true).data("loading-text"));
                $(form).ajaxSubmit({
                  dataType:  'json',
                  success: function(data) {
                    if( data.status == 'true' ) {
                      $(form).find('.form-control').val('');
                    }
                    form_btn.prop('disabled', false).html(form_btn_old_msg);
                    $(form_result_div).html(data.message).fadeIn('slow');
                    setTimeout(function(){ $(form_result_div).fadeOut('slow') }, 6000);
                  }
                });
              }
            });
          </script> -->


        </div>
      </div>
    </div>
  </div>
</section>