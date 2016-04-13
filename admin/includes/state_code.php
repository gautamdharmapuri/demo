<?php  if(!isset($_SESSION['USNRIs_session']))	  
	   {
	      header('location:index.php');
		  exit;
	   }
/*			echo $_SESSION['USNRIs_session']['username'];
			echo $_SESSION['USNRIs_session']['category'];			*/
		//	echo $_SESSION['USNRIs_session']['statenm'];		
		
		//	echo $_SESSION['USNRIs_session']['total_states'];		
		$noofstates = $_SESSION['USNRIs_session']['total_states'];
		
		if($noofstates>1)
		{
		
			$my_stcode = explode(",", $_SESSION['USNRIs_session']['statenm']);
			
			
					for($value = 0; $value<$_SESSION['USNRIs_session']['total_states']-1; $value++)
					{
						$data .=  "'".$my_stcode[$value]."', ";	
					}		
					
					 $data;
								$state_lastElement =  $my_stcode[$noofstates-1];							
								$lastElement = "'".$state_lastElement."'";
							$join_states_list =  $data.$lastElement;
						//	echo $join_states_list;
					 
					 
											
											/*$state_list_1 =  str_replace(" ",",",$data);
											$state_list_2 =  $my_stcode[$noofstates-1];
											$my_state_list = $state_list_1.$state_list_2;
													echo $my_state_list;*/
						
				
			
					/*$my_stcode = explode(".", $_SESSION['USNRIs_session']['statenm']);
					echo $my_stcode[0]."<br>";
					echo $my_stcode[1]."<br>";
					echo $my_stcode[2]."<br>";
					echo $my_stcode[3]."<br>";		
					echo $my_stcode[4]."<br>";	
					
					SELECT * from states WHERE state_code IN('AL','AK','AZ','AR');
					*/						
			
		}
		if($noofstates==1)
		{
			//SELECT * from states WHERE state_code =  'AL';
			
			$my_stcode = explode(",", $_SESSION['USNRIs_session']['statenm']);
					$my_state_list =  $my_stcode[0];
					$join_states_list =  "'".$my_state_list."'";
				//	echo $join_states_list;
					
			
		}	
		if($noofstates==0)
		{
			$join_states_list='All';
		}
			
?>