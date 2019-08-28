<?php
namespace App\Http\Controllers;

use App\Http\Requests\TwitterAddRemoveRequest;
use App\Http\Requests\TwitterFeedRequest;
// C:\OSPanel\domains\twitter_api.com\app\Http\Request\TwitterAddRequest.php
use Twitter;
use File;

class TwitterController extends Controller
{
	/**
     * Create a new controller instance.
     *
     * @return void
     */
    public function add(TwitterAddRemoveRequest $request)
    {
        $data = Twitter::postFollow(['screen_name' => $request->user, 'screen_name' => $request->secret, 'format' => 'json']);
    	return view('twitter');
    }

    public function feed(TwitterFeedRequest $request){
        $data = Twitter::getHomeTimeline(['count' => 20, 'format' => 'json']);
        return view('twitter');
    }

    public function remove(TwitterAddRemoveRequest $request){
        $data = Twitter::postUnfollow(['user_id' => $request->id, 'screen_name' => $request->user, 'screen_name' => $request->secret]);
        return view('twitter');
    }
}