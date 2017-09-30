# Descipción

Implemantación de Laravel 5.5 con el sistema de API Authentication (passport), y un sistemas de control de acceso mediante el uso de roles y permisos. con este sistema se pretende garantizar un correcto control de acceso a las aplicaciones, sin importar cuantos diferentes roles puedan requrir, ya que el sistema es validado contra los permisos disponibles de los usuarios segun sus roles, y permisos asignados o bloqueados directamente.   

## Permisos
Los persmisos permiten acceso a los usuarios a los diferentes modulos de la aplicacion, para el sistema implementado en este proyecto, cada modulo tendra unos permisos básicos descritos a continuación:  
- nombre_del_modulo.create  
- nombre_del_modulo.read  
- nombre_del_modulo.read.mine  
- nombre_del_modulo.update  
- nombre_del_modulo.update.mine  
- nombre_del_modulo.delete  
- nombre_del_modulo.delete.mine  

### Opciones disponibles  
- asignar o retirar permisos de un usuario específico.  
- asignar permisos a un rol específico

## Roles
mediante la cración de roles, se definen permisos especificos para un tipo de usuario.

### opciones
- crear usuarios  
- listar, actualizar, eliminar usuarios (pendiente)  
- crear permisos  
- crear roles  
- asignar y eliminar permisos en un rol(pendiente)  
- asignar y bloquear permisos en un usuario  
- listar los roles de un usuario  
- listar los permisos de un usuario  

## Seeders
la aplicacion ya viene parametrizada con los datos minimos requeridos, revisar los seeders para mayor información.  

## uso   
- los diferentes permisos y roles pueden ser creados y asiganados mediante las rutas de apis disponibles  
- para validar el acceso a un modulo especifico, se debe agregar el middleware ApplicationAccessControl con sus respectivas restricciones a la ruta deseada. Ej:  

Route::get('id/{id_user}/roles', 'UsersController@roles')
->middleware(['ApplicationAccessControl:user_has_user_roles.read','auth:api']);   



## documentacion de servicios (pendiente)
