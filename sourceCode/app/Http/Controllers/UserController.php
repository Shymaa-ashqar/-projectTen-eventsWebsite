<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Event;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $users=User::all();
        return view("admin.users.userTable",compact("users"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.userCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        User::create($request->all());
        $users=User::all();
        return view('admin.users.userTable',compact("users"));
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('admin.users.useredit',compact("user"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,User $user)
    {
    
        $user->update($request->all());   
        $users=User::all();
        return view('admin.users.userTable',compact("users"));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete(); 
        $users=User::all();
        return view('admin.users.userTable',compact("users"));
    }

     //user profile view
     public function userProfile()
     {
        $events = Event::join('event_user', 'events.id', '=', 'event_user.event_id')
        ->where('event_user.user_id',Auth::user()->id)
               ->get(['events.*', 'event_user.*']);
         return view('userProfile',compact('events'));    
     }
     public function updateUserProfile(Request $request,User $user)
     {
         $user->update($request->all());   
         $users=User::all();
         return redirect()->back();
     }

}
