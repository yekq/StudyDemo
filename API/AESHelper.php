<?php
/**
 * Created by yekangqi
 * Date: 2016/10/21
 * Time: 11:48
 */
class AESHelper {

    /**
     * 加密
     * @param $input
     * @param $key
     * @return string
     */
    public static function encryptString($input, $key) {
        $size = mcrypt_get_block_size(MCRYPT_RIJNDAEL_128, MCRYPT_MODE_ECB);
        $input = AESHelper::pkcs5_pad($input, $size);
        $td = mcrypt_module_open(MCRYPT_RIJNDAEL_128, '', MCRYPT_MODE_ECB, '');
        $iv = mcrypt_create_iv (mcrypt_enc_get_iv_size($td), MCRYPT_RAND);
        mcrypt_generic_init($td, $key, $iv);
        $data = mcrypt_generic($td, $input);
        mcrypt_generic_deinit($td);
        mcrypt_module_close($td);
        $data = base64_encode($data);
        return $data;
    }

    /**
     * 解密
     * @param $sStr
     * @param $sKey
     * @return string
     */
    public static function decryptString($sStr, $sKey) {
        $td = mcrypt_module_open(MCRYPT_RIJNDAEL_128, '', MCRYPT_MODE_ECB, '');
        $iv = mcrypt_create_iv (mcrypt_enc_get_iv_size($td), MCRYPT_RAND);
        $decrypted= @mcrypt_decrypt(MCRYPT_RIJNDAEL_128, $sKey, base64_decode($sStr), MCRYPT_MODE_ECB, $iv);
        $dec_s = strlen($decrypted);
        $padding = ord($decrypted[$dec_s-1]);
        $decrypted = substr($decrypted, 0, -$padding);
        return $decrypted;
    }

    private static function pkcs5_pad ($text, $blocksize) {
        $pad = $blocksize - (strlen($text) % $blocksize);
        return $text . str_repeat(chr($pad), $pad);
    }
}
//$key="1234567890asdfgh";
//$before="thisBefore";
//echo "加密前".$before."\n";
//$after=desEncryptStr($before,$key);
//echo "加密后:".$after."\n";
//echo "解密后:".DesDecryptStr($after,$key);

//echo DesDecryptStr("AKje9A+/JsgmY/W2gTwi7A==","1234567890asdfgh");

//$aes = new AESHelper();
//echo AESHelper::decryptString("LEEvdkgj3WUE5eWGSjn4LZsMji57LAH/hk57304hstzirPkpGaQQ7w3OsR/pUAC1O4EHv9X1u0epVA1s1T3nKg==", "qwertyuioasdfghj");

echo AESHelper::encryptString("{\"Json解析\":\"支持格式化高亮折叠\",\"支持XML转换\":\"支持XML转换Json,Json转XML\",\"Json格式验证\":\"更详细准确的错误信息\"}","1234567890abcdef");
//echo "\n";
//echo AESHelper::decryptString("qkrxxA9fIF636aITDRJhcg==","1234567890abcdef");