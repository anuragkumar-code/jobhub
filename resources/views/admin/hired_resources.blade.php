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
                                                <th>Resource ID</th>
                                                <th>Name of Resource</th>
                                                <th>Agency Name</th>
                                                <th>Client Name</th>
                                                <th>Start Date</th>
                                                <th>End Date</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if($get_resources){                                                
                                                foreach($get_resources as $key => $get_resource){
                                                ?>
                                            <tr>
                                              <td>{{$key+1}}</td>
                                              <td>{{$get_resource->resource_id}}</td>
                                              <td>{{$get_resource->first_name}} {{$get_resource->last_name}}</td>
                                              <td>{{$get_resource->acn}}</td>
                                              <td>{{$get_resource->company_name}}</td>
                                              <td>{{$get_resource->date_of_hiring}}</td>
                                              <td>{{$get_resource->end_date_of_hiring}}</td>
                                              <td>Status</td>
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