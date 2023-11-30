<?php
namespace Validator;
class ChineseRule implements ValidationInterface
{
    public function validate(string $attribute, string $value, array $parameters = [], mixed $validator = null): bool
    {
        return $this->verify($value);
    }

    public function verify(string $value): bool|int
    {
        return preg_match('/^[\x{4e00}-\x{9fa5}]+$/u', $value) > 0;
    }

    public function message(): string
    {
        return '中文格式不正确';
    }
}