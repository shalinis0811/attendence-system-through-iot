

<html xmlns="http://www.w3.org/1999/xhtml">

<?php include('header.php'); ?>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.12.4.js"></script>
  <script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>


<div class="content-wrapper clearfix box" style = "padding:20px; margin-bottom:0px" > <!-- Wrapper Main Div -->
   <div class="row" style="padding-bottom:15px"> <!--First row Div -->
	    <div  class="col-lg-3" style="width:300px"> <!-- Calendar// First column -->
                 <!--  <div id="txtDate"></div>-->
				   <div id="datetxt"></div>
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

		</div>
		<div align="right" style="padding-right:20px"></div>
</div> 
    </div>
	<div class="container">
	<ul class="nav nav-tabs">
     <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" id="month" href="#home">Monthly Analysis</a>
     </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" id="year"  href="#profile">Yearly Analysis</a>
  </li>
	
	</ul>
	</div>
	<div id="show_month" style="padding-top:15px">
	<div class="col-lg-6" >
	
				  </div>
	
	</div>
		<div id="show_year" style="display:none">
					
					 </div>

</div>
 
	<script language="javascript">
	
	$(document).ready(function(){
		//$('#show_year').hide();	
				$('#month').click(function(){
					
					$('#show_year').hide();	
										$('#show_month').show();

				});
				
				$('#year').click(function(){
					
					$('#show_month').hide();
					$('#show_year').show();
 					
				});
			});
			
      
					
			
			var ip_date = $.datepicker.formatDate("mm/dd/yy", new Date());
			document.getElementById("showDate").innerHTML = ip_date;
			show_month();
			show_year();
			window.onload =  get_date();
            $("#datetxt").datepicker({ 					
				maxDate : new Date(),
                onSelect: function (selectedDate) {					
					document.getElementById("showDate").innerHTML = selectedDate;					
				   ip_date = selectedDate;
				   
				get_date();
				show_month();
				
				    }
            }); 
			function get_date(){
				//alert(ip_date);
				//var row;
				$.ajax(
				{
					type: "POST",
					url: "getdate.php",	
			        data: {ip_date:ip_date},
					success: function(data) 
					{	
					
					//alert(data);
					
					//console.log(data);
					
					var parsed_data = JSON.parse(data);
						
						//console.log(parsed_data);
						document.getElementById("getHours").innerHTML = parsed_data.hours;
						document.getElementById("inTime").innerHTML = parsed_data.date_time;
						document.getElementById("outTime").innerHTML = parsed_data.last_swipe;
						/*row += '<table class="table table-hover"><thead><th><b>Project</b></th> <th class="myhs"><b>Hours Worked</b></th><th><b>Task</b></th><th><b>Description</b></th></thead><tbody>';
						for(i=1;i<parsed_data.length;i++) 
							{
								row += '<tr class="table-active"><td>'+parsed_data[i].project_name+"</td>"+
										'<td scope="row">'+parsed_data[i].pHOURS+"</td>"+
										'<td scope="row">'+parsed_data[i].task+"</td>"+
										'<td class="mycs">'+parsed_data[i].description+"</p></td></tr>";										
							}		
								row+='</tbody></table>';
							$("#t1").html(row);
									*/	
					}
				});
			}
			
			function show_month(){
				//alert(ip_date);
				var row='';
				
				$.ajax(
				{
					type: "POST",
					url: "showmonth.php",	
			        data: {ip_date:ip_date},
					success: function(data) 
					{	
					
					//alert(data);
					
					//console.log(data);
					
					var parsed_data = JSON.parse(data);
						
						console.log(parsed_data);
						/*document.getElementById("wdays").innerHTML = parsed_data.num;
						document.getElementById("mname").innerHTML = parsed_data.month; */
						
						row += '<table class="table table-hover"><thead><th><b>In time</b></th> <th class="myhs"><b>Out time</b></th><th><b>Hours Worked</b></th></thead><tbody>';
						for(i=0;i<parsed_data.length;i++) 
							{
								row += '<tr class="table-active"><td>'+parsed_data[i].date_time+"</td>"+
										'<td scope="row">'+parsed_data[i].last_swipe+"</td>"+
										'<td scope="row">'+parsed_data[i].hours+"</td></tr>";
																				
							}		
								row+='</tbody></table>';
							$("#show_month").html(row);
									
					}
				});
			}
			
			
			function show_year(){
				//alert(ip_date);
				var row='';
				$.ajax(
				{
					type: "POST",
					url: "getyear.php",	
			        //data: {ip_date:ip_date},
					success: function(data) 
					{	
					
					//alert(data);
					
					//console.log(data);
					
					var parsed_data = JSON.parse(data);
						
						//console.log(parsed_data);
						/*document.getElementById("wdays").innerHTML = parsed_data.num;
						document.getElementById("mname").innerHTML = parsed_data.month;*/
													 var month = new Array();
								month[1] = "January";
								month[2] = "February";
								month[3] = "March";
								month[4] = "April";
								month[5] = "May";
								month[6] = "June";
								month[7] = "July";
								month[8] = "August";
								month[9] = "September";
								month[10] = "October";
								month[11] = "November";
								month[12] = "December";

									   // r d = new Date();
								     // var n = month[5];
						
						row += '<table class="table table-hover"><thead><th><b>Month</b></th> <th class=""><b>Working Days</b></th></thead><tbody>';
						for(i=0;i<parsed_data.length;i++) 
						
							{
								
								row += '<tr class="table-active"><td>'+month[parsed_data[i].month]+"</td>"+

										'<td class="">'+parsed_data[i].total_days+"</p></td></tr>";										
							}		
								row+='</tbody></table>';
							$("#show_year").html(row); 
									
					}
				});
			}
			</script>
			
			<script>
						
			/*function get_date(){
				alert('hi');	
				var row;
				$.ajax(
				{
					type: "POST",
					url: "getdate.php",	
				
					data: {ip_date:ip_date},
					success: function(data) 
					{	//alert(data);
					/*var parsed_data = JSON.parse(data);
						
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
									*/	
				//	}
				//});
		//	};
			
			/*$('#submit').click(  
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
			
			*/
			
			
			
  	
    </script>  



   <?php include 'footer.php'?>