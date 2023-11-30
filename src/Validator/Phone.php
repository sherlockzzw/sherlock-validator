<?php

namespace Validator;

class Phone implements ValidationInterface
{
    public function validate(string $attribute, string $value, array $parameters = [], mixed $validator = null): bool
    {
        return $this->verify($value);
    }

    public function verify(string $value): bool|int
    {
        return preg_match('
        /^(?:\+?86)?1(?:3\d{3}|5[^4\D]\d{2}|8\d{3}|7[^0129\D](?(?<=4)(?:0\d|1[0-2]|9\d)|\d{2})|9[189]\d{2}|66\d{2})\d{6}$/',
                $value)
            > 0;

    }

    public function message(): string
    {
        return '手机号格式不正确';
    }
}