<style type="text/css">
    #profile{
        box-shadow: 1px 1px 9px black;
    }
    #profile-img{
        height: 4cm;
        width: 4cm;
    }
</style>


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-user-circle-o" aria-hidden="true"></i>User Profile
        
      </h1>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-12 col-md-6 text-right">
                <!-- <div class="form-group">
                    <a class="btn btn-primary" href="<?php echo base_url(); ?>payment/add"><i class="fa fa-plus"></i> Add Payment</a>
                </div> -->
                <?php $id=$_SESSION['mobile'];
                $this->db->where("mobileno=",$id);
                $data=$this->db->get("tbl_task")->result();
                foreach ($data as $data) {
                  
                ?>
                <table class="table bg-primary" id="profile">
                     <tr class="bg-sucess" style="background-color: white;color: blue;">
                        <td colspan="2"><center>Profile Information</center></td>
                        
                    </tr> 
                    <tr>
                        <td>Id</td>
                        <td><?=$data->mobileno;?></td>
                    </tr>
                    <tr>
                        <td>Name</td>
                        <td><?=$data->name;?></td>
                    </tr>
                    <tr>
                        <td>Apply for</td>
                        <td><?=$data->apply_for;?></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><?=$data->email;?></td>
                    </tr>
                    <tr>
                        <td>mobile</td>
                        <td><?=$data->mobileno;?></td>
                    </tr>
                    <tr>
                        <td>D.O.B</td>
                        <td><?=$data->dob;?></td>
                    </tr>
                    <tr>
                        <td>S/D/W of</td>
                        <td><?=$data->father_husbandname;?></td>
                    </tr>
                    <tr>
                        <td>Valid Upto</td>
                        <td><?php
                    $date_time = $data->created_at;
                    $new_date = date("d-m-Y",strtotime($date_time));
                    echo $new_date;
                    ?></td>
                    </tr>
                    <tr>
                        <td>Valid To</td>
                        <td><?php
                        $newDate = date('d-m-Y', strtotime($new_date. ' + 3 months'));
                         echo $newDate;
                         ?></td>
                    </tr>
                    <tr>
                        <td>Aadhar No.</td>
                        <td><?=$data->aadharno?></td>
                    </tr>
                    <tr>
                        <td>Gender</td>
                        <td><?=$data->gender?></td>
                    </tr><tr>
                        <td>Category</td>
                        <td><?=$data->rashan_card;?></td>
                    </tr><tr>
                        <td>Blood Group</td>
                        <td><?=$data->blood_group;?></td>
                    </tr><tr>
                        <td>Address</td>
                        <td><?=$data->address;?><br>
                            City - <?=$data->country;?><br>
                            State- <?=$data->state;?><br>
                            Pincode-<?=$data->pincode;?></td>
                    </tr>
                    <tr class="bg-sucess" style="background-color: white;color: blue;">
                        <td colspan="2"><center>Documents</center></td>
                        
                    </tr> 
                    <tr>
                        <td>Profile Image</td>
                        <td><img src="./uploads/<?=$data->profilepic;?>" id="profile-img"><br>
                            <a href="./uploads/<?=$data->profilepic;?>" class="btn btn-success"target="_blank">view</a></td>
                    </tr> 
                    <tr>
                        <td>Aadhar Image(front)</td>
                        <td><img src="./uploads/<?=$data->frontcard;?>" id="profile-img"><br>
                            <a href="./uploads/<?=$data->frontcard;?>" class="btn btn-success"target="_blank">view</a></td>
                    </tr> 
                    <tr>
                        <td>Aadhar Image(back)</td>
                        <td><img src="./uploads/<?=$data->backcard;?>" id="profile-img"><br>
                            <a href="./uploads/<?=$data->backcard;?>" class="btn btn-success"target="_blank">view</a></td>
                    </tr> 
                    <tr>
                        <td>Id Card Image</td>
                        <td>
                            Id card -<?=$data->idcard;?><br>
                            <img src="./uploads/<?=$data->otherdoc;?>" id="profile-img"><br>
                            <a href="./uploads/<?=$data->otherdoc;?>" class="btn btn-success" target="_blank">view</a></td>
                    </tr> 
                </table>
            <?php } ?>
            </div>
            <div class="col-12 col-md-6">
                
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                
            </div>
        </div>
    </section>
</div>