<?php
namespace Artisanian\Services;

use App\Review;
class Timer {
	//Function to calculate time different for notification
	public static function timeAgo($timestamp){
		$timestamp      = (int) $timestamp;
		$current_time   = time();
		$diff           = $current_time - $timestamp;
		
        //intervals in seconds
		$intervals      = array (
			'year' => 31556926, 'month' => 2629744, 'week' => 604800, 'day' => 86400, 'hour' => 3600, 'minute'=> 60
			);
		if ($diff == 0)
		{
			return 'just now';
		}
		
		if ($diff < 60)
		{
			return $diff == 1 ? $diff . ' second ago' : $diff . ' seconds ago';
		}
		
		if ($diff >= 60 && $diff < $intervals['hour'])
		{
			$diff = floor($diff/$intervals['minute']);
			return $diff == 1 ? $diff . ' minute ago' : $diff . ' minutes ago';
		}
		
		if ($diff >= $intervals['hour'] && $diff < $intervals['day'])
		{
			$diff = floor($diff/$intervals['hour']);
			return $diff == 1 ? $diff . ' hour ago' : $diff . ' hours ago';
		}
		
		if ($diff >= $intervals['day'] && $diff < $intervals['week'])
		{
			$diff = floor($diff/$intervals['day']);
			return $diff == 1 ? $diff . ' day ago' : $diff . ' days ago';
		}
		
		if ($diff >= $intervals['week'] && $diff < $intervals['month'])
		{
			$diff = floor($diff/$intervals['week']);
			return $diff == 1 ? $diff . ' week ago' : $diff . ' weeks ago';
		}
		
		if ($diff >= $intervals['month'] && $diff < $intervals['year'])
		{
			$diff = floor($diff/$intervals['month']);
			return $diff == 1 ? $diff . ' month ago' : $diff . ' months ago';
		}
		
		if ($diff >= $intervals['year'])
		{
			$diff = floor($diff/$intervals['year']);
			return $diff == 1 ? $diff . ' year ago' : $diff . ' years ago';
		}
	}



	public static function ImageValidator($file){
		$ext = array("jpg", "png", "gif");
		if (!in_array($file, $ext)) {
			return false;
		}else{
			return true;
		}
	}


	//*Review stars*/
	public static function stars($totalReviews){

		$countReview = Review::where('user_id', $totalReviews)->pluck('user_id');
		$stars = count($countReview);
		switch ($stars) {

			case null:
			echo 
			'<i class="fa fa-star-o"></i>
			<i class="fa fa-star-o"></i>
			<i class="fa fa-star-o"></i>
			<i class="fa fa-star-o"></i>
			<i class="fa fa-star-o"></i>';
			break;

			case $stars <= 10:
			echo 
			'<i class="fa fa-star-o"></i>
			<i class="fa fa-star-o"></i>
			<i class="fa fa-star-o"></i>
			<i class="fa fa-star-o"></i>
			<i class="fa fa-star-o"></i>';
			break;

			case ($stars == 11 && $stars <= 20):
			echo 
			'<i class="fa fa-star"></i>
			<i class="fa fa-star-o"></i>
			<i class="fa fa-star-o"></i>
			<i class="fa fa-star-o"></i>
			<i class="fa fa-star-o"></i>';
			break;

			case ($stars > 20 && $stars < 40):
			echo 
			'<i class="fa fa-star"></i>
			<i class="fa fa-star-half-o"></i>			
			<i class="fa fa-star-o"></i>
			<i class="fa fa-star-o"></i>
			<i class="fa fa-star-o"></i>';
			break;

			case ($stars >= 40 && $stars < 60):
			echo 
			'<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>			
			<i class="fa fa-star-o"></i>
			<i class="fa fa-star-o"></i>
			<i class="fa fa-star-o"></i>';
			break;

			case ($stars >= 60 && $stars < 80):
			echo 
			'<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>			
			<i class="fa fa-star"></i>
			<i class="fa fa-star-o"></i>
			<i class="fa fa-star-o"></i>';
			break;

			case ($stars >= 80 && $stars < 90):
			echo 
			'<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>			
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star-half-o"></i>';
			break;

			case $stars >= 90:
			echo 
			'<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>			
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>';
			break;
		}
	}



	public static function fiveStars($artisanID){
		$countReview = Review::where('user_id', $artisanID)->pluck('user_id');
		$num = count($countReview);
		
		switch ($num) {
			case null:
			echo '';
			break;
			case $num < 55:
			echo '';
			break;
			case $num >= 55:
			echo 'job_position_featured';
			break;
		}
	}


	public static function reviewNumber($artisan){
		return $countReview = Review::where('user_id', $artisan)->get();
	}

}