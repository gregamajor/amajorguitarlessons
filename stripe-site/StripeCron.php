<?php

	include("config.php");

	$username	=	$user;	
		
	$header=array(	 
		   "Authorization: Bearer $username",
		   "Content-type: application/json"
		 );

		 
	///////////////////////////////////////////////////////////////////
	/////////////////// get list of existing  customer ///////////////
	//////////////////////////////////////////////////////////////////


	$url21		=	'https://api.stripe.com/v1/customers?limit=100';	
	 
	$curl21=curl_init();
	curl_setopt($curl21, CURLOPT_URL,$url21);
	curl_setopt($curl21,CURLOPT_HTTPAUTH,$header); 
	curl_setopt($curl21, CURLOPT_USERPWD, "$username:");
	curl_setopt($curl21, CURLOPT_RETURNTRANSFER, 1);		 
	$output21 = curl_exec($curl21);
	$output22	=json_decode($output21,true);
	 
	//echo "<pre>";
	//print_r($output22['data']);
		
	
	foreach($output22['data'] as $key1){
		
		//echo "<pre>";
		//print_r($key1['subscriptions']);
		
		$EmailAddress1	=	$key1['email'];
		
		if(array_key_exists(0,$key1['subscriptions']['data'])){
			//print_r($key1['subscriptions']['data']);
			
			foreach($key1['subscriptions']['data'] as $key3){
				$plandetails_id1 		= 	$key3['plan']['id'];
				$plandetails_amount1	=	$key3['plan']['amount'];
				$plandetails_name1		=	$key3['plan']['name'];
				
									
				$end_date1 			=	$key3['current_period_end'];
				$current_date1 		= 	time(); 
				
				$date_difference1	=	$end_date1 - $current_date1;
				$date_difference2 	=	floor($date_difference1 / (60 * 60 * 24));
				
				
				$date 		= new DateTime("@$end_date1");
				$lastdate1	= $date->format('Y-m-d') . "\n";
							
				
				if($date_difference2 == 30 && $EmailAddress1 != ''){
										
				
					$Email			=	$from_email;												
					
					$to				=	$EmailAddress1;
					$subject		=	$Subject1;
					
					$data1122		=	'';
					$data1122	.=	'<HTML><BODY><PRE><P Style="font-size:16px"><B>';
					$data1122	.=	"Hello Subscriber";
					$data1122	.=	"<br>";
					$data1122	.=	"<p>";
					$data1122	.=	 "Plan Name:  ".$plandetails_name1;
					$data1122	.=	"</p>";
					$data1122	.=	"<p>";
					$data1122	.=	 "Plan ID:  ".$plandetails_id1;
					$data1122	.=	"</p>";
					$data1122	.=	"<p>";
					$data1122	.=	 "Subscription Amount:  ".$plandetails_amount1;
					$data1122	.=	"</p>";	
					$data1122	.=	"<p>";
					$data1122	.=	"will Renew on ".$lastdate1."No action is needed.";
					$data1122	.=	"</p>";	
					$data1122	.=	"<br>";
					$data1122	.=	"<br>";
					$data1122	.=	"<br>";
					$data1122	.=	"<p>";
					$data1122	.=	 "Thanks";
					$data1122	.=	"</p>";
					
					
					$headers = 'From: '.$Email."\r\n";
						'Reply-To: '.$Email."\r\n" ;
						'X-Mailer: PHP/' . phpversion();

					$headers   .= "Content-type: text/html; charset: utf8\r\n";
					$mail		=	mail($to,$subject,$data1122,$headers);
					
				}
					
			}
			
		}
		
	}
	

?>