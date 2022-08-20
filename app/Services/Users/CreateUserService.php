<?php

namespace App\Services\Users;

use App\Enums\TypeUser;
use App\Repositories\Interfaces\ICustomerRepository;
use App\Repositories\Interfaces\IUserRepository;
use App\Services\Auth\LoginService;
use Exception;
use Throwable;

class CreateUserService
{
    private IUserRepository $user_repository;
    private LoginService $login_service;
    private ICustomerRepository $customer_repository;

    public function __construct(
        IUserRepository $user_repository,
        LoginService $login_service,
        ICustomerRepository $customer_repository)
    {
        $this->user_repository = $user_repository;
        $this->login_service = $login_service;
        $this->customer_repository = $customer_repository;
    }

    /**
     * @param array $data
     * @return array
     * @throws Throwable
     */
    public function execute(array $data): array
    {
        $user_existent = $this->user_repository->findByEmail($data['email']);
        throw_if($user_existent, new Exception('O e-mail informado já está sendo usado', 400)); //TODO enviar somente um token para o front

        $data_user = ['name' => $data['name'], 'email' => $data['email'], 'password' => bcrypt($data['password'])];
        $user = $this->user_repository->create($data_user);
        throw_unless($user, new Exception('Erro ao criar usuário', 500)); //TODO enviar somente um token para o front

        $data_customer = ['user_id' => $user->id, 'name' => $data['name'], 'email' => $data['email']];
        $customer = $this->customer_repository->create($data_customer);
        throw_unless($customer, new Exception('Erro ao criar Cliente', 500)); //TODO enviar somente um token para o front

        return $this->login_service->execute(['email' => $data['email'], 'password' => $data['password']]);
    }
}
