<?php
/**
 *  * @author Eng.Asma Hawari
 *  * @package addCarrier_extension
 */

namespace addCarrier\extension\Plugin\Carrier;

use Magento\Framework\Exception\LocalizedException;
use Magento\Quote\Model\Quote\Address\RateRequest;

class TableRate
{

    public function aftergetCode(
        \Magento\OfflineShipping\Model\Carrier\Tablerate $subject,
        $result,
        $type,
        $code = '')
    {
        $codes = [
            'package_peritem' => __('Items vs. Destination'),
        ];
        $array_final = array_merge($result, $codes);
        return $array_final;

    }
}