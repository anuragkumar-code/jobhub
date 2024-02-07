@extends('agency.layout.head')
@section('agency')  
  
  <!-- Content -->
    <main class="main panelbg">
        <div class="box-head-single box-head-single-candidate">
            <div class="container">
                <h3>Billing Page - Agency</h3>
                <h5>Agency should be able to select resources from dropdown to see billing details ressource wise</h5>
                <h5>Agency should be able see the following column mentioned below.</h5>
                <h5>Agency should be able to upload the receipt. ( this will be uploaded by Admin )</h5>
            </div>
        </div>
        
        <section class="section-box mt-80">
            <div class="container">
                <div class="billingbg">                    
                    <select name="" id="" class="chooseresource resource">
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
                            <th>Name</th>
                            <th>Date of Hiring</th>
                            <th>Billing Rate (Monthly/Hourly)</th>
                            <th>Payment Received</th>
                            <th>Payment Received Date</th>
                            <th>Downlod Receipt</th>
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
                  url: "{{route('get_agency_resources')}}",
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