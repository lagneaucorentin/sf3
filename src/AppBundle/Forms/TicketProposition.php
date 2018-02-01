<?php
/**
 * Created by PhpStorm.
 * User: metinet
 * Date: 31/01/18
 * Time: 17:08
 */

namespace AppBundle\Forms;

use Symfony\Component\Validator\Constraints as Assert;

class TicketProposition
{
    /** @Assert\NotBlank */
    public $auctionPrice;

    /** @Assert\NotBlank */
    public $auctionText;

    public $submit;
}