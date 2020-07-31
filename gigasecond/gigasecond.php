<?php

function from(DateTimeImmutable $inputDate): DateTimeImmutable {
    return $inputDate->modify(1e9 . ' sec');
}