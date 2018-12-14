[![N|Solid](https://camo.githubusercontent.com/5ceadc94fd40688144b193fd8ece2b805d79ca9b/68747470733a2f2f6c61726176656c2e636f6d2f6173736574732f696d672f636f6d706f6e656e74732f6c6f676f2d6c61726176656c2e737667)](https://nodesource.com/products/nsolid)

# Config

```sh
composer create-project --prefer-dist laravel/laravel blog
```

- Copy /blog files in server root folder
- Copy .htaccess
- cfg .env

```sh
php artisan make:auth
```

```sh
php artisan make:migration create_users_table
```

- Replace the standard code from the file of the same name

```sh
php artisan make:migration create_password_resets_table
```

- Replace the standard code from the file of the same name

```sh
php artisan make:migration create_roles_table
```

- Replace the standard code from the file of the same name

```sh
php artisan migrate
```

```sh
php artisan make:migration create_role_user_table
```

- Replace the standard code from the file of the same name

```sh
php artisan migrate
```

```sh
php artisan make:model Role
```

```sh
php artisan make:controller HomeController
```

- Create the necessary roles using the code of the same name controller
- **Do not forget to connect the model itself to the controller and allow it to fill in the fields**
- Configure relations in Role and User models using the example snippet many_to_many (**User = Role, Role = User**)
- Configure the validator in the registration controller (name ---> login)
- Replace the registration code in the registration controller
- Redefine the public function username to return login instead of email (see **LoginController**)
- Allow fill login instead name in User model