<?php

use Ellipse\Session\Exceptions\SessionDisabledException;
use Ellipse\Session\Exceptions\SessionStartExceptionInterface;

describe('SessionDisabledException', function () {

    it('should implement SessionStartExceptionInterface', function () {

        $test = new SessionDisabledException;

        expect($test)->toBeAnInstanceOf(SessionStartExceptionInterface::class);

    });

});
