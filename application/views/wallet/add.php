<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-user-circle-o" aria-hidden="true"></i> Wallet Management
        <!-- <small>Add / Edit Task</small> -->
      </h1>
    </section>
    
    <section class="content">
    
        <div class="row">
            <!-- left column -->
            <div class="col-md-8">
              <!-- general form elements -->
                
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Wallet Details</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <?php $this->load->helper("form"); ?>
                    <form role="form" id="addWallet" action="walletstore" method="post">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-6">                                
                                    <div class="form-group">
                                        <label for="taskTitle">Total Rupees</label>
                                        <select class="form-control" name="total_rupees" onchange="walletcalculate();" id="rupees">
                                            <option>Select option</option>
                                            <option value="600">600</option>
                                            <option value="1100">1100</option>
                                        </select>
                                        <!-- <input oninput="walletcalculate();" type="text" class="form-control" id="rupees" name=""/> -->
                                    </div>
                                </div>
                                    <div class="col-md-6">    
                                    <div class="form-group">
                                        <label for="taskTitle">Admin</label>
                                        <input type="text" class="form-control" id="admin" name="admin_rupees" readonly />
                                    </div>
                                </div>
                                    
                                </div>
                                <div class="row">
                                <div class="col-md-6">                                
                                    <div class="form-group">
                                        <label>State</label>
                                    <input type="text" id="state" name="state_rupees" class="form-control" readonly>
                                        
                                    </div>
                                </div>
                                    <div class="col-md-6">    
                                    <div class="form-group">
                                        <label>District</label>
                                    <input type="text" id="district" name="district_rupees" class="form-control" readonly>
                                    </div>
                                </div>
                                    
                                </div>
                                <div class="row">
                                <div class="col-md-6">                                
                                    <div class="form-group">
                                       <label>Assistant</label>
                                    <input type="text" id="assistant" name="assistant_rupees" class="form-control" readonly>
                                        
                                    </div>
                                </div>
                                    <!-- <div class="col-md-6">    
                                    <div class="form-group">
                                        <label>District</label>
                                    <input type="text" id="district" name="" class="form-control" readonly>
                                    </div>
                                </div> -->
                                    
                                </div>
                                <!-- <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="description">Description</label>
                                        <textarea class="form-control required" id="description" name="description"></textarea>
                                    </div>
                                </div> -->
                            </div>

                            <!-- <div class="row">
                                <div class="col-sm-6 col-md-6">
                                    <label>State</label>
                                    <input type="text" id="state" name="" class="form-control" readonly>
                                </div>
                                <div class="col-sm-6">
                                    <label>District</label>
                                    <input type="text" id="district" name="" class="form-control" readonly>
                                </div>
                            </div> -->
                            <br>
                            <!-- <div class="row">
                                <div class="col-sm-6">
                                    <label>Assistant</label>
                                    <input type="text" id="assistant" name="" class="form-control" readonly>
                                </div>
                                <div class="col-sm-6">
                                    <label>District</label>
                                    <input type="text" name="" class="form-control">
                                </div>
                            </div> -->
                        </div><!-- /.box-body -->
    
                        <div class="box-footer">
                            <input type="submit" class="btn btn-primary" value="Submit" />
                            <!-- <input type="reset" class="btn btn-default" value="Reset" /> -->
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-4">
                <?php
                    $this->load->helper('form');
                    $error = $this->session->flashdata('error');
                    if($error)
                    {
                ?>
                <div class="alert alert-danger alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <?php echo $this->session->flashdata('error'); ?>                    
                </div>
                <?php } ?>
                <?php  
                    $success = $this->session->flashdata('success');
                    if($success)
                    {
                ?>
                <div class="alert alert-success alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <?php echo $this->session->flashdata('success'); ?>
                </div>
                <?php } ?>
                
                <div class="row">
                    <div class="col-md-12">
                        <?php echo validation_errors('<div class="alert alert-danger alert-dismissable">', ' <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button></div>'); ?>
                    </div>
                </div>
            </div>
        </div>    
    </section>
    
</div>


<script>
    function walletcalculate(){
        // alert('ok');

        var a = document.getElementById('rupees').value;
        var b = parseInt(a);
        if (b==600) {
        var b1 = b*(20/100);
        document.getElementById('admin').value=""+b1;
        var state = b*(3.5/100);
        document.getElementById('state').value=""+state;
        var dist = b*(5/100);
        document.getElementById('district').value=""+dist;
        var assist = b*(17/100);
        document.getElementById('assistant').value=""+assist;

    }
    else if(b==1100){
        var b2 = b*(20/100);
        document.getElementById('admin').value=""+b2;
        var b3 = b*(3/100);
        document.getElementById('state').value=""+b3;
        var b4 = b*(4.5/100);
        document.getElementById('district').value=""+b4;
        var b5 = b*(10/100);
        document.getElementById('assistant').value=""+b5;
    }
    }
</script>