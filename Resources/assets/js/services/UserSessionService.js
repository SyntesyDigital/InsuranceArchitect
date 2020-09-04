export default class UserSessionService {

    constructor(session) {
        this.session = session;
        if(this.session !== undefined && this.isTest()){
            console.log("UserSession :: ",this.session);
        }
    }

    isTest() {
        return this.session.test;
    }

    getAPIPermissions() {
        return this.session.veos_permissions;
    }

    getAPIRoles() {
        return this.session.veos_roles;
    }

    getRole() {
        return this.session.role;
    }

    hasRole(role) {
        return this.session.role == role;
    }

    hasPermission(identifier) {
        return this.session.permissions
                .filter(permission => identifier == permission.identifier).length > 0 ? true : false;
    }

}


