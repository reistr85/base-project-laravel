<?php

namespace App\Services\Auth;

use App\Repositories\Interfaces\IUserRepository;
use Exception;
use Throwable;

class LoginService
{
    private IUserRepository $user_repository;

    public function __construct(
        IUserRepository $user_repository
    )
    {
        $this->user_repository = $user_repository;
    }

    /**
     * @param array $credentials
     * @return array
     * @throws Throwable
     */
    public function execute(array $credentials): array
    {
        $token = auth()->attempt($credentials);
        throw_unless($token, new Exception('Unauthorized', 401)); //TODO enviar somente um token para o front

        $user = $this->user_repository->findByEmail($credentials['email']);
        throw_unless($token, new Exception('Erro ao localizar o usuário', 404)); //TODO enviar somente um token para o front

        return [
            'token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL() * 60,
            'user' => $user,
        ];
    }
}
