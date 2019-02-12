<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

Tablas:

usuario (id, nombre, password, administrador[ boolean ])
ticket (id, title, status, updates, id_categoria, id_usuario, id_nombre)
categoria (id, nombre)
priority (id, nombre)

Relaciones: 
usuario 1:N ticket
ticket N:1 categoria
ticket N:1 priority

Enlaces: 
/new_ticket (Formulario para crear un nuevo ticket)
/my_tickets (Vista para ver todos tus tickets)
/tickets/{ticket_id} (Muestra el ticket con el id indicado)
/admin/tickets (Para los usuarios administradores, ven todos los tickets y pueden cerrarlos)
/admin/close_ticket/{ticket_id} (Si eres administrador, cierra el ticket con el id)
