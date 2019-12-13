# ArchitectCore


## Roles & Permisos

### Permisos

#### Añadir un permisso a un role 

*$role->addPermission('permission-identifier');*

o pasando el permisso al metodo

*$role->addPermission(Permission::find(2));*


#### Añadir un permisso a un usuario 

*$user->enablePermission('permission-identifier');*

o pasando el permisso al metodo

*$user->enablePermission(Permission::find(2));*

### Roles

#### Añadir un role a un usuario

*$user->addRole('role-identifier');*

o pasando el permisso al metodo

*$user->addRole(Role::find(2));*

#### Verificar si un usuario tiene un role determinado

*$user->hasRole('role-identifier');*

#### Verificar si un usuario tiene varios roles determinado

*$user->hasRole(['role-1', 'role-2']);*
