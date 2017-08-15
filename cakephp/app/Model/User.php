<?php
// app/Model/User.php
App::uses('AppModel', 'Model');
//App::uses('BlowfishPasswordHasher', 'Controller/Component/Auth');
App::uses('SimplePasswordHasher', 'Controller/Component/Auth');

class User extends AppModel {
    public $validate = array(
        'username' => array(
            'required' => array(
                'rule' => 'notEmpty',
                'message' => 'A username is required'
            )
        ),
        'password' => array(
            'required' => array(
                'rule' => 'notEmpty',
                'message' => 'A password is required'
            )
        ),
        'role' => array(
            'valid' => array(
                'rule' => array('inList', array('admin', 'author')),
                'message' => 'Please enter a valid role',
                'allowEmpty' => false
            )
        )
    );

    public function beforeSave($options = array()) {
        if (isset($this->data[$this->alias]['password'])) {
            //$passwordHasher = new BlowfishPasswordHasher();
            $passwordHasher = new SimplePasswordHasher(array('hashType' => 'sha256'));
            $this->data[$this->alias]['password'] = $passwordHasher->hash(
                $this->data[$this->alias]['password']
            );
        }
        return true;
    }
}
?>
