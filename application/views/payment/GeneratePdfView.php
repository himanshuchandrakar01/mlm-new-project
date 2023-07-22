<!DOCTYPE html>
<html>
<head>
    <title>Receipt</title>
    <style type="text/css">
    #receipt{
   /* margin: 36px;*/
    height: 12cm;
    width: auto;
    background-image: url('https://vikassamiti.org/assets/images/ricpt.jpg');background-size: cover;
    }
    pre{
        /*font-size: 18px;*/
        font-weight: bold;
    }
    #name{
   
    /*margin-left: 9cm;
    font-size: 22px;
    font-style: oblique;
    font-weight: bold;*/
    }
    #address{
   /* margin: 4cm;*/
    /*margin-left: 5cm;
    font-size: 20px;
    font-style: oblique;
    font-weight: bold;*/
    }
    #amount{
   /* margin-top: 0.5cm;
    margin-left: 9cm;
    font-size: 20px;
    font-style: oblique;
    font-weight: bold;*/
    }
    #amount1{
    /*margin-top: 1.5cm;
    margin-left: 5cm;
    font-size: 22px;
    font-style: oblique;
    font-weight: bold;*/
    }
    #date{
   /*margin-top: -7.2cm;
    margin-left: 16.2cm;
    font-size: 17px;
    font-style: oblique;
    font-weight: bold;
    color: pink;*/
    }

</style>
</head>
<body>
    <br><br><br>

        <div style="" id="receipt">
        <?php $id=$_SESSION['mobile'];

        $data=$this->db->query("select tbl_task.name as name,tbl_task.address as address,tbl_users.sending_payment_Amount as sending_payment_Amount,tbl_users.createdDtm as createdDtm  from tbl_users join tbl_task where tbl_users.mobile='$id' and tbl_task.mobileno='$id'")->result();
        foreach ($data as $key ) {
          
        ?>
        <br><br><br><br><br>
        <pre>                                                     <?=$key->createdDtm;?></pre>
        <pre>                                

                           <?=$key->name;?></pre>

        <pre>                                 
                    <?=$key->address;?></pre>
        <pre>             
                         <?=$key->sending_payment_Amount;?>/-</pre>
        <pre>             


            <?=$key->sending_payment_Amount;?>/-</pre>
        
    <?php } ?>

   

</div>
</body>
</html>








