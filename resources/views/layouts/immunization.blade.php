@extends('layouts.index')


@section('content-header')

        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Immunization Testing 1</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Immunization Testing 2</li>
            </ol>

          </div><!-- /.col -->
        </div><!-- /.row -->
    <!-- /.content-header -->
@endsection

@section('content')

        <!-- Info boxes -->
        <div class="row">
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
            </div>
          </div>
        </div>   
        
        
        <section class="content-header">
        <h1>
            Immunization Details
        </h1>
        <ol class="breadcrumb">
            
            <li class="active">Update Details</li>
        </ol>
    </section>

        <!-- Main content -->
    <section class="content">

    <form role="form" >
            
                        <div class="form-group">
                            <label for="immunization_date">Imunization Date</label>
                            <input type="date" class="form-control" id="immunization_date" name='immunization_date' placeholder="Enter Immunization Date">
                        </div>
                        <div class="form-group">
                                <label for="caregiver_name">Caregiver Name</label>
                                <input type="text" class="form-control" id="caregiver_name" name='caregiver_name' placeholder="Enter Caregiver Name">
                            </div>
                            <div class="form-group">
                                <label for="height">Height</label>
                                <input type="decimal" class="form-control" id="height" name='height' placeholder="Enter Height">
                            </div>

                            <div class="form-group">
                                <label for="height">Weight</label>
                                <input type="decimal" class="form-control" id="weight" name='weight' placeholder="Enter Weight">
                            </div>

    </form>

        <!-- Small boxes (Stat box) -->
        <div class="row">

            <div class="col-md-12">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                    </div>
                    <!-- /.box-header -->
                    <table class="table table-bordered" id="list-students">
                        <thead>
                            <tr>
                                <th>Vaccine Name</th>
                                <th>Detailed Date</th>
                                <th>Comment</th>
                            
                            </tr>
                        </thead>
                    </table>
                </div>
                <!-- /.box -->

            </div>

        </div>
        <!-- /.row -->

    </section>
    <!-- /.content -->
</div>


