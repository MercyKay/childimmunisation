
@extends('layouts.index')
    
    @section('content-header')
          <div class="container-fluid"> 
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1 class="m-0">Immunization </h1>
              </div><!-- /.col -->
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">Immunization</li>
                </ol>
                
              </div><!-- /.col -->
            </div><!-- /.row -->
          </div><!-- /.container-fluid -->
    @endsection
    
    @section('content')
    <div class="container">
    <div class="row justify-content-center">
    <button type="button">Register User</button>
    </div>
            <div class="row justify-content-center">
    
            
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">View All Users</div>
                        
                        <div class="card-body">
                            <table class="table" id="user2">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($user as $users)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $users->name }}</td>
                                    <td>{{ $users->phone }}</td>
                                    <td>{{ $users->email }}</td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
    
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
        <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
        <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js" defer></script>
        <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js" defer></script>
        
        <script>
            $(document).ready(function() {
                $('#user2').DataTable()
                ;
            } );
        </script>
    
    @endsection