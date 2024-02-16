<?php 

function logic1(int $age): void 
{
    ($age >= 18) or throw InvalidAge::adultRequired($age);
}

function logic2(int $age): void 
{
    ($age >= 0) or throw InvaliAge::lessThanZero($age);
    ($age <= 120) or throw InvalidAge::matusalem($age);
}

logic1(22);