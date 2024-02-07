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
                                                <th>Client ID</th>
                                                <th>Name of Client</th>
                                                <th>Owner Name</th>
                                                <th>Country</th>
                                                <th>Mobile</th>
                                                <th>Email</th>
                                                <th>Status</th>                                                                                           
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if($get_clients){                                                
                                                foreach($get_clients as $key => $get_client){
                                                ?>
                                            <tr>
                                                <td>{{$key+1}}</td>
                                                <td>{{$get_client->id}}</td>
                                                <td>{{$get_client->company_name}}</td>
                                                <td>{{$get_client->first_name}} {{$get_client->last_name}}</td>
                                                <td>{{$get_client->country}}</td>
                                                <td>{{$get_client->mobile}}</td>
                                                <td>{{$get_client->email}}</td>                                              
                                                <td><?php if($get_client->astatus == 1){ echo "Active"; }else{ echo "Inactive";} ?></td>                                                
                                                <td><a class="btn-sm btn-primary" href="{{url('/admin/client/hired_resources/'.$get_client->id)}}">Hired Resources</a> <a class="btn-sm btn-primary" href="{{url('/admin/client/projects/'.base64_encode($get_client->id))}}">View Projects</a></td>
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