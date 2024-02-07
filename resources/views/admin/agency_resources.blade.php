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
                                                <th>Resource ID</th>
                                                <th>Resource Name</th>
                                                <th>Technology</th>                                                
                                                <th>Availability</th>                                              
                                                <th>Status</th>                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if($get_resources){                                                
                                                foreach($get_resources as $key => $get_resource){
                                                ?>
                                            <tr>
                                                <td>{{$get_resource->id}}</td>
                                                <td>{{$get_resource->first_name}} {{$get_resource->last_name}}</td>
                                                <td> <?php
                                                    if($get_resource->primary_skills!='')
                                                    {
                                                        $primary_skills = '';
                                                        $all_primary_skills = explode(',',$get_resource->primary_skills);
                                                        foreach ($all_primary_skills as $key => $primary_skill_data) {
                                                            if(isset($get_primary_skills[$primary_skill_data])){
                                                                $primary_skills.=$get_primary_skills[$primary_skill_data].',';
                                                                    }
                                                            
                                                        }
                                                    }?>
                                                    <?php echo rtrim($primary_skills,','); ?>
                                                </td>
                                                <td>{{$get_resource->availability}}</td>
                                                <td><?php if($get_resource->status == 1){ echo "Active"; }else{ echo "Inactive";} ?></td>
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