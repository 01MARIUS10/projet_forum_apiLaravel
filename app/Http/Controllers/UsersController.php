<?php

namespace App\Http\Controllers;

use App\Models\UserAuth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\AuthentificationRequest;
use App\Models\UserProfil;

class UsersController extends Controller
{
    public function login(AuthentificationRequest $request)
    {
        // dd($request->all());
        $credential = $request->validated();
        if (Auth::attempt($credential)) {
            dd(Auth::user());
        } else {
            dd('nemany');
        }
    }
    public function signin(AuthentificationRequest $request)
    {
        $user = new UserAuth();
        $user->email = $request->input('email');
        $user->pseudo = $request->input('pseudo');
        $user->password = Hash::make($request->input('password'));
        $user->save();

        $userProfil = new UserProfil();
        $userProfil->name = $request->input('name');
        $userProfil->work = $request->input('work');
        $userProfil->adress = $request->input('adress');
        $userProfil->school = $request->input('school');
        $userProfil->auth_id = $user->id;
        $userProfil->save();
        dd($userProfil);
    }
    //
}
// https://laravel.com/docs/10.x/configuration
// https://laravel.com/docs/10.x/structure
// https://laravel.com/docs/10.x/frontend
// https://laravel.com/docs/10.x/starter-kits
// https://laravel.com/docs/10.x/deployment
// https://laravel.com/docs/10.x/lifecycle
// https://laravel.com/docs/10.x/container
// https://laravel.com/docs/10.x/providers
// https://laravel.com/docs/10.x/facades
// https://laravel.com/docs/10.x/routing
// https://laravel.com/docs/10.x/middleware
// https://laravel.com/docs/10.x/csrf
// https://laravel.com/docs/10.x/controllers
// https://laravel.com/docs/10.x/requests
// https://laravel.com/docs/10.x/responses
// https://laravel.com/docs/10.x/views
// https://laravel.com/docs/10.x/blade
// https://laravel.com/docs/10.x/vite
// https://laravel.com/docs/10.x/urls
// https://laravel.com/docs/10.x/session
// https://laravel.com/docs/10.x/validation
// https://laravel.com/docs/10.x/errors
// https://laravel.com/docs/10.x/errors
// https://laravel.com/docs/10.x/artisan
// https://laravel.com/docs/10.x/broadcasting
// cache
// collections
// contracts
// https://laravel.com/docs/10.x/events
// https://laravel.com/docs/10.x/filesystem
// https://laravel.com/docs/10.x/helpers
// https://laravel.com/docs/10.x/http-client
// https://laravel.com/docs/10.x/localization
// https://laravel.com/docs/10.x/mail
// https://laravel.com/docs/10.x/notifications
// https://laravel.com/docs/10.x/packages
// https://laravel.com/docs/10.x/processes
// https://laravel.com/docs/10.x/queues
// https://laravel.com/docs/10.x/rate-limiting
// https://laravel.com/docs/10.x/strings
// https://laravel.com/docs/10.x/scheduling
// https://laravel.com/docs/10.x/authentication
// https://laravel.com/docs/10.x/authorization
// https://laravel.com/docs/10.x/verification
// https://laravel.com/docs/10.x/encryption
// https://laravel.com/docs/10.x/hashing
// https://laravel.com/docs/10.x/passwords
// https://laravel.com/docs/10.x/database
// https://laravel.com/docs/10.x/queries

// https://laravel.com/docs/10.x/pagination
// https://laravel.com/docs/10.x/migrations
// https://laravel.com/docs/10.x/seeding
// https://laravel.com/docs/10.x/redis
// https://laravel.com/docs/10.x/eloquent
// https://laravel.com/docs/10.x/eloquent-relationships
// https://laravel.com/docs/10.x/eloquent-collections
// https://laravel.com/docs/10.x/eloquent-mutators
// https://laravel.com/docs/10.x/eloquent-resources
// https://laravel.com/docs/10.x/eloquent-serialization
// https://laravel.com/docs/10.x/eloquent-factories

// https://laravel.com/docs/10.x/testing
// https://laravel.com/docs/10.x/http-tests
// https://laravel.com/docs/10.x/console-tests
// https://laravel.com/docs/10.x/dusk
// https://laravel.com/docs/10.x/database-testing
// https://laravel.com/docs/10.x/mocking
