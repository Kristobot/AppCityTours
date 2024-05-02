<?php

namespace App\Http\Controllers\Auth;

use App\Enums\UserType;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\StoreUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RegisteredUserController extends Controller
{
    //

    public function __invoke(StoreUserRequest $request)
    {
        $user = User::create($request->validated());
        $user->assignRole(UserType::CLIENT);

        return response()->json(['Success' => 'Usuario Creado Correctamente'], Response::HTTP_OK);
    }
}
