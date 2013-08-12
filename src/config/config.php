<?php

$rules = array(
    'email' => array('required', 'email'),
    'pass' => array('required', 'min:6', 'max:18'),
    'username' => array('required', 'min:3', 'max:16', 'alpha'),
    'last_name' => array('min:3', 'max:16', 'alpha'),
    'first_name' => array('min:3', 'max:16', 'alpha'),
    'groupname' => array('required', 'min:3', 'max:16', 'alpha'),
    'permission' => array('required', 'min:3', 'max:32')
);

return array(
    'rules' => array(
        'users' => array(
            'login' => array(
                'email' => $rules['email'],
                'pass' => $rules['pass'],
            ),
            'create' => array(
                'email' => $rules['email'],
                'pass' => $rules['pass'],
                'username' => $rules['username'],
                'last_name' => $rules['last_name'],
                'first_name' => $rules['first_name']
            ),
            'show' => array(
                'email' => $rules['email'],
                'pass' => array('min:6', 'max:18'),
                'username' => $rules['username'],
                'last_name' => $rules['last_name'],
                'first_name' => $rules['first_name']
            ),
        ),
        'groups' => array(
            'create_name' => array(
                'groupname' => $rules['groupname'],
            ),
            'create_permission' => array(
                'permission' => $rules['permission']
            )
        ),
    ),
    'permissions' => array(
        'listGroups' => 'groups-management',
        'newGroupPost' => 'groups-management',
        'newGroup' => 'groups-management',
        'deleteGroup' => 'groups-management',
        'showGroup' => 'groups-management',
        'putGroup' => 'groups-management',
        'listUsers' => 'view-users-list',
        'deleteUsers' => 'delete-user',
        'newUser' => 'create-user',
        'newUserPost' => 'create-user',
        'showUser' => 'update-user-info',
        'putUser' => 'update-user-info',
        'deleteUserGroup' => 'user-group-management',
        'addUserGroup' => 'user-group-management',
    ),
);
