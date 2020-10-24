<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Thread;

use Auth;
use Session;

class RouteController extends Controller
{
    //
    public function go(){
      return view('index');
    }
    public function game_guide(){
      return view('game_guide_section.index');
    }
    public function community(){
      return view('community.index');
    }
    public function community_news_index(){
      return view('community.news.index');
    }
    public function community_forum_index(){
      return view('community.forum.index');
    }

    public function view_thread(Thread $thread){
      // dd($thread->views);
      $thread = Thread::find($thread->id);
      $thread->views +=1;
      $thread->timestamps = false;
      $thread->save();

      return view('community.forum.view_thread')
            ->withThread($thread);

    }

}
