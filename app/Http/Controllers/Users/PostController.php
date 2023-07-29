<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Http\Requests\Users\PostRequest;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Koriym\HttpConstants\StatusCode;

class PostController extends Controller
{
    public function __invoke(PostRequest $request): JsonResponse
    {
        $user = new User();

        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->password = $request->get('password');

        $user->save();

        return UserResource::make($user)
            ->response()
            ->setStatusCode(StatusCode::CREATED);
    }
}
