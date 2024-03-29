<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Koriym\HttpConstants\StatusCode;

class GetController extends Controller
{
    public function __invoke(): JsonResponse
    {
        $users = User::all();

        return UserResource::collection($users)
            ->response()
            ->setStatusCode(StatusCode::OK);
    }
}
