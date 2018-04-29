<?php

namespace App\Http\Controllers\Auth;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Socialite;
use App\User;
use Illuminate\Support\Str;
use Auth;

class SocialitesController extends Controller
{
    public function redirectToProvider()
    {
        return Socialite::driver('github')->redirect();
    }

    /**
     * 从GitHub获取认证用户信息
     */
    public function handleProviderCallback()
    {
        $user = Socialite::driver('github')->user();
        dd($user);
    }

}

//    //跳转到QQ授权页面
//    public function qq()
//    {
//        return Socialite::with('qq')->redirect();
//    }
//
//    //用户授权后，跳转回来
//    public function callback()
//    {
//        $info = Socialite::driver('qq')->user();
//
//        $user = User::where('provider', 'qq')->where('uid', $this->id)->first();
//
//        if (!$user) {
//            $user = User::create([
//                'provider' => 'qq',
//                'uid' => $info->id,
//                'email' => 'qq+' . $info->id . '@example.com',
//                'password' => bcrypt(Str::random(10)),
//                'name' => $info->nickname,
//                'avatar' => $info->avatar,
//            ]);
//        }
//
//        Auth::login($user, true);
//        return redirect('/');
//    }

