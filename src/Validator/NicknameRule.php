<?php

namespace Validator;

class NicknameRule implements ValidationInterface
{
    public function verify(string $value): bool|int
    {
        return preg_match('/^[\x{4e00}-\x{9fa5}a-zA-Z0-9_.]{2,20}$/u', $value) > 0;
    }

    public function validate(string $attribute, string $value, array $parameters = [], mixed $validator = null): bool
    {
       return $this->verify($value);
    }

    public function message(): string
    {
        return '昵称不可用';
    }
}