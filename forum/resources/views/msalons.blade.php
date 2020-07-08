@extends('layouts.base_profile')
@section('bar')
  @parent 
@endsection
@section('navprofile')
    @parent
    <!-- Container -->
<div class="container a" >
  <div class="row">
    <!-- Col -->
    <div class="col">
      <div class="card">
        <div class="card-header">
          <a href="{{ url('salon_discussion') }}"><h3 class="card-title">Salles de discussion</h3></a>
        
            <div class="card-tools">
              <div class="input-group input-group-sm" style="width: 150px;">
                <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
        
                  <div class="input-group-append">
                    <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                  </div>
              </div>
            </div>
        </div>              
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0">
          <table class="table table-hover text-nowrap">
            <thead>
              <tr>
                <th>User</th>
                <th>Date</th>
                <th>Theme</th>
                <th>mentions</th>
              </tr>
            </thead>
            <tbody>
                <tr>
                  <td>John Doe</td>
                  <td>11-7-2014</td>
                  <td>Bacon ipsum dolor sit</td>
                  <th><span class="float-right badge bg-primary">84 <i class="fa fa-thumbs-up" aria-hidden="true"></i></span>
                  <br><span class="float-right badge bg-orange">42 <i class="fa fa-comment" aria-hidden="true"></i></span></th>
                </tr>
                <tr>
                  <td>Alexander Pierce</td>
                  <td>11-7-2014</td>
                  <td>Bacon ipsum dolor sit </td>
                  <th><span class="float-right badge bg-primary">374 <i class="fa fa-thumbs-up" aria-hidden="true"></i></span>
                  <br><span class="float-right badge bg-orange">23 <i class="fa fa-comment" aria-hidden="true"></i></span></th>
                </tr>
                <tr>
                  <td>Bob Doe</td>
                  <td>11-7-2014</td>
                  <td>Bacon ipsum dolor </td>
                  <th><span class="float-right badge bg-primary">839 <i class="fa fa-thumbs-up" aria-hidden="true"></i></span>
                  <br><span class="float-right badge bg-orange">15 <i class="fa fa-comment" aria-hidden="true"></i></span></th>
                </tr>
                
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
    <!-- Col-->
  
    <!-- Col2 -->
    <div class="col">
          <!-- START PROGRESS BARS -->
          <div class="row">
            <div class="col-md-6">
              <div class="card table_jeux">
                <div class="card-header">
                  <a href="{{ url('salon_jeux') }}"><h3 class="card-title">Salles de jeux</h3></a>
                  <div class="card-tools">
                    <div class="input-group input-group-sm" style="width: 150px;">
                      <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
              
                        <div class="input-group-append">
                          <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                        </div>
                    </div>
                  </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <p><code>Quizz biblique</code></p>
                  
  
                  <div class="progress">
                    <div class="progress-bar bg-primary progress-bar-striped" role="progressbar"
                         aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                      <span class="sr-only">40% Complete (success)</span>
                    </div>
                  </div>
                  <p><code>Choix multiple</code></p>
  
                  <div class="progress progress-sm active">
                    <div class="progress-bar bg-success progress-bar-striped" role="progressbar"
                         aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                      <span class="sr-only">20% Complete</span>
                    </div>
                  </div>
                  <p><code>Vie de Abraham</code></p>
  
                  <div class="progress progress-xs">
                    <div class="progress-bar bg-warning progress-bar-striped" role="progressbar"
                         aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                      <span class="sr-only">60% Complete (warning)</span>
                    </div>
                  </div>
                  
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
    </div>
    <!--Col-->
  </div>
  <!--Row-->
  </div>
  <!--Container-->
    </div>
@endsection