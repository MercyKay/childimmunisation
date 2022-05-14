@extends('layouts.index')




@section('content')
        
        <div id="page-wrapper">
	<div class="row">
  </div>
  <div class="row">
    <div class="col-lg-12">
      <h1>Dashboard</h1>
      <hr>
    </div>
    <!-- Info boxes -->
        
    <div class="row">
          <div class="col-12 col-sm-6 col-md-3">
          <div class="small-box bg-info">
  <div class="inner">
    <h3>Mother And Child </h3>
    <p>Mother And Child Health Handbook</p>
  </div>
  <div class="icon">
    <i class="fas fa-book"></i>
  </div>
  <a href="https://familyhealth.go.ke/wp-content/uploads/2020/11/Mother-Child-Health-Handbook-MOH-September-2020.pdf" class="small-box-footer">
    View now <i class="fas fa-arrow-circle-right"></i>
  </a>
</div>
          </div>
          <div class="col-12 col-sm-6 col-md-3">
          <div class="small-box bg-info">
  <div class="inner">
    <h3>OutBreak</h3>
    <p>Get Your Child immmunized</p>
  </div>
  <div class="icon">
    <i class="fas fa-injection"></i>
  </div>
  <a href="" class="small-box-footer">
    View now <i class="fas fa-arrow-circle-right"></i>
  </a>
</div>
          </div>
          <div class="col-12 col-sm-6 col-md-3">
          <div class="small-box bg-info">
  <div class="inner">
    <h3>Mother And Child </h3>
    <p>Mother And Child Health Handbook</p>
  </div>
  <div class="icon">
    <i class="fas fa-docum"></i>
  </div>
  <a href="https://familyhealth.go.ke/wp-content/uploads/2020/11/Mother-Child-Health-Handbook-MOH-September-2020.pdf" class="small-box-footer">
    View now <i class="fas fa-arrow-circle-right"></i>
  </a>
</div>
          </div>
            <div class="">

    
                <div>
                    <table class="table table-bordered">
                        <thead>
                            <th>Age for Vaccine</th>
                            <th>Name of Vaccine</th>
                            <th>Preventive Disease</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>At Birth</td>
                                <td>BCG</td>
                                <td>Tuberculosis</td>
                            </tr>
                            <tr>
                                <td>6 Weeks</td>
                                <td>Penta-1, BOPV-1, PCV-1, RVC-1,IPV-1</td>
                                <td rowspan="3">Diphtheria, Whooping Cough, Tetanus, Hepatitis B, Haemophilus Influenzae Type B, Poliomyelitis, Pneumococcal Pneumonia</td>
                            </tr>
                            <tr>
                                <td>10 Weeks</td>
                                <td>Penta-2, BOPV-2,RVC-2, PCV-2</td>
                            </tr>
                            <tr>
                                <td>14 Weeks</td>
                                <td>Penta-3, BOPV-3, PCV-3, IPV-2</td>
                            </tr>
                            <tr>
                                <td>9 Months</td>
                                <td>MR-1</td>
                                <td>Ham,Measles, Rubella</td>
                            </tr>
                            <tr>
                                <td>18 Months</td>
                                <td>MR-2</td>
                                <td>Ham, Measles,Rubella</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            
            
  </div>
</div>
@endsection
   
  