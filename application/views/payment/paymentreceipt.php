


<style type="text/css">
	#receipt{
	margin: 36px;
    height: 12cm;
    width: 19cm;
	}
	#name{
	margin-top: -8.65cm;
    margin-left: 9cm;
    font-size: 22px;
    font-style: oblique;
    font-weight: bold;
	}
	#address{
	margin-top: 0.5cm;
    margin-left: 5cm;
    font-size: 20px;
    font-style: oblique;
    font-weight: bold;
	}
    #amount{
    margin-top: 0.5cm;
    margin-left: 9cm;
    font-size: 20px;
    font-style: oblique;
    font-weight: bold;
    }
    #amount1{
    margin-top: 1.5cm;
    margin-left: 5cm;
    font-size: 22px;
    font-style: oblique;
    font-weight: bold;
    }
    #date{
   margin-top: -7.2cm;
    margin-left: 16.2cm;
    font-size: 17px;
    font-style: oblique;
    font-weight: bold;
    } 
    #paymentid{
  margin-top: -0.4cm;
    margin-left: 3.2cm;
    font-size: 17px;
    font-style: oblique;
    font-weight: bold;
    }
    #number{
   margin-top: -0.6cm;
    margin-left: 16.5cm;
    font-size: 17px;
    font-style: oblique;
    font-weight: bold;
    }
   @media only screen and (max-width: 800px) {
  #receipt
  {
    margin: 0;
    height: 100%;
    width: 100%;
    }
    #name{
   margin-top: -4.2cm;
    margin-left: 4cm;
    font-size: 14px;
    font-style: oblique;
    font-weight: bold;
    }
    #address{
    margin-top: 0cm;
    margin-left: 2cm;
    font-size: 11px;
    font-style: oblique;
    font-weight: bold;
    }
    #amount{
       margin-top: -0.2cm;
    margin-left: 4cm;
    font-size: 13px;
    font-style: oblique;
    font-weight: bold;
    }
    #amount1{
    margin-top: 34px;
    margin-left: 2cm;
    font-size: 13px;
    font-style: oblique;
    font-weight: bold;
    }
    #date{
       margin-top: -150px;
    margin-left: 293px;
    font-size: 8px;
    font-style: oblique;
    font-weight: bold;
    } 
    #paymentid{
  margin-top: -15px;
    margin-left: 1.2cm;
    font-size: 13px;
    font-style: oblique;
    font-weight: bold;
    }
    #number{
   margin-top: -20px;
    margin-left: 300px;
    font-size: 10px;
    font-style: oblique;
    font-weight: bold;
    }
}
</style>



<div class="content-wrapper" id="printableArea">
   
    <section class="content-header">
      <h1>
        <i class="fa fa-tachometer" aria-hidden="true"></i> Payment
        <small>Control panel</small>
      </h1>
     
      <!-- <a href="javascript:void(0);" onclick="printPageArea('printableArea')">Print</a> -->
     <!--  <a href="<?=base_url();?>print_rcp" target="_blank" class="btn btn-success" style="align-items: left;">download</a> -->
      <button type="button" onclick="print();" class="btn btn-success">print</button>

    </section>
    <div class="container">
    <section class="row">
    	
        <div class="col-md-12 col-12 col-sm-12">
    	<img src="./assets/images/ricpt.jpg" id="receipt">

        <?php $id=$_SESSION['mobile'];

        $data=$this->db->query("select tbl_task.name as name,tbl_task.mobileno as mobileno,tbl_task.address as address,tbl_users.sending_payment_Amount as sending_payment_Amount,tbl_users.createdDtm as createdDtm,tbl_users.userId as id  from tbl_users join tbl_task where tbl_users.mobile='$id' and tbl_task.mobileno='$id'")->result();
        foreach ($data as $key ) {
          
        ?>
    	<p id="name"><?=$key->name;?></p>
    	<p id="address"><?=$key->address;?></p>
        <p id="amount"><?=$key->sending_payment_Amount;?>/-</p>
        <p id="amount1"><?=$key->sending_payment_Amount;?>/-</p>
        <p id="date"><?=$key->createdDtm;?></p>
        <p id="paymentid"><?php echo "1001".$key->id;?></p>
        <p id="number"><?php echo $key->mobileno;?></p>
      
    <?php } ?>
    </div>
    
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    </section>
</div>
</div>

</script>
