<?php
require_once ROOT . '/components/Db.php';

class Contact
{
    public static function yourMessage($params)
    {
        $db = Db::getConnection();

        $result = $db->query("INSERT INTO guest_book (gb_name, gb_email, gb_phone, gb_text) VALUES ('{$_POST['name']}', 
                                    '{$params['email']}', '{$params['phone']}', '{$params['message']}')");
//
//        if($result == true){
////            echo 'Спасибо! </ br> Ваше сообщение отправлено. </ br> Вы будете переноаправлены на главную страницу, через 5 секунд';
////            set_time_limit(5);
//            header('Location: /', true, 307);
//            return $result;
//        }

    }
}