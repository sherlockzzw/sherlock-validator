<?php

namespace Validator;

class PasswordRule implements ValidationInterface
{
    public function validate(string $attribute, string $value, array $parameters = [], mixed $validator = null): bool
    {
        return $this->verify($value);
    }
    public function verify(string $value): bool|int
    {
        return preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[^\w\s])[\w\S]{8,20}$/', $value) > 0;
    }
    public function message(): string
    {
        return '密码不符合规定';
    }
}