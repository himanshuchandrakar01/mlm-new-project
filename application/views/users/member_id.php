
<style type="text/css">
	#img_id{
	width: 90%;
    height: 70%;
	}
	#table{
	margin-top: -250px;
    margin-left: 31px;
	}
</style>


<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-users"></i> User Id Card
        <button onclick="window.print()" class="btn btn-danger">Print</button> 
   
      </h1>
      </section>
     
<div id="wrapper">
	<div class="container-fluid">
		<div class="col-md-3"></div>
		<div class="col-md-6">
			<?php $mob=$_SESSION['mobile'];

				$data=$this->db->query("select * from tbl_users where mobile='$mob'")->result();
				foreach ($data as $key ) {
			
				?>
			
				<img src="assets/images/memberId1.jpg" class="img-fluid w-100 h-100" id="img_id">

				<table id="table" class="table">
					<tr>
						<td>Opr. Area</td>
						<td>:</td>
						<td><?=$key->op_area;?></td>
					</tr>
					<tr>
						<td>Id No.</td>
						<td>:</td>
						<td><?=$key->mobile;?></td>
					</tr>
					<tr>
						<td>Valid Upto</td>
						<td>:</td>
						<td></td>
					</tr>
					<tr>
						<td>Address</td>
						<td>:</td>
						<td><?=$key->address;?> vuhuhv uhvusyh vubshuihbs buhiouhbnbsguh vygy vygayv</td>
					</tr>
				</table>


				<?php } ?>
			<br><br><br><br>
		</div>
		<div class="col-md-3"></div>
	</div>
</div>

</div>
