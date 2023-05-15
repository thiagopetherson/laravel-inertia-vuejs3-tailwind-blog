<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index() {
        if (!Auth::user())
            return Inertia::render("Auth/Login");
        else
            return redirect(RouteServiceProvider::HOME);
        // return redirect(RouteServiceProvider::HOME); // redirecionando para "/posts" (pois está HOME está definido assim no Provider)
    }

    public function store(LoginRequest $request) {
        $request->authenticate(); // Autenticando (método do breeze para autenticação)
        $request->session()->regenerate(); // Regenerando a session

        return redirect(RouteServiceProvider::HOME); // redirecionando para "/posts" (pois está HOME está definido assim no Provider)
    }

    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('login.index');
    }
}
