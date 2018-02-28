

<html xmlns="http://www.w3.org/1999/xhtml">

<?php include('header.php'); ?>

	


<div class="content-wrapper clearfix box" style = "padding:20px; margin-bottom:0px" > <!-- Wrapper Main Div -->
   <div class="row"> <!--First row Div -->
	    <div  class="col-lg-3" style="width:300px"> <!-- Calendar// First column -->
                   <div id="txtDate"></div>
          </div>
	    <div class="col-lg-5"><!-- Timesheet// second column -->
        
               <div class="col-lg-5">
               <h3 >DATE: <i id = "showDate"></i></h3>
<div id = "t1">

</div>
    </div>
               
               
              </div>
        <div class="col-lg-4"><!-- Swipe Regulations// Third column -->
        <h5><b>Swipe:</b></h5>

             <table class="table table-bordered">
				  <thead>
					<tr>
					 
					  <th>In Time</th>
					  <th>Out Time</th>
					  <th>Working Hours</th>
					</tr>
				  </thead>
				   <tr>
					  
					  <td scope="col"><div id = "inTime">In Time</div></td>
					  <td scope="col"><div id = "outTime">Out Time</div></td>
					  <td scope="col"><div id = "getHours">Working Hours</div></td>
					</tr>
				  </table>
                 
                  
           
		<div style="padding-bottom:20px; padding-left:10px; padding-right:10px">      

		<input style="width:100%; height:100px" type="text" placeholder="Task Description" id = "sel_desc" value = ""/></div>
		<div align="right" style="padding-right:20px"> <button type="submit" id="submit" class="btn btn-primary">Submit</button></div>
</div> 
    </div>
</div>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>


    <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.timepicker.js');?>"></script>
   
	
    
    <script>
			$('#datepairExample .time').timepicker({
				'showDuration': true,
				'timeFormat': 'g:ia'
			});	
	</script>

    <script language="javascript">
        $(document).ready(function () {
					
			$("#sttime").hide();
			$("#changebt").click(
			function()
			{
				 $("#sttime").show();
				 $("#iTime").hide();
				 $("#changebt").html("Save");				 
			});
			
			$("#endtime").hide();
			$("#echangebt").click(
			function()
			{
				$("#endtime").show();
				$("#endTime").hide();
				$("#echangebt").html("Save");	
			});
			 
			var ip_date = $.datepicker.formatDate("mm/dd/yy", new Date());
			document.getElementById("showDate").innerHTML = ip_date;
			
			window.onload =  get_date();
            $("#txtDate").datepicker({ 					
				maxDate : new Date(),
                onSelect: function (selectedDate) {					
					document.getElementById("showDate").innerHTML = selectedDate;					
				   ip_date = selectedDate;
				get_date();
				    }
            });
			
						
			function get_date(){
				var row;
				$.ajax(
				{
					type: "POST",
					url: "<?php echo base_url(); ?>User/return_date",			
					data: {ip_date:ip_date},
					success: function(data) 
					{	//alert(data);
						var parsed_data = JSON.parse(data);
						
						//console.log(parsed_data);
						document.getElementById("getHours").innerHTML = parsed_data[0].hours;
						document.getElementById("inTime").innerHTML = parsed_data[0].first_swipe;
						document.getElementById("outTime").innerHTML = parsed_data[0].last_swipe;
						row += '<table class="table table-hover"><thead><th><b>Project</b></th> <th class="myhs"><b>Hours Worked</b></th><th><b>Task</b></th><th><b>Description</b></th></thead><tbody>';
						for(i=1;i<parsed_data.length;i++) 
							{
								row += '<tr class="table-active"><td>'+parsed_data[i].project_name+"</td>"+
										'<td scope="row">'+parsed_data[i].pHOURS+"</td>"+
										'<td scope="row">'+parsed_data[i].task+"</td>"+
										'<td class="mycs">'+parsed_data[i].description+"</p></td></tr>";										
							}		
								row+='</tbody></table>';
							$("#t1").html(row);
										
					}
				});
			};
			
			$('#submit').click(  
                function() 
                {  
				    var sel_proj = document.getElementById("sel_proj").value;
					var sel_hours = document.getElementById("sel_hours").value;
					var sel_task = document.getElementById("sel_task").value;
					var sel_desc = document.getElementById("sel_desc").value;
					//alert(sel_proj+sel_hours+sel_task);
					if(sel_proj == "defaultVal"){
						alert("Please select project");
					}
					if(sel_hours == "defaultVal"){
						alert("Please select hours");
					}
					if(sel_task == "defaultVal"){
						alert("Please select task");
					}
					if(sel_desc == ""){
						alert("Please select description");
					}
					if( sel_proj != 'defaultVal' &&  sel_hours != 'defaultVal' && sel_task != 'defaultVal' && sel_desc != ''){
					$.ajax({
								type: "POST",
								url: "<?php echo base_url()?>User/setProject",
								data: {sel_proj:sel_proj,sel_hours:sel_hours,sel_task:sel_task,sel_desc:sel_desc,ip_date:ip_date},
								success:function(data)
								{
									a = data;
									alert(a);
									alert("Data updated");
								}
							});
						}
				});
			
			
			
			
			
			
        });		
    </script>  
    


<?php include('footer.php'); ?>
