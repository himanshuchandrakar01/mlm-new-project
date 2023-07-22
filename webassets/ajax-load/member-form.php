<section class="">
  <div class="container" style="max-width: 700px;">
    <h3 class="bg-theme-colored p-15 mb-0 text-white">Member Registration <span style="padding-left: 350px"> <button type="button" class="close">X</button></span></h3>

    <script>
      function myfunction(){
        window.close();
      }
    </script>
    <div class="section-content bg-white p-30">
      <div class="row">
        <div class="col-md-12">
          <form action="" method="post" enctype="multipart/form-data"> 
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Name <small>*</small></label>
                  <input name="name" type="text" placeholder="Enter Name" required="" class="form-control">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Email <small>*</small></label>
                  <input name="email" class="form-control required email" type="email" placeholder="Enter Email">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Password <small>*</small></label>
                  <input name="password" type="password"  required="" class="form-control">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Confirm Password<small>*</small></label>
                  <input name="confirm_password" class="form-control required" type="password">
                </div>
              </div>
            </div>
            <div class="row">               
              <div class="col-sm-6">
                <div class="form-group">
                  <div class="form-group col-md-6 col-sm-6">
    <label for="inputState">State</label>
    <select class="form-control" id="inputState" name="state">
                        <option value="SelectState">Select State</option>
                        <option value="Andra Pradesh">Andra Pradesh</option>
                        <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                        <option value="Assam">Assam</option>
                        <option value="Bihar">Bihar</option>
                        <option value="Chhattisgarh">Chhattisgarh</option>
                        <option value="Goa">Goa</option>
                        <option value="Gujarat">Gujarat</option>
                        <option value="Haryana">Haryana</option>
                        <option value="Himanchal Pradesh">Himanchal Pradesh</option>
                        <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                        <option value="Jharkhand">Jharkhand</option>
                        <option value="Karnataka">Karnataka</option>
                        <option value="Kerala">Kerala</option>
                        <option value="Madhya Pradesh">Madhya Pradesh</option>
                        <option value="Maharashtra">Maharashtra</option>
                        <option value="Manipur">Manipur</option>
                        <option value="Meghalaya">Meghalaya</option>
                        <option value="Mizoram">Mizoram</option>
                        <option value="Nagaland">Nagaland</option>
                        <option value="Orissa">Orissa</option>
                        <option value="Punjab">Punjab</option>
                        <option value="Rajasthan">Rajasthan</option>
                        <option value="Sikkim">Sikkim</option>
                        <option value="Tamil Nadu">Tamil Nadu</option>
                        <option value="Telangana">Telangana</option>
                        <option value="Tripura">Tripura</option>
                        <option value="Uttaranchal">Uttaranchal</option>
                        <option value="Uttar Pradesh">Uttar Pradesh</option>
                        <option value="West Bengal">West Bengal</option>
                        <option disabled style="background-color:#aaa; color:#fff">UNION Territories</option>
                        <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                        <option value="Chandigarh">Chandigarh</option>
                        <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                        <option value="Daman and Diu">Daman and Diu</option>
                        <option value="Delhi">Delhi</option>
                        <option value="Lakshadeep">Lakshadeep</option>
                        <option value="Pondicherry">Pondicherry</option>
                      </select>
                  </div>
                 
                  <!-- <label for="form_sex">State <small>*</small></label>
                  <select id="form_sex" name="form_sex" class="form-control required">
                    <option value="Male">Chhattisgarh</option>
                    <option value="Female">Odisha</option>
                    <option value="Female">Madhya Pradesh</option>
                    <option value="Female">Andhra Pradesh</option>
                    <option value="Female">Bihar</option>

                  </select>
 -->                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="form_branch">District<small>*</small></label>
                  <input type="text" name="district" class="form-control" required>
                  <!-- <select id="form_branch" name="form_branch" class="form-control required">
                    <option value="UK">Raipur</option>
                    <option value="USA">Bilaspur</option>
                    <option value="Australia">Rajnandgaon</option>
                  </select> -->
                </div>
              </div>
            </div>
            <!-- <div class="form-group">
              <label>Message <small>*</small></label>
              <textarea name="form_message" class="form-control required" rows="5" placeholder="Your cover letter/message sent to the employer"></textarea>
            </div> -->
            <div class="form-group">
              <label for="form_attachment">Image Upload</label>
              <input id="form_attachment" name="attach_doc" class="file" type="file" multiple data-show-upload="false" data-show-caption="true">
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