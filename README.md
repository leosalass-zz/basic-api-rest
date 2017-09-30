# Descipción

Implemantacion de Laravel 5.5 con el sistema de API Authentication (passport), y un sistemas de control de acceso mediante el uso de Roles y permisos asignados a los usuarios.


##Permisos
Los persmisos permiten acceso a los usuarios a los diferentes modulos de la aplicacion, para el sistema implementado en este proyecto, cada modulo tendra cuatro permisos básicos(Crete, Read, Update, Delele) Descritos de la siguiente forma:  
- nombre_del_modulo.c  
- nombre_del_modulo.r  
- nombre_del_modulo.u  
- nombre_del_modulo.d

###Opciones disponibles  
- asignar o retirar permisos de un usuario específico.  
- asignar permisos a un rol específico

##Roles
mediante la cración de roles, podemos agrupar permisos para definir permisos especificos para un tipo de usuario.

###opciones
- crear, eliminar y actualizar roles
- asignar o retirar roles de un usuario específico