<?php
/**
 * @author Boris Guéry <guery.b@gmail.com>
 */

namespace AppBundle\Utils;

use AppBundle\Forms\TicketSubmission;
use Tiquette\Domain\Ticket;

class TicketFactory
{
    public function fromTicketSubmission(TicketSubmission $ticketSubmission): Ticket
    {
        return Ticket::submit(
            0,
            $ticketSubmission->eventName,
            \DateTimeImmutable::createFromMutable($ticketSubmission->eventDate),
            $ticketSubmission->eventDescription,
            0,
            'EUR'
        );
    }
}
