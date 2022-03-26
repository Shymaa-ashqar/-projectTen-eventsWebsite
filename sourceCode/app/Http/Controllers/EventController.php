<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Event;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $events=Event::all();
        return view("admin.events.eventTable",compact("events"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.events.eventCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        Event::create($request->all());
        $events=Event::all();
        return view('admin.events.eventTable',compact("events"));
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        return view('details',compact("event"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        return view('admin.events.eventEdit',compact("event"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Event $event)
    {
    
        $event->update($request->all());   
        $events=Event::all();
        return view('admin.events.eventTable',compact("events"));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        $event->delete(); 
        $events=Event::all();
        return view('admin.events.eventTable',compact("events"));
    }

    public function search(Request $request)
    {
        $categories=Category::all();
        $events = Event::query()
        ->where('name', 'LIKE', "%{$request->eventName}%")
        ->get();
        if(empty($events)){
            return redirect()->back()->with('search','No Results Found');
        }else{
              return view('bookingList',compact("events"),compact("categories"));
        }
      
    }

    public function categorySort( $data)
    {
        $categories=Category::all();
        $events = Event::query()
        ->where('category_id', 'LIKE', "%{$data}%")
        ->get();
        if($data==0){
            $events=Event::all();
            return view('bookingList',compact("events"),compact("categories"));
        }else{
            return view('bookingList',compact("events"),compact("categories"));
        } 
      
    }

    public function book(Request $request,Event $event)
    {  

        // if (Auth::check()) {
        //     if($request->check_out<$request->check_in){
        //     $error=true;
        //     return redirect()->back()->with('message','Unvalid Checkout Booking');
            
        // }
     
             $id=Auth::user()->id;
            $event->users()->attach($id,['username'=> $request->username,'phone'=>$request->phone,
            'quantity'=>$request->quantity,'bookedDate'=>Carbon::now()]);
            return redirect()->back();
             
         
        // else{
        //     return redirect('/login'); 
        // }
          
    }
}
