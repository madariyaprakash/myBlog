<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
use Socialite;
use App\User;
use Helper;
use Session;

class LoginController extends Controller
{
    // private $password;
    // $Password  = passwordFunction(6, "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789");
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;


//---------------------------------******** Facebook login requited functions STARTS HERE -----------------------
    /**
     * Redirect the user to the GitHub authentication page.
     *
     * @return \Illuminate\Http\Response
     */


    // whenever we will hit the respective provider name in root that will reflet here as parameter for this fuction to perform the login action
    public function redirectToProvider($provider)  
    {
        return Socialite::driver($provider)->redirect();
        

    }
    public function handleProviderCallback($provider)
    {
        $user = Socialite::driver($provider)->stateless()->user();
        //dd($user);
        $authUser = $this->findOrCreateUser($user, $provider);
        Auth::login($authUser, true);
        return redirect($this->redirectTo);
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return \Illuminate\Http\Response
     */
    public function findOrCreateUser($user, $provider)
    {
        //$cont = new LoginController();
        //$authUser = Socialite::driver($provider)
        $authUser = User::where('provider_id', $user->id)->first();
        //$alreadyExist = User::where('email', $user->email)->get();

        if($authUser){
            return $authUser;
        }
        // elseif(sizeof($alreadyExist) > 0){
        //      # tell user not to duplicate same email
        //     $msg = 'This user already signed up !';
        //     Session::flash('userExistError', $msg);
        //     return back();
        // }
        // else{
       // $this->guard()->login($user);
        
            return User::create([
                'name' => $user->name,
                'email' => $user->email,
                'password' => Helper::generateStrongPassword(),
                'provider' =>strtoupper($provider),
                'provider_id' => $user->id
            ]);
        

    }

 

//---------------------------------******** Facebook login requited functions ENDS HERE -----------------------

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
