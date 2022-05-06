<?php
class auth {
    public static function adminauth($p1, $p2) {
        $ok = 0;
        if($p1 == "admin00@gmail.com" && $p2 == "123") {
            $ok = 1;
        }
        return $ok;
    }
}

?>