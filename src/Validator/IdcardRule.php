<?php

namespace Validator;

class IdcardRule implements ValidationInterface
{

    public function validate(string $attribute, string $value, array $parameters = [], mixed $validator = null): bool
    {
        return $this->verify($value);
    }

    public function verify(string $value): bool|int
    {
        return preg_match('/^\d{17}[\dXx]$/', $value) > 0;
    }

    public function message(): string
    {
        return '身份证号码不符合';
    }
}