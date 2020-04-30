<?php

namespace App\Http\Controllers;

use App\Entities\Core\User;
use App\Http\Requests\UserRequest;
use App\Http\Resources\User as UserResource;

class UserController extends Controller
{
    /**
     * @param UserRequest $request
     * @return UserResource
     */
    public function store(UserRequest $request)
    {
        $user = User::create($request->validated());

        return new UserResource($user);
    }

    /**
     * @param User $user
     * @return UserResource
     */
    public function show(User $user)
    {
        return new UserResource($user);
    }
}
