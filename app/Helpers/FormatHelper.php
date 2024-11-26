<?php

namespace App\Helpers;

class FormatHelper
{
    /**
     * Định dạng số thành tiền tệ
     *
     * @param float|int $amount
     * @param string $currencySymbol
     * @return string
     */
    public static function formatCurrency($amount, $currencySymbol = '')
    {
        // Đảm bảo số tiền là số hợp lệ
        if (!is_numeric($amount)) {
            return '0';
        }

        // Định dạng số tiền
        return number_format($amount, 0, ',', '.') . ' ' . $currencySymbol;
    }
}
