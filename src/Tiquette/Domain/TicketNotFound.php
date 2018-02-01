<?php
/**
 * Created by PhpStorm.
 * User: metinet
 * Date: 31/01/18
 * Time: 16:09
 */

namespace Tiquette\Domain;


use Tiquette\Exception;

class TicketNotFound extends \Exception implements Exception
{
    public static function unknownTicket(): self
    {
        return new self(sprintf('This ticket does not exist.'));
    }
}