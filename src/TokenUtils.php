<?php

namespace DF;

class TokenUtils {

    public static function create(int $length = 15):string{
        return StringUtils::generateRandomString(15);
    }

}