<?php

namespace App\Traits;

use App\Friendship;

trait Friendable

{

	public function add_friend($user_requested_id)
	{	
		if($this->id === $user_requested_id)
		{
			return 0;
		}

		if($this->is_following($user_requested_id) === 1)
		{
			return "already following this user";
		}

		if($this->has_pending_follow_request_sent_to($user_requested_id) === 1)
		{
			return "already sent a follow request";
		}

		$Friendship = Friendship::create([

			'requester' => $this->id,
			'user_requested' => $user_requested_id,
		]);

		if($Friendship)
		{
			return 1;
		}
		return 0;
	}

	public function accept_friend($requester)
	{
		
		$friendship = Friendship::where('requester', $requester)
						->where('user_requested', $this->id)
						->first();

		if($friendship)
		{
			$friendship->update([
				'status' => 1
			]);
		// if($this->is_following($requester) === 1)
		// {
		// 	return 2;
		// }

		// if($this->has_pending_follow_request_sent_to($requester) === 1)
		// {
		// 	return 3;
		// }

		// 	return 1;
		}

		// return 0;
	}
 //////////////////////////////////////GET All Friends Followers and Following//////////////////////////////////////////////////////
	public function friends()
	{	
		$friends = array();
		

		$f1 = Friendship::where('status', 1)
					->where('requester', $this->id)
					->get();

		foreach($f1 as $friendship):
			array_push($friends, \App\User::find($friendship->user_requested));
		endforeach;


		$friends2 = array();
		
		$f2 = Friendship::where('status', 1)
					->where('user_requested', $this->id)
					->get();

		foreach($f2 as $friendship):
			array_push($friends2, \App\User::find($friendship->requester));
		endforeach;

		return array_merge($friends, $friends2);

		
	}


	public function following()
	{	
		$friends = array();
		

		$f1 = Friendship::where('status', 1)
					->where('requester', $this->id)
					->get();

		foreach($f1 as $friendship):
			array_push($friends, \App\User::find($friendship->user_requested));
		endforeach;

		return $friends;

		
	}

	public function followers()
	{	
		
		$friends2 = array();
		
		$f2 = Friendship::where('status', 1)
					->where('user_requested', $this->id)
					->get();

		foreach($f2 as $friendship):
			array_push($friends2, \App\User::find($friendship->requester));
		endforeach;

		return $friends2;

		
	}


	//////////////////////////////////////GET Requesters of Pending Friends and Follow Requests/////////////////////////////////////////////

	public function pending_friend_requests()
	{
		$users = array();
		
		$friendships = Friendship::where('status', 0)
					->where('user_requested', $this->id)
					->get();

		foreach($friendships as $friendship):
			array_push($users, \App\User::find($friendship->requester));
		endforeach;
		
		return $users;
	}

	public function pending_follow_requests()
	{
		$users = array();
		
		$friendships = Friendship::where('status', 0)
					->where('user_requested', $this->id)
					->get();

		foreach($friendships as $friendship):
			array_push($users, \App\User::find($friendship->requester));
		endforeach;
		
		return $users;
	}





 ///////////////////////////////GET Friends, Followers and Following ids///////////////////////////////////////////////////

	public function friends_ids()
	{
		return collect($this->friends())->pluck('id')->toArray();
	}


	public function followers_ids()
	{
		return collect($this->followers())->pluck('id')->toArray();
	}

	public function following_ids()
	{
		return collect($this->following())->pluck('id')->toArray();
	}



 ////////////////////////////////////////////////Check Friends, Followers and Following from their ids collected above///////////////////

	public function is_friends_with($user_id)
	{
		if(in_array($user_id, $this->friends_ids()))
		{
			return 1;
		}
		else
		{
			return 0;
		}
	}

	public function is_follower($user_id)
	{
		if(in_array($user_id, $this->followers_ids()))
		{
			return 1;
		}
		else
		{
			return 0;
		}
	}

	public function is_following($user_id)
	{
		if(in_array($user_id, $this->following_ids()))
		{
			return 1;
		}
		else
		{
			return 0;
		}
	}



 ////////////////////////////////////////////////Get pending Friend and Follow request ids///////////////////////////////
	public function pending_friend_requests_ids()
	{
		return collect($this->pending_friend_requests())->pluck('id')->toArray();
	}


	public function pending_follow_requests_ids()
	{
		return collect($this->pending_follow_requests())->pluck('id')->toArray();
	}




 //////////////////////////////////////Get pending Friend and follow SENT requests///////////////////////////////////////////////////



	public function pending_friend_requests_sent()
	{
		$users = array();

		$friendships = Friendship::where('status', 0)
						->where('requester', $this->id)
						->get();
		foreach($friendships as $friendship):
			array_push($users, \App\User::find($friendship->user_requested));
		endforeach;

		return $users;
	}

		public function pending_follow_requests_sent()
	{
		$users = array();

		$friendships = Friendship::where('status', 0)
						->where('requester', $this->id)
						->get();
		foreach($friendships as $friendship):
			array_push($users, \App\User::find($friendship->user_requested));
		endforeach;

		return $users;
	}


	//////////////////////////////////////////////////Get pending Friend and follow SENT requests IDs////////////////////////////



	public function pending_friend_requests_sent_ids()
	{
		return collect($this->pending_friend_requests_sent())->pluck('id')->toArray();
	}


	public function pending_follow_requests_sent_ids()
	{
		return collect($this->pending_follow_requests_sent())->pluck('id')->toArray();
	}

 ///////////////////////////////////////////////////Check if has Friend and Follow Request///////////////////////////////////////

	public function has_pending_friend_request_from($user_id)
	{
		if(in_array($user_id, $this->pending_friend_requests_ids()))
		{
			return 1;
		}
		else
		{
			return 0;
		}
	}

	public function has_pending_follow_request_from($user_id)
	{
		if(in_array($user_id, $this->pending_follow_requests_ids()))
		{
			return 1;
		}
		else
		{
			return 0;
		}
	}


	//////////////////////////////////////////////////////////Check if has Friend and Follow Request SENT?????????????????????/

	public function has_pending_friend_request_sent_to($user_id)
	{
		if(in_array($user_id, $this->pending_friend_requests_sent_ids()))
		{
			return 1;
		}
		else
		{
			return 0;
		}
	}

	public function has_pending_follow_request_sent_to($user_id)
	{
		if(in_array($user_id, $this->pending_follow_requests_sent_ids()))
		{
			return 1;
		}
		else
		{
			return 0;
		}
	}

}