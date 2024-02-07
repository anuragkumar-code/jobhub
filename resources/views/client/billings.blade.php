@extends('client.layout.head')
@section('client')  
   
   <!-- Content -->
    <main class="main panelbg">

        <div class="box-head-single box-head-single-candidate">
            <div class="container">
                <h3>Billing Page - Client</h3>
                <h5>Client should be able to select resources from dropdown to see billing details resource wise</h5>
                <h5>Client should be able see the following column mentioned below.</h5>
                <h5>Client should be able to upload the receipt.</h5>
            </div>
        </div>
        
        @if(session()->has('success'))
        <div class="alert alert-info" id="myDIV" role="alert">
            <strong>{{session()->get('success')}}</strong> 
            <i class="fa fa-times closeiconsss" onclick="hide()" aria-hidden="true"></i>
        </div>
        @endif
        
        <section class="section-box mt-80">
            <div class="container">
                <div class="billingbg">
                    
                    <select name="" id="resource_id" class="chooseresource mt-0 resource">
                        <option value="">--- Select Resource ---</option>
                        <?php if($get_resources){
                            foreach ($get_resources as $key => $get_resource) { ?>
                          
                        <option value="{{$get_resource->id}}">{{$get_resource->first_name}} {{$get_resource->last_name}}</option>
                        <?php }} ?>
                       
                    </select>

                    <div class="resourcetable">
                    <table class="table">
                        <thead>
                          <tr>
                            <th>Month</th>
                            <th>Project</th>
                            <th>Date of Hiring</th>
                            <th>End Date of Hiring</th>
                            <th>Payment Due Date</th>
                            <th>Billing Rate (Monthly/Hourly)</th>
                            <th>Payment Sent</th>
                            <th>Payment Sent Date</th>
                            <th>Upload Receipt</th>
                          </tr>
                        </thead>
                        <tbody>
                                          
                        </tbody>
                      </table>
                    </div>

                </div>
            </div>
        </section>
        
    </main>
    <!-- End Content -->

    <script type="text/javascript">
        $(document).ready(function(){
            $('.resource').on('change', function(){
                var resource_id = $(this).val();                        
                $.ajax({
                    url: "{{route('get_resources')}}",
                    type: "post",                    
                    data:{"_token": "{{ csrf_token() }}",resource_id:resource_id}, 
                    success: function (response) {
                        $('.resourcetable').html(response);                        
                    },                    
                });                
            });
        });
    </script>
@endsection