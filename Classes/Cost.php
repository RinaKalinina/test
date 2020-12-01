<?php

namespace Classes;

class Cost
{
    /**
     * Текущий НДС в процентах
     */
    const VAT = 20;

    /**
     * Процент для расчета.
     */
    const DEFAULT_PERCENT = 100;

    /**
     * Получить стоимость без НДС по счету
     * @param Invoice $invoice
     * @return float|int
     */
    public static function getCostWithoutVAT(Invoice $invoice)
    {
        return $invoice->price / ((self::DEFAULT_PERCENT + self::VAT) / self::DEFAULT_PERCENT);
    }
}