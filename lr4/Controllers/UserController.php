<?php

/* Клас UserController використовується для керування діями користувача


class UserController {
    public function getMessage() {
        return "Це повідомлення від UserController";
    }
}

$controller = new UserController();
echo $controller->getMessage();
*/

namespace Controllers {
    class UserController {
        public function getMessage() {
            return "Це повідомлення від UserController";
        }
    }
}
namespace {
    $controller = new \Controllers\UserController();
    echo $controller->getMessage();
}

?>