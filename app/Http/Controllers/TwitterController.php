<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Twitter;
use File;

class TwitterController extends Controller
{
	/**
     * Create a new controller instance.
     *
     * @return void
     */
    public function add($user_id = null, $user = null, $secret = null)
    {
        $data = Twitter::postFollow(['screen_name' => $user, 'format' => 'json']);
    	return view('twitter',compact('data'));
    }

    public function feed($user_id = null, $secret = null){
        $data = Twitter::getHomeTimeline(['count' => 20, 'format' => 'json']);
        return view('twitter',compact('data'));
    }

    public function remove($user_id = null, $user = null, $secret = null){
        $data = Twitter::postUnfollow(['user_id' => $user_id, 'screen_name' => $user, 'screen_name' => '$secret']);
        return view('twitter',compact('data'));
    }
}