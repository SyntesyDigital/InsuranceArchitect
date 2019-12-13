# ArchitectCore


## Roles & Permissions

$roles = Role::find(1);

#### Añadir un permisso a un role 
$role->addPermission('permission-identifier'); o $role->addPermission(Permission::find(2)); 
