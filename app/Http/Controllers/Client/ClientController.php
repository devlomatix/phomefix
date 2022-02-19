<?php

namespace App\Http\Controllers\Client;

use App\Models\Post;
use App\Models\Inquiry;
use App\Events\InquiryEvent;
use App\Models\Subscription;
use Illuminate\Http\Request;
use App\Events\SubscriptionEvent;
use App\Services\AppMailingService;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;


class ClientController extends Controller
{
    public function home(Request $request)
    {
        $banners = Post::whereHas('categories', function($q)
        {
            $q->where('slug', '=', 'banner');
        })->get();

        $services = Post::whereHas('categories', function($q)
        {
            $q->where('slug', '=', 'services');
        })->get();

        $blogs = Post::whereHas('categories', function($q)
        {
            $q->where('slug', '=', 'blogs');
        })->get();

        $products = Post::whereHas('categories', function($q)
        {
            $q->where('slug', '=', 'products');
        })->get();

        
        return view('client.pages.home')->with('banners',$banners)
                                        ->with('services',$services)
                                        ->with('blogs',$blogs)
                                        ->with('products',$products);
    }

    public function blogs()
    {
        $blogs = Post::whereHas('categories', function($q)
        {
            $q->where('slug', '=', 'blogs');
        })->get();
        
        return view('client.pages.blogs')->with('blogs',$blogs);
    }

    public function blog()
    {

        return view('client.pages.blogs');
    }

    public function about()
    {

        $services = Post::whereHas('categories', function($q)
        {
            $q->where('slug', '=', 'services');
        })->get();

        $products = Post::whereHas('categories', function($q)
        {
            $q->where('slug', '=', 'products');
        })->get();

        $about = Post::whereHas('categories', function($q)
        {
            $q->where('slug', '=', 'about');
        })->get();

        return view('client.pages.about')->with('services',$services)->with('products',$products)->with('about',$about);
    }

    public function service()
    {
        $services = Post::whereHas('categories', function($q)
        {
            $q->where('slug', '=', 'services');
        })->get();

        return view('client.pages.service')->with('services',$services);
    }

    public function contact()
    {

        return view('client.pages.contact');
    }

    public function subscribe(Request $request)
    {
        $subscription = New Subscription;
        $subscription->email = $request->email;
        $subscription->save();

        //$response = new Response('Hello world');
        //$response->withCookie(cookie('subscription','subscription',10));

        //event(new SubscriptionEvent($request));
        event(new SubscriptionEvent($request->email));
        //activity()->log('Look mum, I logged something');

        return redirect() ->route('app.home')->withCookie(cookie('subscription','subscription',10));

    }

    public function unSubscribe(Request $request,AppMailingService $mail){


    }

    public function inquiry(Request $request)
    {

        dd($request->all());
        $validate = $request->validate([
            'g-recaptcha-response' => 'required|captcha'
        ]);

        $inquiry = new Inquiry;
        $inquiry->name = $request->name;
        $inquiry->email = $request->email;
        $inquiry->phone = $request->phone;
        $inquiry->subject = $request->subject;
        $inquiry->message = $request->message;
        $inquiry->save();

        event(new InquiryEvent($request));
        return redirect() ->route('app.home');
    }

    public function cookie_consent()
    {
        return redirect()->back()->withCookie(cookie('cookie_consent','cookie_consent',(365 * 24 * 60)));
    }

    public function test(){
        // $settings = \AppSetting::all();
        // $settings = \AppSetting::set('app_name','devlomatix10');
        // $settings = \AppSetting::get('app_description');
        // return $settings;
        //return AppSetting::all();
        //return 'test from clientcontroller';

    }
}
