# Descipción

Implemantación de un sistema de control de acceso mediante el uso de roles y permisos, haciendo uso de Laravel 5.5, Laravel passport, mpociot/laravel-apidoc-generator. Con este proyecto se pretende garantizar un correcto control de acceso a las aplicaciones, sin importar cuantos diferentes roles pueda requrir un mismo usuario, ya que el sistema es validado contra los permisos disponibles de los usuarios segun sus roles, y permisos directamente asignados o bloqueados.   

## Permisos
Los persmisos permiten acceso a los usuarios a los diferentes modulos de la aplicacion, para el sistema implementado en este proyecto, cada modulo tendra unos permisos básicos descritos a continuación:  
- modulo.create  
- modulo.read  
- modulo.read.mine  
- modulo.update  
- modulo.update.mine  
- modulo.delete  
- modulo.delete.mine   

### Opciones disponibles  
- crear Permisos  
- eliminar permisos  

## Roles
mediante la cración de roles, se definen permisos especificos para un tipo de usuario.  

### opciones disponibles  
- crear roles  
- listar roles  
- actualizar roles  
- eliminar roles    
- asignar y eliminar permisos en un rol 

## Usuarios  
todos las cuentas de acceso a la aplicacion.

### opciones disponibles:  
- crear usuarios    
- listar usuarios  
- actualizar usuarios  
- eliminar usuarios        
- listar roles de un usuario  
- asignar roles de un usuario específico.  
- retirar roles de un usuario específico.  
- listar permisos de un usuario  
- retirar permisos de un usuario específico.  
- asignar permisos de un usuario específico.    
  
## Seeders
la aplicacion ya viene parametrizada con los datos minimos requeridos, revisar los seeders para mayor información.  

## uso   
- los diferentes permisos y roles pueden ser creados y asiganados mediante las rutas de apis disponibles  
- para validar el acceso a un modulo especifico, se debe agregar el middleware ApplicationAccessControl con sus respectivas restricciones a la ruta deseada. Ej:  

Route::get('id/{id_user}/roles', 'UsersController@roles')
->middleware(['ApplicationAccessControl:user_has_user_roles.read','auth:api']);   



## documentacion de servicios
documentacion: https://github.com/mpociot/laravel-apidoc-generator/  
  
## Agradecimientos especiales:
- Laravel team: Por este excelente framework   
- mpociot: por su sistema de documentacion de apis, https://github.com/mpociot/laravel-apidoc-generator/  
- stackoverflow: por su incontable cantidad de informacion que me sirvio de ayuda muchos de las dudas que se me presentaron.  

## Contacto y soporte  
Para soporte personalizado me pueden contactar a través del correo: leosalass@gmail.com