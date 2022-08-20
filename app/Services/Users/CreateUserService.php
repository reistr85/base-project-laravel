<?php

namespace App\Services\Users;

use App\Repositories\Interfaces\IUserRepository;
use App\Services\Auth\LoginService;
use Exception;
use Throwable;

class CreateUserService
{
    private IUserRepository $user_repository;
    private LoginService $login_service;

    public function __construct(
        IUserRepository $user_repository,
        LoginService $login_service)
    {
        $this->user_repository = $user_repository;
        $this->login_service = $login_service;
    }

    /**
     * @param array $data
     * @return array
     * @throws Throwable
     */
    public function execute(array $data): array
    {
        $data['password'] = bcrypt($data['password']);

        $user_existent = $this->user_repository->findByEmail($data['email']);
        throw_if($user_existent, new Exception('O e-mail informado já está sendo usado', 400)); //TODO enviar somente um token para o front

        $user = $this->user_repository->create($data)->toArray();
        throw_unless($user, new Exception('Erro ao criar usuário', 500)); //TODO enviar somente um token para o front

        $login = $this->login_service->execute(['email', $data['email'], 'password' => $data['password']]);
        return [
            'user' => $user,
            'token' => $login
        ];
    }
}
