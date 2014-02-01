<?php
/*
	Set user for show profile
*/
class profile extends database {
	var $data=NULL;
 	/*
	set user 
	*/
	function __construct($data){
		$this->data=$data;
	}
	/*
		get   name
	*/
	function get_name()
	{
	  	return $this->data['first_name']." ".$this->data['last_name'];
	}
	/*
		get   image
	*/
	function get_big_img()
	{
		return P_IMAGE_FOLDER."".$this->data['photo'];
	}
	
	/*
		get   image
	*/
	function get_friends()
	{
		
	}
	/* get user country */
 	function getCountry()
	{
			$sql='SELECT * FROM `countries` WHERE `countries_id`='.$this->getCountryId();
 			$run=$this->query_silent($sql);
			$data=$this->fetch_array($run);
			return $data['countries_name'];
 	}
	
	function getCountryId()
	{
	 return $this->data['country'];
	}
	
	/* get user state */
 	function getState()
	{
			$sql='SELECT * FROM `zones` WHERE `zone_id`='.$this->data['state'];
			$run=$this->query_silent($sql);
			$data=$this->fetch_array($run);
			return  $data['zone_name'];  
	}
	
	
	function abount_me()
	{
		if($this->data['about']!="")
		return $this->data['about'];
		else
		return "Not Available ";
		
	}
	
	function get_id()
	{
		return $this->data['user_id'];
	}
	
	function get_email()
	{
		return $this->data['primary_email'];
	}
	
	function get_birthdate()
	{
		return $this->data['birthdate'];
	}
	
	function get_address()
	{
		return $this->data['primary_address'];
	}
	
	function get_rate()
	{
	$sql='SELECT * FROM `rates` WHERE `user_id`='.$this->get_id().' ';
			$run=$this->query_silent($sql);
			$data=$this->fetch_array($run);
		return  CURRENCY.$data['gt_amount']." Per ".$data['gt_time_period'];
	}
	
	function get_company_name()
	{
		return $this->data['conpany_name'];
	}
	
	function rank()
	{
	        $sql='SELECT `rank` FROM `wealthmash_rank` WHERE  `id` in (SELECT `rank_id` FROM `user_rank` WHERE `user_id`='.$this->get_id().' )';
			$run=$this->query_silent($sql);
			$data=$this->fetch_array($run);
			return  $data['rank']; 
	}
	
	function share_view()
	{
	        $sql='SELECT * FROM `share_views` WHERE `user_id`='.$this->get_id().' ';
			$run=$this->query_silent($sql);
			$data=$this->fetch_array($run);
			return  $data['text']; 
	}
	function getImage($path)
	{
 	   $path=$path.$this->data['image'];
  	 
	 return  '<img src="'.$path.'"  width="209" height="139"  alt="" title="" border="10"  />'; 
	}
	function friendCanSeeProfile()
	{
	 return true;
	} 
	function friendAlReadyInNetwork($pid)
	{
		    $run=$this->query_silent('SELECT `friend_id` FROM `user_networks` WHERE `user_id`='.$this->get_id().'  and `friend_id`='.$pid.' and `status` like "'.ENABLE.'"');
			$data=$this->fetch_array($run);
			return  $data['text']; 
	}
	
	
	function get_gender()
	{
		return $this->data['gender'];
	}
	
	
	function total_job_post()
	{
	          return  $this->num_rows($this->query_silent('SELECT * FROM `post_job` WHERE `user_id`='.$this->get_id()));
  	}
	
	function Since()
	{
	          return  date('M d, Y',strtotime($this->data['date']));
  	}
	
	function last_login()
	{
	        $sql='SELECT * FROM `user_login_details` WHERE `id`='.$this->get_id().' ';
			$run=$this->query_silent($sql);
			$data=$this->fetch_array($run);
			return  date('M d, Y',strtotime($data['date'])); 
  	}
	
}
 
?>