<div id="page-wrapper">
  <div class="row">
    <div class="col-lg-12">
      <h3 class="text-left">Vaccination Update for Child</h3>
      <hr>
      <form method="post" action="">
        <!-- SEARCH OPTION STARTS -->
        <div class="col-lg-12">
        <div class="alert alert-danger" role="alert">
            <small>Some information cannot be modified for security purpose.</small>
        </div>
        
        </div>
        <div class="col-lg-6">
            <label></label>
            <input type="number" required class="form-control" name="" placeholder="Enter unique ID" >
        </div>
        <div class="col-lg-6">
            <label></label>
            <input class="btn btn-warning btn-md btn-block" type="submit" name="display_details" value="DISPLAY">
        </div>
        <!-- SEARCH OPTION ENDS -->
        <!-- CHILD RECORDS STARTS -->
        <div class="col-lg-12">
        <br>
        <div class="alert alert-success" role="alert">
          <strong>CHILD INFORMATION</strong>
        </div>
        </div>
        <div class="col-lg-6">
        <br>
            <label>Registration No</label>
            <input type="number" readonly class="form-control" name="reg_no" placeholder="" >
        </div>
        <div class="col-lg-6">
        <br>
            <label>Registration Date</label>
            <input type="date" readonly class="form-control" name="reg_date" >
        </div>
        <div class="col-lg-5">
        <br>
            <label>Name</label>
            <input type="text" readonly class="form-control" name="name" placeholder="" >
        </div>
        
        
        
        <!-- CHILD RECORDS END -->
        <!-- HEALTH ASSISTANT RECORDS STARTS -->
        <div class="col-lg-12">
        <br>
        <div class="alert alert-success" role="alert">
          <strong>HEALTH ASSISTANT</strong>
        </div>
        </div>
        
        <!-- HEALTH ASSISTANT RECORDS END -->
        <!-- VACCINATION RECORDS STARTS -->
        <div class="col-lg-12">
        <br>
        <div class="alert alert-warning" role="alert">
            <strong>VACCINATION DETAILS</strong>
        </div>
        <div class="table-responsive">
        <div class="table table-sm">
        <table class="table table-bordered table-striped" width="100%">
        <thead>
            <tr>
                <th width="20%">Vaccine</th>
                <th width="15%">Received</th>
                <th width="65%">Comment</th>
            </tr>
        </thead>
            <tr>
                <td>
                    BCG<br>
                    <small>
                        <strong>
                        Due: 
                        </strong>
                        
                    </small>
                </td>
                <td>
                    <input   type="date" class="form-control" name="bcg_receive_date" value="">
                </td>
                <td>
                    <input type="text" class="form-control" name="bcg_comment" placeholder="Please comment if needed." >
                </td>
            </tr>
            <tr>
                <td>
                    PENTA-1<br>
                    <small>
                        <strong>
                        Due: 
                        </strong>
                        
                    </small>
                </td>
                <td>
                    <input  type="date" class="form-control" name="penta1_receive_date" value="">
                </td>
                <td>
                    <input type="text" class="form-control" name="penta1_comment" placeholder="Please comment if needed.">
                </td>
            </tr>
            <tr>
                <td>
                    BOPV-1<br>
                    <small>
                        <strong>
                        Due: 
                        </strong>
                        
                    </small>
                </td>
                <td>
                    <input  type="date" class="form-control" name="bopv1_receive_date" >
                </td>
                <td>
                    <input type="text" class="form-control" name="bopv1_comment" placeholder="Please comment if needed." value="">
                </td>
            </tr>
            <tr>
                <td>
                    PCV-1<br>
                    <small>
                        <strong>
                        Due: 
                        </strong>
                        
                    </small>
                </td>
                <td>
                    <input type="date" class="form-control" name="pcv1_receive_date" value="">
                </td>
                <td>
                    <input type="text" class="form-control" name="pcv1_comment" placeholder="Please comment if needed." >
                </td>
            </tr>
            <tr>
                <td>
                    IPV-1<br>
                    <small>
                        <strong>
                        Due: 
                        </strong>
                        
                    </small>
                </td>
                <td>
                    <input  type="date" class="form-control" name="ipv1_receive_date" value="">
                </td>
                <td>
                    <input type="text" class="form-control" name="ipv1_comment" placeholder="Please comment if needed." value="">
                </td>
            </tr>
            <tr>
                <td>
                    PENTA-2<br>
                    <small>
                        <strong>
                        Due: 
                        </strong>
                        
                    </small>
                </td>
                <td>
                    <input type="date" class="form-control" name="penta2_receive_date" value="">
                </td>
                <td>
                    <input type="text" class="form-control" name="penta2_comment" placeholder="Please comment if needed." value="">
                </td>
            </tr>
            <tr>
                <td>
                    BOPV-2<br>
                    <small>
                        <strong>
                        Due: 
                        </strong>
                        
                    </small>
                </td>
                <td>
                    <input  type="date" class="form-control" name="bopv2_receive_date" value="">
                </td>
                <td>
                    <input type="text" class="form-control" name="bopv2_comment" placeholder="Please comment if needed." value="">
                </td>
            </tr>
            <tr>
                <td>
                    PCV-2<br>
                    <small>
                        <strong>
                        Due: 
                        </strong>
                        
                    </small>
                </td>
                <td>
                    <input  type="date" class="form-control" name="pcv2_receive_date" value="">
                </td>
                <td>
                    <input type="text" class="form-control" name="pcv2_comment" placeholder="Please comment if needed." value="">
                </td>
            </tr>
            <tr>
                <td>
                    PENTA-3<br>
                    <small>
                        <strong>
                        Due: 
                        </strong>
                    
                        
                    </small>
                </td>
                <td>
                    <input  type="date" class="form-control" name="penta3_receive_date" value="">
                </td>
                <td>
                    <input type="text" class="form-control" name="penta3_comment" placeholder="Please comment if needed." value="">
                </td>
            </tr>
            
           
            
            
                
            
        </table>
        </div>
        <div class="text-right">
        <a class="btn btn-info btn-lg" href="" target="_blank">VIEW SCHEDULE</a>
        <input class="btn btn-success btn-lg" type="submit" name="update_details" value="UPDATE">
        </div>
        <br>
        </div>
        </div>
        <!-- VACCINATION RECORDS END -->
      </form>
    </div>
  </div>
</div>
@endsection
   
  