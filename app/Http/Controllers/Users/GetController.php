<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use App\Models\User;
use Koriym\HttpConstants\StatusCode;

class GetController extends Controller
{
    public function __invoke()
    {
        $users = User::all();

        return UserResource::collection($users)
            ->response()
            ->setStatusCode(StatusCode::OK);
    }
}
