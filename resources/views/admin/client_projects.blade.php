@extends('admin.layout.head')
@section('admin')

<div class="content-wrap">
    <div class="main">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 p-r-0 title-margin-right">
                    <div class="page-header">
                        <div class="page-title">
                            <h1>Hello, <span> {{Auth::user()->first_name}}</span></h1>
                        </div>
                    </div>
                </div>
                
            </div>
            <!-- /# row -->
            <section id="main-content">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="bootstrap-data-table-panel">
                                <div class="table-responsive">
                                    <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>S. No.</th>
                                                <th>Project ID</th>
                                                <th>Name of Project</th>                                                                                              
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if($get_projects){                                                
                                                foreach($get_projects as $key => $get_project){
                                                ?>
                                            <tr>
                                              <td>{{$key+1}}</td>
                                              <td>{{$get_project->id}}</td>
                                              <td>{{$get_project->job_title}}</td>
                                              <td>{{$get_project->status}}</td>                                                                                          
                                              
                                            </tr>
                                            <?php }} ?>                                           
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- /# card -->
                    </div>
                    <!-- /# column -->
                </div>
                <!-- /# row -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer">
                            <p>2022 © JobHub.</p>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>

@endsection