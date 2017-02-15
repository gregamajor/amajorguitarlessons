<?php
	include('config.php');
	$username = $user;
	$email = $from_email;

?>
<div>
	<p align="center" id="response" ></p>
	<form action="" style="text-align: center;" method = "POST">
		<h3>Email</h3>
		<label for="email">Email</label>
		<input type="text" name="email"><br>
		<input type="submit" name="Submit">
	</form>
</div>
<?php
	if(isset($_POST['Submit'])){
			
		$get_email = $_POST['email'];
	
		echo"<pre>";	
		$url = "https://api.stripe.com/v1/customers?limit=100";
	
		$ch1 = curl_init() ;
		curl_setopt( $ch1, CURLOPT_URL, $url ) ;
		curl_setopt( $ch1, CURLOPT_RETURNTRANSFER, true) ;
		curl_setopt($ch1, CURLOPT_USERPWD, "$username:");
		$response1 = curl_exec( $ch1 ) ;
		$b		=	json_decode($response1,true);
		//echo "<pre>";
		// print_r($b);
		
		$x = end($b['data']);
		$last_id	=	$x['id'];
		
		$array		=	array();
		
		foreach($b['data'] as $val){
			array_push($array, $val);
		}
		
		while($b['has_more'] == '1'){
			
			$url1 = "https://api.stripe.com/v1/customers?limit=100&starting_after=$last_id";
			$ch1 = curl_init() ;
			curl_setopt( $ch1, CURLOPT_URL, $url1 ) ;
			curl_setopt( $ch1, CURLOPT_RETURNTRANSFER, true) ;
			curl_setopt($ch1, CURLOPT_USERPWD, "$username:");
			$response3 = curl_exec( $ch1 ) ;
			$b=json_decode($response3,true);
			// echo "<pre>";
			$x = end($b['data']);
			$last_id	=	$x['id'];
			
			foreach($b['data'] as $val){
				array_push($array, $val);
			}
				
		}
			
		$list_cust_ids		=	array();
		foreach($array as $variable){
			$list_cust_ids[]	=	$variable['email']."-".$variable['id'];
		}
		$list		=	array();
		foreach($list_cust_ids as $result){
			$test = explode('-',$result);
			$list[$test['1']]	=	$test['0'];
		}
			
			//print_r($list);	
				
		if(in_array($get_email, $list)){
			$key = array_search($get_email, $list); // $key = 2;
			
			$url1 = "https://api.stripe.com/v1/customers/$key";
			$ch = curl_init() ;
			curl_setopt($ch, CURLOPT_URL, $url1) ;
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true) ;
			curl_setopt($ch, CURLOPT_USERPWD, "$username:");
			$response = curl_exec( $ch) ;
			$cus=json_decode($response,true);
			// echo "<pre>";
			//print_r($cus);
			// echo $cus['subscriptions']['total_count'];
			$count		=	$cus['subscriptions']['total_count'];
			foreach($cus['subscriptions']['data'] as $sub_details){
				$sub_name	=	$sub_details['plan']['name'];
			}
			
	////////////////////////////////////////////////////////////////////////////
	//////////////Sending Emails to customers///////////////////////////////////
	////////////////////////////////////////////////////////////////////////////		
	
			if($count != 0 ){
				$to = $get_email;
				$subject = "Cancel Subscription";
				 
				$message = "<b>Cancel a Subscription</b>";
				$message .= "<h1 style ='color: blue'>Click the link below to cancel the Subscription for $sub_name</h1>";
				$message .= "<p>https://amajorguitarlessons.com/stripe-site/process.php?confirm=Yes&value=$key</p>";

				$header = "From:$email\r\n";
				$header .= "MIME-Version: 1.0\r\n";
				$header .= "Content-type: text/html\r\n";
				 
				$retval = mail ($to,$subject,$message,$header);
			 
				if( $retval == true ) {
					?>
					<script src="//code.jquery.com/jquery-1.10.2.js"></script>
					<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
					<script type= 'text/javascript'>
						$(document).ready(function(){
						//alert('hello');
						document.getElementById('response').innerHTML = '<b>Email has been sent for the confirmation</b>';
						});
					</script>
					
						<style>
						#response{
							display:block !important;
							color:#56ad56;
						}
						</style>
				<?
				}else{
				?>
					<script src="//code.jquery.com/jquery-1.10.2.js"></script>
					<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

					<script type= 'text/javascript'>
						$(document).ready(function(){
						//alert('hello');
						document.getElementById('response').innerHTML = '<b>Email could not be sent...</b>';
						});
					</script>
						<style>
						#response{
							display:block !important;
							color:red;
						}
						</style>
					<?php
				}
	 
			}else{
			?>
				<script src="//code.jquery.com/jquery-1.10.2.js"></script>
				<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
				<script type= 'text/javascript'>
					$(document).ready(function(){
					document.getElementById('response').innerHTML = "<b>You don't have any active Subscription</b>";
					});
				</script>
					<style>
						#response{
							display:block !important;
							color:red;
						}
					</style>
				<?
			}			
		}
		else{
			?>
			<script src="//code.jquery.com/jquery-1.10.2.js"></script>
			<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
			<script type= 'text/javascript'>
				$(document).ready(function(){
				document.getElementById('response').innerHTML = "<b>User doesn\'t Exists</b>";
				});
			</script>
				<style>
					#response{
						display:block !important;
						color:red;
					}
				</style>
			<?			
		}
			
			
	}
?>
	<style>
		#response{
			display:none;
		}
		input[type=text], select {
			width: 40%;
			padding: 12px 20px;
			margin: 8px 0;
			display: inline-block;
			border: 1px solid #ccc;
			border-radius: 4px;
			box-sizing: border-box;
		}

		input[type=submit] {
			width: 15%;
			background-color: #4CAF50;
			color: white;
			padding: 14px 20px;
			margin: 8px 0;
			border: none;
			border-radius: 4px;
			cursor: pointer;
		}

		input[type=submit]:hover {
			background-color: #45a049;
		}

		div {
			border-radius: 5px;
			background-color: #f2f2f2;
			padding: 20px;
		 margin: 10% 20% 20% 20%;
		}
		body{
			background:	#504709;
		}
	</style>