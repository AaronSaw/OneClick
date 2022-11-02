<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Contracts\Services\Auth\AuthServiceInterface;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;

/**
 * This is auth Controller.
 */
class AuthController extends Controller
{
    /**
     * auth interface
     */
    private $authInterface;

    /**
     * Create a new controller instance
     *
     * @return void
     */
    public function __construct(AuthServiceInterface $authServiceInterface)
    {
        $this->authInterface = $authServiceInterface;
    }

    /**
     * To login
     * @return View login page
     */
    public function login()
    {
        if (Auth::check()) {
            return redirect()->route('shop#index');
        }
        return view('auth.login');
    }

    /**
     * To register
     * @return View register page
     */
    public function register()
    {
        return view('auth.register');
    }

    /**
     * To store input data
     * @return Redirect register page with success message
     */
    public function store(RegisterRequest $request)
    {
        $this->authInterface->storePost($request);
        return redirect()->route('auth#register')->with(['registerSuccess' => 'Registration Successful']);
    }

    /**
     * To create input data
     * @return Redirect home page
     */
    public function create(LoginRequest $request)
    {
        $input = $this->authInterface->createPost($request);
        if ($input) {
            return redirect()->route('shop#index');
        } else {
            return back()->with('error', 'Your email and password are incorrect!');
        }
    }

    /**
     * To logout
     * @return Redirect login page
     */
    public function logout()
    {
        $this->authInterface->logoutPost();
        return redirect()->route('auth#login');
    }
}
