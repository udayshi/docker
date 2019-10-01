<?php

function say($message){
    if(!is_string($message)){
        if(!isset($_SERVER["HTTP_USER_AGENT"])) echo "<pre>";
        echo var_export($message, true) . ((!isset($_SERVER["HTTP_USER_AGENT"]) ? "\n" : "<br />"));
        if(!isset($_SERVER["HTTP_USER_AGENT"])) echo "</pre>";
    }else{
        echo $message . ((!isset($_SERVER["HTTP_USER_AGENT"]) ? "\n" : "<br />"));
    }
}

say("= Begin raw encryption");
$key    = "anotherpass";
$str    = "does it work";

say("  Params:");
say("  - String to encrypt '".$str."'");
say("  - Key: ".$key);
say("");


$params = array(
    "openssl"  => array(
        "cipher"    => "BF",
        "mode"      => "ECB",
    ),
    "mcrypt" => array(
        "cipher"    => "blowfish",
        "mode"      => "ecb",
    ),
);
/*
say("= Mcrypt");
$handler = mcrypt_module_open($params['mcrypt']['cipher'], '', $params['mcrypt']['mode'], '');
$iv      = mcrypt_create_iv (mcrypt_enc_get_iv_size($handler), MCRYPT_RAND);
$keysize = mcrypt_enc_get_key_size($handler);
mcrypt_generic_init($handler,$key,"\0\0\0\0\0\0\0\0");
say("  Params:");
say("  - InitVector   ".bin2hex($iv)." (bin2hex)");
say("  - Max keysize  ".$keysize);
say("  - Cipher       ".$params['mcrypt']['cipher']);
say("  - Mode         ".$params['mcrypt']['mode']);
say("");
say("  Encryption:");
$m_encrypted = mcrypt_generic($handler, $str);
$m_decrypted = mdecrypt_generic($handler, $m_encrypted);
say("  - Encrypted   ".bin2hex($m_encrypted)." (bin2hex)");
say("  - Descrypted  ".$m_decrypted);
say("");*/


say("= Openssl");
say("  Params:");
say("  - InitVector   not needed");
say("  - Max keysize  ".openssl_cipher_iv_length($params['openssl']['cipher']."-".$params['openssl']['mode']));
say("  - Cipher       ".$params['openssl']['cipher']);
say("  - Mode         ".$params['openssl']['mode']);
say("");
say("  Encryption:");
$o_encrypted = openssl_encrypt($str,$params['openssl']['cipher']."-".$params['openssl']['mode'],$key,true);
$o_decrypted = openssl_decrypt($o_encrypted,$params['openssl']['cipher']."-".$params['openssl']['mode'],$key,true);
say("  - Encrypted   ".bin2hex($o_encrypted)." (bin2hex)");
say("  - Descrypted  ".$o_decrypted);