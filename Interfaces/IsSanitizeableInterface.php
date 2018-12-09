<?php

namespace Interfaces;

interface IsSanitizeableInterface
{
    public function validate(array $request) : array;
}