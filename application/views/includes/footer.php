
<style type="text/css">
    #donate{
     height: 114px;
    width: 117px;
    margin-top: -185px;
    border-radius: 54px;
    }
</style>
    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <?php if($_SESSION['rid']==17){?>
         
           <img src="assets/images/donate.gif" id="donate" data-toggle="modal" data-target="#exampleModalLong">
           <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Our Bank Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       
          <table class="table">
        <tr>
            <td>Account name</td>
            <td>- VIKAS SAMITI CHHINDAULI </td>
        </tr>
        <tr>
            <td>A/C</td>
            <td>- 50200081159914</td>
        </tr>
        <tr>
            <td>IFSC</td>
            <td>- HDFC0003123</td>
        </tr>
        <tr>
            <td>Branch</td>
            <td>- Bhoring Mahasamund</td>
        </tr>
      </table>
      <H3 style="color: red;">Scan And Pay</H3>
       <img src="assets/images/qrcard.png" style="height: 200px;width: 200px;">
  
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Ok</button>
       
      </div>
    </div>
  </div>
</div>
      <?php } else{?>
        <b>NGO</b> Admin System
      <?php } ?>
        </div>
        <strong>Copyright &copy; 2023 <a href="<?php echo base_url(); ?>">NGO</a>.</strong> All rights reserved.
    </footer>
    
    <script src="./assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="./assets/dist/js/adminlte.min.js" type="text/javascript"></script>
    <script src="./assets/dist/js/pages/dashboard.js" type="text/javascript"></script>
    <script src="./assets/js/jquery.validate.js" type="text/javascript"></script>
    <script src="./assets/js/validation.js" type="text/javascript"></script>

    <script type="text/javascript">
        var windowURL = window.location.href;
        pageURL = windowURL.substring(0, windowURL.lastIndexOf('/'));
        var x= $('a[href="'+pageURL+'"]');
            x.addClass('active');
            x.parent().addClass('active');
        var y= $('a[href="'+windowURL+'"]');
            y.addClass('active');
            y.parent().addClass('active');
    </script>
  </body>
</html>