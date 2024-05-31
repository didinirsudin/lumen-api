# Lumen PHP Framework

[![Build Status](https://travis-ci.org/laravel/lumen-framework.svg)](https://travis-ci.org/laravel/lumen-framework)
[![Total Downloads](https://img.shields.io/packagist/dt/laravel/framework)](https://packagist.org/packages/laravel/lumen-framework)
[![Latest Stable Version](https://img.shields.io/packagist/v/laravel/framework)](https://packagist.org/packages/laravel/lumen-framework)
[![License](https://img.shields.io/packagist/l/laravel/framework)](https://packagist.org/packages/laravel/lumen-framework)

Laravel Lumen is a stunningly fast PHP micro-framework for building web applications with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Lumen attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as routing, database abstraction, queueing, and caching.

## Official Documentation

Documentation for the framework can be found on the [Lumen website](https://lumen.laravel.com/docs).

## PHP-JWT

Documentation for the firebase PHP-JWT can be found on the [firebase/PHP-JWT](https://github.com/firebase/php-jwt).

## API Routes

<table>
<thead>
<tr>
<th>HTTP Method</th>
<th>Path</th>
<th>Action</th>
<th>Desciption</th>
</tr>
</thead>
<tbody>
<tr>
<td>POST</td>
<td>/auth/register</td>
<td>register</td>
<td>register users</td>
</tr>
<tr>
<td>POST</td>
<td>/auth/login</td>
<td>login</td>
<td>login users</td>
</tr>
<tr>
<td>GET</td>
<td>/mhs/user</td>
<td>show</td>
<td>get users</td>
</tr>
<tr>
<td>POST</td>
<td>/mhs/profile</td>
<td>store</td>
<td>create profile</td>
</tr>
<tr>
<td>GET</td>
<td>/mhs/profile</td>
<td>show</td>
<td>get profile</td>
</tr>
<tr>
<td>PUT</td>
<td>/mhs/profile</td>
<td>update</td>
<td>update profile</td>
</tr>
<tr>
<td>DELETE</td>
<td>/mhs/profile</td>
<td>destroy</td>
<td>delete profile</td>
</tr>
<tr>
<td>POST</td>
<td>/mhs/logout</td>
<td>logout</td>
<td>logout session</td>
</tr>
</tbody>
</table>

## Contributing

Thank you for considering contributing to Lumen! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Lumen, please send an e-mail to Taylor Otwell at taylor@laravel.com. All security vulnerabilities will be promptly addressed.

## License

The Lumen framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
