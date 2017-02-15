<?php
	include('config.php');
	$username = $user;
	$cust_id = $_GET['value'];
	$confirm = $_GET['confirm'];
	
	if($confirm == 'Yes'){
	
	/*
		List Customer
	*/
		
		$url1 = "https://api.stripe.com/v1/customers/$cust_id";
			 
		$ch = curl_init() ;
		curl_setopt( $ch, CURLOPT_URL, $url1 ) ;
		curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true) ;
		curl_setopt($ch, CURLOPT_USERPWD, "$username:");
		$response = curl_exec($ch) ;
		$cus=json_decode($response,true);
		// echo "<pre>";
		// print_r($cus);
		//echo"-------------------------------------------------------------------";
		$cus['subscriptions']['total_count'];
		//echo"-------------------------------------------------------------------";
		if($cus['subscriptions']['total_count'] != 0 ){
		 foreach($cus['subscriptions']['data'] as $sub){
			$sub_id = $sub['id'];
			// echo "<br>";
			if($sub['id'] != ''){
				$url1 = "https://api.stripe.com/v1/customers/$cust_id/subscriptions/$sub_id";
					
				$array31=array(
				 'at_period_end' => "false"
				 
				);
				$array41	=	http_build_query($array31);

				$ch			= 	curl_init();
				curl_setopt($ch, CURLOPT_URL, $url1) ;
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, true) ;
				curl_setopt($ch, CURLOPT_USERPWD, "$username:");
				curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
				curl_setopt($ch,CURLOPT_POSTFIELDS, $array41);
				$response1 	= 	curl_exec($ch) ;
				$del 		= 	json_decode($response1,true);
				// echo "<pre>";
				// print_r($del);
				// echo"-------------------------------------------------------------------";	
						
			}
		 }
			if($del['status'] == 'canceled'){
				?>
					<div>

					<p align="center" id="response" ><b>Your Subscription has been canceled</b></p>
					</div>
					<style>
					#response{
						display:block !important;
						color:#56ad56;
					}
					div {
					border-radius: 5px;
					background-color: #f2f2f2;
					padding: 20px;
					margin: 10% 20% 20% 20%;
					}
					</style>
				<?php
			}
			else{
				echo"No response";
			}
		
		}
		else{
			?>
					<div>

					<p align="center" id="response" ><b>You don't have any active Subscription</b></p>
					</div>
					<style>
					#response{
						display:block !important;
						color:red;
					}
					div {
					border-radius: 5px;
					background-color: #f2f2f2;
					padding: 20px;
					margin: 10% 20% 20% 20%;
					}
					</style>
				<?php
		}
	}
?>
<style>
body{
	background:	#504709;
}
</style>