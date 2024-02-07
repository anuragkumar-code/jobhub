<table class="table">
    <thead>
      <tr>
        <th>Month</th>
        <th>Project</th>
        <th>Date of Hiring</th>
        <th>End Date of Hiring</th>
        <th>Payment Due Date</th>
        <th>Billing Rate (Monthly/Hourly)</th>
        <th>Payment Recieved</th>
        <th>Payment Recieved Date</th>
        <th>Download Receipt</th>
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
                        <td><?php if($get_detail->pay_proof){ ?>
                            <a class="btn btn-default" href="{{url('/payment_proof/'.$get_detail->pay_proof)}}">Download Receipt</a>
                            <?php }else{ ?>
                                <span>Receipt Not Available</span>
                            <?php }?>    
                        </td>
                    </tr>
          <?php  }
        } ?>
    </tbody>
</table>  

