<?php

/*
 * This file is part of Sulu.
 *
 * (c) Sulu GmbH
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Sulu\Bundle\CommunityBundle\Validator\Constraints;

use Symfony\Component\Validator\Constraint;

/**
 * Constraint for the ExistValidator.
 */
class Exist extends Constraint
{
    /**
     * @var string
     */
    public $message = 'The value "%string%" was not found.';

    /**
     * @var string[]
     */
    public $columns = [];

    /**
     * @var string
     */
    public $entity = '';

    public function validatedBy(): string
    {
        return 'exist_validator';
    }
}
