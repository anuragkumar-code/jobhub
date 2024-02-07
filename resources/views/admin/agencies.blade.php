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
                                    <table id="bootstrap-data-table-export" class="table table-striped table-bordered table_new">
                                        <thead>
                                            <tr>
                                                <th>Agency ID</th>
                                                <th>Agency Name</th>
                                                <th>Country</th>                                                
                                                <th>Contact Number</th> 
                                                <th>Email</th>                                                
                                                <th>Status</th>
                                                <th>Action</th>                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if($get_agencies){                                                
                                                foreach($get_agencies as $key => $get_agency){
                                                ?>
                                            <tr>
                                                <td>{{$get_agency->id}}</td>
                                                <td>{{$get_agency->company_name}}</td>
                                                <td>{{$get_agency->country}}</td>                                                
                                                <td>{{$get_agency->mobile}}</td>
                                                <td>{{$get_agency->email}}</td>                                               
                                                <td><?php if($get_agency->astatus == 1){ echo "Active"; }else{ echo "Inactive";} ?></td>
                                                <td><a class="btn-sm btn-primary" href="{{url('admin/agencies/resources/'.base64_encode($get_agency->user_id))}}">View Resources</a></td>                                               
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