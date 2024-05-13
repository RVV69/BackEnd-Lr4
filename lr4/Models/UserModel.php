<?php

/* Клас UserModel використовується для представлення моделі користувача
 

class UserModel {
    public function getMessage() {
        return "Це повідомлення від UserModel";
    }
}

$view = new UserModel();
echo $view->getMessage();
*/


namespace Models {
    class UserModel {
        public function getMessage() {
            return "Це повідомлення від UserModel";
        }
    }
}

namespace {
    $model = new \Models\UserModel();
    echo $model->getMessage();
}

?>