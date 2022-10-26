<?php  
 $connect = mysqli_connect("localhost", "root", "", "chromavisiondata");  
 $output = '';  
 $sql = "SELECT * FROM client ORDER BY client_id DESC";  
 $result = mysqli_query($connect, $sql);  
 $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered table-striped">  
                <tr>  
                     <th width="5%">Id</th>  
                     <th width="10%">Client Name</th>  
                     <th width="5%">Groom</th>
                     <th width="5%">Bride</th>
                     <th width="10%">Email</th>
                     <th width="10%">Phone</th> 
                     <th width="10%">Services</th>  
                     <th width="10%">Address</th>
                     <th width="10%">Shedule Date</th>
                     <th width="10%">Time of Schedule</th>
                     <th width="10%">Status</th>        
                     <th width="10%">Delete</th>
                </tr>';  
 if(mysqli_num_rows($result) > 0)  
 {  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
                <tr>  
                     <td>'.$row["client_id"].'</td>  
                     <td class="client_name" data-id1="'.$row["client_id"].'" contenteditable>'.$row["firstname"].''.$row["lastname"].'</td>  
                     <td class="groom_name" data-id2="'.$row["client_id"].'" contenteditable>'.$row["groom_name"].'</td>  
                     <td class="bride_name" data-id2="'.$row["client_id"].'" contenteditable>'.$row["bride_name"].'</td>  
                     <td class="email" data-id2="'.$row["client_id"].'" contenteditable>'.$row["email"].'</td>  
                     <td class="phone" data-id2="'.$row["client_id"].'" contenteditable>'.$row["phone"].'</td>  
                     <td class="services" data-id2="'.$row["client_id"].'" contenteditable>'.$row["type_of_services"].'</td>  
                     <td class="address" data-id2="'.$row["client_id"].'" contenteditable>'.$row["complete_address"].'</td>  
                     <td class="date" data-id2="'.$row["client_id"].'" contenteditable>'.$row["date_shed"].'</td>  
                     <td class="time" data-id2="'.$row["client_id"].'" contenteditable>'.$row["shed_time"].'</td>  
                     <td><button type="button" name="delete_btn" data-id3="'.$row["status"].'" class="btn btn-xs btn-outline-danger btn_delete"></button></td>  
                     <td><button type="button" name="delete_btn" data-id3="'.$row["client_id"].'" class="btn btn-xs btn-danger btn_delete"><i class="fa fa-trash"></i></button></td>  
                </tr>  
           ';  
      }  
      $output .= '  
           <tr>  
                <td></td>  
                <td id="client_name" contenteditable></td>  
                <td id="groom_name" contenteditable></td>
                <td id="bride_name" contenteditable></td>
                <td id="email" contenteditable></td>
                <td id="phone" contenteditable></td>
                <td id="services" contenteditable></td>
                <td id="address" contenteditable></td>
                <td id="date" contenteditable></td>
                <td id="status" contenteditable></td>
                <td id="time" contenteditable></td>
                
                <td><button type="button" name="btn_add" id="btn_add" class="btn btn-xs btn-success">+</button></td>  
           </tr>  
      ';  
 }  
 else  
 {  
      $output .= '<tr>  
                          <td colspan="4">Data not Found</td>  
                     </tr>';  
 }  
 $output .= '</table>  
      </div>';  
 echo $output;  
 ?>