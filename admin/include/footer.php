<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>

<!-- Essential javascripts for application to work-->
<script src="js/main.js"></script>
<!-- The javascript plugin to display page loading on top-->
<script src="js/plugins/pace.min.js"></script>
<!-- Page specific javascripts-->
<script type="text/javascript" src="js/plugins/chart.js"></script> 
<!-- Data table plugin-->
    <script type="text/javascript" src="js/plugins/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="js/plugins/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript" src="js/plugins/sweetalert.min.js"></script>

    <script type="text/javascript" src="js/plugins/bootstrap-datepicker.min.js"></script>
    <script type="text/javascript" src="js/plugins/select2.min.js"></script>
    <script type="text/javascript" src="js/plugins/bootstrap-datepicker.min.js"></script>
    
    <script type="text/javascript">$('#sampleTable').DataTable();</script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-timepicker/0.5.2/js/bootstrap-timepicker.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-timepicker/0.5.2/js/bootstrap-timepicker.min.js"></script> 		
    <script type="text/javascript"> 
		window.setTimeout(function () 
		{ 
		            $("#success-alert").alert('close'); 
		}, 3000);
		 $('#myModal').modal('show');
	    setTimeout(function () {
	        $('#myModal').modal('hide');
	        <?php 
	          if(isset($_SESSION['message']))
	          {
	            unset($_SESSION['message']);
	          }
	        ?>
	        <?php 
	          if(isset($_SESSION['error']))
	          {
	            unset($_SESSION['error']);
	          }
	        ?>
	    }, 4000);	
	</script> 
</body>
</html>