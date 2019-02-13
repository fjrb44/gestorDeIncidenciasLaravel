<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>
<p>
    Tablas:
</p>
<p>
    usuario (id, nombre, password, administrador[ boolean ])
</p>
<p>
    ticket (id, title, status, updates, id_categoria, id_usuario, id_nombre)
</p>
<p>
    categoria (id, nombre)
</p>
<p>
    priority (id, nombre)
</p>
<p>
    Relaciones:
</p>
<p>
    usuario 1:N ticket
</p>
<p>
    ticket N:1 categoria
</p>
<p>
    ticket N:1 priority
</p>
<p>
    Enlaces: 
</p>
<p>
    /new_ticket (Formulario para crear un nuevo ticket)
</p>
<p>
    /my_tickets (Vista para ver todos tus tickets)
</p>
<p>
    /tickets/{ticket_id} (Muestra el ticket con el id indicado)
</p>
<p>
    /admin/tickets (Para los usuarios administradores, ven todos los tickets y pueden cerrarlos)
</p>
<p>
    /admin/close_ticket/{ticket_id} (Si eres administrador, cierra el ticket con el id)
</p>
