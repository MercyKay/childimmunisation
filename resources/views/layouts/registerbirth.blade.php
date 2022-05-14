@extends('layouts.index')


@section('content-header')

       
@endsection

@section('content')

       

                        

<div id="page-wrapper">
  <div class="row">
    <div class="col-lg-12">
      <h3 class="text-left"> Child Registration</h3>
      <hr>
      <form method="post" action="">
      	<div class="col-lg-12">
      	<div class="alert alert-primary" role="alert">
		  <strong>CHILD INFORMATION</strong><br>
		</div>
		</div>
      	<div class="col-lg-6">
		    <label>Birth Notification No</label>
		    <input type="number" required class="form-control" name="notification_no" placeholder="Enter Birth Notification No">
		</div>
		<div class="col-lg-6">
		    <label>Registration Date [Month-Day-Year]</label>
		    <input type="date" required class="form-control" name="reg_date">
		</div>
		<div class="col-lg-8">
		<br>
		    <label>First Name</label>
		    <input type="text" required class="form-control" name="firstname" placeholder="Enter Child Last Name">
		</div>
        <div class="col-lg-8">
		<br>
		    <label>Last Name</label>
		    <input type="text" required class="form-control" name="lastname" placeholder="Enter Child Last Name">
		</div>
        
		<div class="col-lg-4">
		<br>
		    <label>Gender: </label>
		    <select class="form-control" name="gender">
			  <option value="M">Male</option>
			  <option value="F">Female</option>
			  <option value="O">Other</option>
			</select>
		</div>
		<div class="col-lg-12">
		<br>
		    <label>Date of Birth [Month-Day-Year]</label>
		    <input type="date" required class="form-control" name="date_of_birth">
		</div>
		<div class="col-lg-12">
		<br>
		    <label>Birth Facility</label>
		    <input type="text" min="1" class="form-control" name="birth_facility" placeholder="Enter Birth Facility">
		</div>
		<div class="col-lg-12">
		<br>
		    <label>Mother Name</label>
		    <input type="text" required class="form-control" name="mother_name" placeholder="Enter Child Mother Name">
		</div>
        <div class="col-lg-12">
		<br>
		    <label>Mother ID NO</label>
		    <input type="integer" required class="form-control" name="mother_id" placeholder="Enter Child Mother ID No">
		</div>
        <div class="col-lg-6">
		    <label>Mother Phone No.</label>
		    <input type="number" required class="form-control" name="mother_no" placeholder="Enter Mother's Phone No.">
		</div>
		<div class="col-lg-12">
		<br>
		    <label>Father Name</label>
		    <input type="text" required class="form-control" name="father_name" placeholder="Enter Child's Father Name">
		</div>
        <div class="col-lg-12">
		<br>
		    <label>Father ID NO</label>
		    <input type="number" required class="form-control" name="father_id" placeholder="Enter  Father's ID No">
		</div>
        <div class="col-lg-6">
		    <label>Mother Phone No.</label>
		    <input type="number" required class="form-control" name="father_no" placeholder="Enter Father's Phone No.">
		</div>
        
		<div class="col-lg-6">
		<br>
		    <label>Weight</label>
		    <input type="decimal" required class="form-control" name="weight" placeholder="Enter Child's Weight">
		</div>
		<div class="col-lg-6">
		<br>
		    <label>Height</label>
		    <input type="decimal" required class="form-control" name="height" placeholder="Enter Child's Height">
		</div>
		<div class="col-lg-12">
		<br>
		    <label>Gestation</label>
		    <input type="number"  class="form-control" name="gestation" placeholder="Enter Gestation period" >
		</div>
		
		<div class="col-lg-4">
		<br>			
								<label>Birth County</label>
								

								<div class="col-md-6">
									<select class="form-control" name="division">
										<option>Mombasa </option>
										<option>Kwale </option>
										<option>Kilifi </option>
										<option>Tana River </option>
										<option>Lamu </option>
										<option>Taita Taveta </option>
										<option> Garissa</option>
										<option> Wajir</option>
										<option> Mandera</option>
										<option>Marsabit </option>
										<option>Isiolo </option>
										<option> Meru</option>
										<option>Tharaka-Nithi </option>
										<option> Embu</option>
										<option> Kitui</option>
										<option>Machakos </option>
										<option>Makueni </option>
										<option>Nyandarua </option>
										<option>Nyeri </option>
										<option>Kirinyaga</option>
										<option>Murang’a </option>
										<option>Kiambu </option>
										<option>Turkana </option>
										<option>West Pokot </option>
										<option>Samburu </option>
										<option> Trans-Nzoia</option>
										<option>Uasin Gishu </option>
										<option>Elgeyo-Marakwet</option>
										<option>Nandi </option>
										<option>Baringo </option>
										<option> Laikipia</option>
										<option>Nakuru </option>
										<option> Narok</option>
										<option>Kajiado</option>
										<option> Kericho</option>
										<option>Bomet</option>
										<option>Kakamega </option>
										<option> Vihiga</option>
										<option> Bungoma</option>
										<option>Busia </option>
										<option>Siaya </option>
										<option>Kisumu </option>
										<option>Homa Bay </option>
										<option> Migori</option>
										<option> Kisii</option>
										<option>Nyamira </option>
										<option>Nairobi </option>
										
									</select>
								</div>
							</div>
		<div class="col-lg-4">
			<br>
								
								<label>Resident County</label>
								

								<div class="col-md-6">
									<select class="form-control" name="division">
									<option>Mombasa </option>
										<option>Kwale </option>
										<option>Kilifi </option>
										<option>Tana River </option>
										<option>Lamu </option>
										<option>Taita Taveta </option>
										<option> Garissa</option>
										<option> Wajir</option>
										<option> Mandera</option>
										<option>Marsabit </option>
										<option>Isiolo </option>
										<option> Meru</option>
										<option>Tharaka-Nithi </option>
										<option> Embu</option>
										<option> Kitui</option>
										<option>Machakos </option>
										<option>Makueni </option>
										<option>Nyandarua </option>
										<option>Nyeri </option>
										<option>Kirinyaga</option>
										<option>Murang’a </option>
										<option>Kiambu </option>
										<option>Turkana </option>
										<option>West Pokot </option>
										<option>Samburu </option>
										<option> Trans-Nzoia</option>
										<option>Uasin Gishu </option>
										<option>Elgeyo-Marakwet</option>
										<option>Nandi </option>
										<option>Baringo </option>
										<option> Laikipia</option>
										<option>Nakuru </option>
										<option> Narok</option>
										<option>Kajiado</option>
										<option> Kericho</option>
										<option>Bomet</option>
										<option>Kakamega </option>
										<option> Vihiga</option>
										<option> Bungoma</option>
										<option>Busia </option>
										<option>Siaya </option>
										<option>Kisumu </option>
										<option>Homa Bay </option>
										<option> Migori</option>
										<option> Kisii</option>
										<option>Nyamira </option>
										<option>Nairobi </option>
									</select>
								</div>
							</div>
	
		<div class="col-lg-12">
		<br>
      	<div class="alert alert-dark" role="alert">
		  <strong>HEALTH ASSISTANT</strong>
		</div>
		</div>
		<div class="col-lg-6">
		    <label>Name</label>

		    <input type="text" required class="form-control" name="ha_name" placeholder="Enter Health Assitant Name">
		</div>
		<div class="col-lg-6">
		    <label>Lincense No.</label>
		    <input type="number" required class="form-control" name="license_no" placeholder="Enter License No.">
		</div>
		<div class="col-lg-12">
		<br>
			<button class="btn btn-primary" type="submit" name="submit_details">Register</button>
			

@endsection




