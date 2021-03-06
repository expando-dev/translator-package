<?php

declare(strict_types=1);

namespace Expando\Translator\Type;

class Language
{
    const
        cs_CZ = 'cs_CZ',
        sk_SK = 'sk_SK',
        pl_PL = 'pl_PL',
        de_DE = 'de_DE',
        hr_HR = 'hr_HR',
        hu_HU = 'hu_HU',
        fr_FR = 'fr_FR',
        it_IT = 'it_IT',
        ro_RO = 'ro_RO',
        en_GB = 'en_GB',
        sl_SI = 'sl_SI',
        de_AT = 'de_AT',
        uk_UA = 'uk_UA',
        lt_LT = 'lt_LT',
        en_US = 'en_US',
        ru_RU = 'ru_RU',
        es_ES = 'es_ES',
        nl_NL = 'nl_NL'
    ;

    public static function getAll(): array
    {
        return [
            self::cs_CZ,
            self::sk_SK,
            self::pl_PL,
            self::de_DE,
            self::hr_HR,
            self::hu_HU,
            self::fr_FR,
            self::it_IT,
            self::ro_RO,
            self::en_GB,
            self::sl_SI,
            self::de_AT,
            self::uk_UA,
            self::lt_LT,
            self::en_US,
            self::ru_RU,
            self::es_ES,
            self::nl_NL,
        ];
    }
}