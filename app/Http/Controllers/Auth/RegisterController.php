<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        $messages = [

            'name.required'      => 'El nombre es requerido',
            'name.min'           => 'El nombre debe tener como mínimo 3 caracteres',
            'name.alpha'         => 'El nombre debe tener solo letras, fijate que no contenga espacios',

            'last_name.required' => 'El apellido es requerido',
            'last_name.min'      => 'El apellido debe tener como mínimo 3 caracteres',
            'last_name.alpha'    => 'El apellido debe tener solo letras, fijate que no contenga espacios',

            'email.required'     => 'El correo electrónico es requerido',
            'email.email'        => 'El correo electrónico es invalido',
            'email.max'          => 'El correo puede tener como máximo 255 caracteres',
            'email.unique'       => 'Este correo electrónico ya se encuentra registrado',

            'password.required'  => 'La contraseña es requerida',
            'password.min'       => 'La contraseña debe tener como mínimo 6 caracteres',
            'password.confirmed' => 'Las contraseñas no coinciden'
        ];

        return Validator::make($data, [
            'name' => 'required|min:3|alpha',
            'last_name' => 'required|min:3|alpha',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ], $messages);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'name'      => $data['name'],
            'last_name' => $data['last_name'],
            'email'     => $data['email'],
            'password'  => bcrypt($data['password']),
        ]);
    }
}
