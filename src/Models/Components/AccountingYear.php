<?php
/**
 * Created by PhpStorm.
 * User: mbs
 * Date: 17-10-2017
 * Time: 16:32.
 */

namespace Economic\Models\Components;

class AccountingYear
{
    /** @var string $year */
    public $year;
    /** @var string $self */
    public $self;

    public function __construct(string $year = null, string $self = null)
    {
        $this->year = $year;
        $this->self = $self;
    }
}
