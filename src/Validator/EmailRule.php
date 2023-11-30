<?php

namespace Validator;

class EmailRule implements ValidationInterface
{
    public function validate(string $attribute, string $value, array $parameters = [], mixed $validator = null): bool
    {
        return $this->verify($value);
    }

    public function verify(string $value): bool|int
    {
        return preg_match('/^[a-zA-Z0-9._%+-]+@(?:[a-zA-Z0-9-]+\.)+(?:com\.cn|net\.cn|org\.cn|gov\.cn|cn)$/i', $value) > 0;

    }

    public function message(): string
    {
        return '邮箱不符合规定';
    }

}