<?php

namespace App\Http\Controllers\Users\User;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use App\Models\User;
use Koriym\HttpConstants\StatusCode;

class GetController extends Controller
{
    public function __invoke(User $user)
    {
        return UserResource::make($user)
            ->response()
            ->setStatusCode(StatusCode::OK);
    }
}
