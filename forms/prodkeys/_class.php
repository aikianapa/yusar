<?php
include __DIR__."/qrcode.php";
class prodkeysClass extends cmsFormsClass {

    function beforeItemEdit(&$item)
    {
        if ($item['id']=='') {
            $item['id'] = $item['_id'] = wbNewId('','prd');
        }
    }

    function afterItemSave(&$item) {
        $this->app->vars('_route.mode') == 'save' ? $this->app->shadow('/module/yonger/yonmap') : null;
    }

    public function qrcode() {
        $url = $this->app->route->host.'/docs/'.$this->app->route->item;
            $generator = new QRCode($url, ['sf'=>'8']);

            /* Output directly to standard output. */
            $generator->output_image();

            /* Create bitmap image. */
            $image = $generator->render_image();
            imagepng($image);
            imagedestroy($image);
    }

    public function uuidSecure() {
        $pr_bits = null;
        $fp = @fopen('/dev/urandom','rb');
        if ($fp !== false) {
            $pr_bits .= @fread($fp, 16);
            @fclose($fp);
        } else {
            $this->cakeError('randomNumber');
        }
       
        $time_low = bin2hex(substr($pr_bits,0, 4));
        $time_mid = bin2hex(substr($pr_bits,4, 2));
        $time_hi_and_version = bin2hex(substr($pr_bits,6, 2));
        $clock_seq_hi_and_reserved = bin2hex(substr($pr_bits,8, 2));
        $node = bin2hex(substr($pr_bits,10, 6));
       
        /**
         * Set the four most significant bits (bits 12 through 15) of the
         * time_hi_and_version field to the 4-bit version number from
         * Section 4.1.3.
         * @see http://tools.ietf.org/html/rfc4122#section-4.1.3
         */
        $time_hi_and_version = hexdec($time_hi_and_version);
        $time_hi_and_version = $time_hi_and_version >> 4;
        $time_hi_and_version = $time_hi_and_version | 0x4000;
       
        /**
         * Set the two most significant bits (bits 6 and 7) of the
         * clock_seq_hi_and_reserved to zero and one, respectively.
         */
        $clock_seq_hi_and_reserved = hexdec($clock_seq_hi_and_reserved);
        $clock_seq_hi_and_reserved = $clock_seq_hi_and_reserved >> 2;
        $clock_seq_hi_and_reserved = $clock_seq_hi_and_reserved | 0x8000;
       
        return sprintf('%08s-%04s-%04x-%04x-%012s',
            $time_low, $time_mid, $time_hi_and_version, $clock_seq_hi_and_reserved, $node);
    }
}
?>