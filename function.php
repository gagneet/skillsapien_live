<?php
function country(){
		
		$sql ="select * from countries";
		$data = mysql_query($sql);
		$rowCount =mysql_num_rows($data);
		while($row =mysql_fetch_assoc($data)){
			//print_r($row);
			$countryId[] =$row['countries_id'];
			$countryName[] =$row['countries_name'];
			
		}
		$result =array($countryId, $countryName, $rowCount);
		return $result;
}

?>