<?php

/* Клас UserView використовується для відображення даних користувача


class UserView {
    public function getMessage() {
        return "Це повідомлення від UserView";
    }
}

$view = new UserView();
echo $view->getMessage();
*/

namespace Views {
    class UserView {
        public function getMessage() {
            return "Це повідомлення від UserView";
        }
    }
}

namespace {
$view = new \Views\UserView();
echo $view->getMessage();
}


?>
