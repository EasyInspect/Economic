<?php
/**
 * Created by PhpStorm.
 * User: mbs
 * Date: 26-09-2017
 * Time: 12:58
 */

namespace Economic\Models\Components;

class Recipient
{
    /** @var string $name */
    public $name;
    /** @var VatZone $vatZone */
    public $vatZone;

    public function __construct(string $name, $vatZone = null)
    {
        $this->name = $name;
        $this->vatZone = new VatZone($vatZone->vatZoneNumber);
    }


}