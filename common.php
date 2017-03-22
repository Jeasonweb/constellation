<?php
		$consName=$_REQUEST['consName'];
		$type=$_REQUEST['type'];
		$url='http://web.juhe.cn:8080/constellation/getAll?consName='.$consName.'&type='.$type.'&key=2e38ac3a66304821eb4e18b9bb1c5d53';
		$data=[];
		function getData($url,$data){
		  $ch = curl_init();
		  $timeout = 60; 
		  curl_setopt ($ch, CURLOPT_URL, $url); 
		  curl_setopt($ch, CURLOPT_POST, true); 
		  curl_setopt($ch, CURLOPT_POSTFIELDS, $data); 
		  curl_setopt($ch,CURLOPT_HEADER,0);  
		  curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1); 
		  curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $timeout); 
		  $file_contents = curl_exec($ch); 
		  if ($file_contents===false) {
		     echo 'Curl error: ' . curl_error($ch) . "<br>\n\r";
		     exit();
		  }
		  curl_close($ch); 
		  return $file_contents; 
		}
		$result=getData($url,$data);
		echo $result;
?>