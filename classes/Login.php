<?php

class Login {
        public static function isLoggedIn() {

                if (isset($_COOKIE['Chroma'])) {
                        if (DB::query('SELECT token FROM login_tokens WHERE token=:token', array(':token'=>$_COOKIE['Chroma'])) {
                                if (isset($_COOKIE['Chroma_']) {
                                        return $token;
                                } else {
                                        $cstrong = True;
                                        $token = bin2hex(openssl_random_pseudo_bytes(64, $cstrong));
                                                 DB::query('INSERT INTO login_tokens VALUES (\'\', :token)', array(':token'=>$token));

               
                                        DB::query('DELETE FROM login_tokens WHERE token=:token', array(':token'=>$_COOKIE['SNID']);

                                              setcookie("Chroma", $token, time() + 60 * 60 * 24 * 7, '/', NULL, NULL, TRUE);
                                             setcookie("Chroma_", '1', time() + 60 * 60 * 24 * 3, '/', NULL, NULL, TRUE);

                                        return $token;
                                }
                        }
                }

                return false;
        }
}

?>
