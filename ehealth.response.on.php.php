<html>
	<meta charset="utf-8"/>
	<head>
		<title> test page of sylla lansana</title>
	</head>
	<body>

     <?php
	    
		###############################################
		#											  #
		#   IMPLEMENTING THE FONCTIONS FIND_CHAR()    #
		#                                             #
        ###############################################	

     /*version N*N */
	 
	function  find_chars($str1, $str2){
			$len1 = strlen($str1);
			$len2 = strlen($str2);
			
			$result=null;
			
			for ($i=0; $i < $len1;$i++) {
			  for($j=0; $j<$len2;$j++) {
			   if($str1[$i]==$str2[$j]) {
				  $result.= $str2[$j];   
				} //if
			 }//for	
			}//for
			
		 return $result;
			
		}//fct
	
	 /*version N */
	 
	function  find_chars2($str1, $str2){
			$len1 = strlen($str1);
			$len2 = strlen($str2);
			
			$result=null;
			
			for ($i=0; $i < $len1;$i++)
			{
			  for($j=0; $j<$len2;$j++)	
			   {
			   if($str1[$i]==$str2[$j])
				{  $already_added= false;
					for($k=0; $k < strlen($result);$k++)
					{ if($str2[$j] == $result[$k] and $j != $i){
						  $already_added=true;
						break; 
					   }
					} 
				 
				 if($already_added==false) {
					 $result.= $str2[$j];
				 }
				} //if
			}//for
				
			}//for
			
		 return $result;
			
		}//function
		

		 //****Testing***/
		 $string1 = "processing";
		 $string2 = "processor";
		echo"String ONE is : $string1 <br/> AND String TWO is :  $string2 <br/>";
		echo" ---------------------------------------------------<br/>";
		echo "the result of N*N  version : ". find_chars($string1,$string2) .  "<br/>";
		echo "the result of N  version   : ". find_chars2($string1,$string2) . "<br/><br/><br/>";
	
	
	
	    ###############################################
		#											  #
		#                ARRAY COMPACTION             #
		#                                             #
        ###############################################	
	
	
	function  compact_array($tab1)
	{
	  if(is_array($tab1))
	  {
		  //the length of the array
		  $len1 = count($tab1);
		  //the new array 
		  $tab2 = array();
		  $i=0;
		  while ($i<$len1)
		  { 
				$courant= $tab1[$i];
				$already_added= false;
				
			for($j=0; $j < count($tab2); $j++){
				if($tab2[$j]==$courant){
					$already_added=true;
				}
			}
		  
		   if($already_added==false){
			   $tab2[]= $courant;
		   }
			
		$i++;  
		  }
		  
		return $tab2; 
	  }else{
		  echo "you may give an array as parameter <br/>";
	    }
	
	}//fct

	//***** testing ************
	 $tab = array (1, 3, 7, 7,4, 8, 9, 9,4,5,8, 9, 10);	
	 $res = compact_array($tab);
	echo"Before compacting array is : [ "; foreach ($tab as $val)echo $val.", ";  echo " ]<br/>";
	echo "After compacting array is : [ "; foreach ($res as $val)echo $val.", ";  echo " ]<br/><br/>";
	

        ###############################################
		#											  #
		#                ARRAY ROTATING               #
		#                                             #
        ###############################################	
	
	function  rotate_array($tab,$n)
	{ 
	    $len= count($tab);
		if($n > $len) $n = $len;
		
		$new_tab=null;
		$i=0;
		while( $i < $n)
		{ 
			$new_tab [] = $tab[$len - ($i + 1)];
			$i++;
		}
		$j=0; 
		while ($j < ($len - $n)){
			
			$new_tab [] = $tab [$j];
			 $j++; 
		}
		
	return $new_tab;	
		
	}//fct
		
	//********* testing *********

	$tab= array(1, 2, 3, 4, 5, 6,7,8,9,10);
	$n = 3; 
	$res= rotate_array($tab,$n);

	echo"Before rotating array is : [ "; foreach ($tab as $val)echo $val.", ";  echo " ]<br/>";
	echo "After rotating by N = $n array is : [ "; foreach ($res as $val)echo $val.", ";  echo " ]<br/><br/>";
	


        ###############################################
		#											  #
		#          LEAST COMMON MULTIPLE              #
		#                                             #
        ###############################################

	function lcm($n1,$n2){

		$result = $n1 * $n2;
		while($n1 > 1){
			$rest = $n1 % $n2;
		if($rest == 0 ){
		  $rest = $result / $n2;
			break; 
			 }
			
			$n1 = $n2;
			$n2 = $rest;
		}
	  return $rest;
	}
	
   /***testing**/
	$n1 = 12;
	$n2 = 43;
	$result = lcm($n1,$n2 );
	echo"The least common multiple of $n1 AND $n2 is  : $result <br/>";

// Affiche 840

///////////////////////////////////////////////
//////////////////////////////////////////////
/*////////////////////////////////////////////

To traverse any tree with depth-first search,
perform the following operations recursively at each node:

Perform pre-order operation.
For each i from 1 to the number of children do:
Visit i-th, if present.
Perform in-order operation.
Perform post-order operation.
*/////////////////////////////////////////////

		
	?>
		
		
	</body>
</html>