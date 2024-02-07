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

        <?php if($get_details)
            {
                foreach ($get_details as $key => $get_detail) 
                {  ?>
                    <tr>
                        <td>{{date('F',strtotime($get_detail->billing_start_date))}}</td>
                        <td>{{$get_detail->job_title}}</td>
                        <td>{{$get_detail->date_of_hiring}}</td>
                        <td>{{$get_detail->end_date_of_hiring}}</td>
                        <td>{{$get_detail->due_date}}</td>
                        <td>{{$get_detail->billing_amount}}</td>
                        <td>{{$get_detail->paid_amount}}</td>
                        <td>{{$get_detail->payment_date}}</td>
                        <td><?php if($get_detail->paid_amount == null){  ?>
                            <button class="btn btn-default myBtn submit" data-id="{{$get_detail->bid}}">Pay Bill</button>
                            <?php }else{ ?>
                                <span>Amount Paid</span>
                            <?php } ?>
                        </td>
                    </tr>
          <?php  }
        } ?>
    </tbody>
</table>  

<div class="modal popupModal">
    <!-- Modal content -->
    <div class="modal-content popshow">
      <span class="close">&times;</span>
      <div class="jobhubpopup">
        <form action="{{url('/client/billings/payment')}}" id="paying_bill" method="post" enctype='multipart/form-data'>
          @csrf
          <label for="payment_sent">Payment Sent:</label><br>
          <input type="text" id="payment_sent" name="payment_sent"><br>
          <label for="payment_proof">Payment proof:</label><br>
          <input type="file" id="payment_proof" name="payment_proof"><br><br>

          <input type="hidden" name="bid" class="billing" value="">
  
          <button class="submit submit-auto-width btn btn-default submitbtn" type="submit">Submit</button>
      </form>
      </div>
    </div>  
</div>

<script>
    $(function() {
    
            $.validator.addMethod("regx", function(value, element, regexpr) {          
            return regexpr.test(value);
        }, "Please enter a valid URL.");

            $("#paying_bill").validate({


        ignore: [],
        ignore: '.hiddenclass',
                rules: {
                    payment_sent: {
                        required: true,
                    },                                                     
                },

                messages: {
                    payment_sent: {
                        required: "Please enter amount.",
                    },
                },
                submitHandler: function(form) {
                
                    form.submit();
                }
            });
    });
</script>


<script>
    $(document).on('click','.myBtn',function(){
        $('.popupModal').fadeIn(200);
        var billing = $(this).attr("data-id");
        $('.billing').val(billing)
    })

    $(document).on('click','.close',function(){
        $('.popupModal').fadeOut(200)
    })

</script>

<style>
    body {font-family: Arial, Helvetica, sans-serif;}
    
    /* The Modal (background) */
    .modal {
      display: none; /* Hidden by default */
      position: fixed; /* Stay in place */
      z-index: 1; /* Sit on top */
      padding-top: 100px; /* Location of the box */
      left: 0;
      top: 0;
      width: 100%; /* Full width */
      height: 100%; /* Full height */
      overflow: auto; /* Enable scroll if needed */
      background-color: rgb(0,0,0); /* Fallback color */
      background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    }
    
    /* Modal Content */
    .modal-content {
      background-color: #fefefe;
      margin: auto;
      padding: 20px;
      border: 1px solid #888;
      width: 35%;
      display: table;
      border-radius: 10px;
    }
    
    /* The Close Button */
    .popshow .close {
      color: #aaaaaa;
      float: right;
      font-size: 28px;
      font-weight: bold;
    }
    
    .popshow .close:hover,
    .popshow .close:focus {
      color: #000;
      text-decoration: none;
      cursor: pointer;
    }
    .jobhubpopup{width: 100%; float: left;}
    .jobhubpopup label{width: 100%; float: left; font-weight: 500; color: #000; font-size: 14px;}
    .jobhubpopup input {
        width: 93%;
        float: left;
        font-weight: 500;
        font-size: 14px;
        border: solid 1px #d5d5d5;
        padding: 10px 15px;
        margin: 10px 0px 15px;
        outline: none;
    }
    .submitbtn{background: #000; padding: 10px 25px; color: #fff; outline: none; border: none; border-radius: 5px; cursor: pointer;}
    .submitbtn:hover,.submitbtn:focus {background: #222; color: #fff; outline: none;}
    
    @media only screen and (min-width: 480px) and (max-width: 992px) {
    .modal-content {width: 80%;}
    .jobhubpopup input {width: 90%;}
    
    }
    
    @media only screen and (max-width: 479px) {
    .modal-content {width: 80%;}
    .jobhubpopup input {width: 90%;}
    
    }
    
    </style>