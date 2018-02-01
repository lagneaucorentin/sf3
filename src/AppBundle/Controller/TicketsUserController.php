<?php
/**
 * @author Boris Guéry <guery.b@gmail.com>
 */

namespace AppBundle\Controller;

use AppBundle\Forms\TicketProposition;
use AppBundle\Forms\Types\TicketPropositionType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class TicketsUserController extends Controller
{
    public function listAllTicketsAction(Request $request): Response
    {
        $tickets = $this->get('repositories.ticket')->findAll();

        return $this->render('@App/Admin/Tickets/list_all_tickets.html.twig', ['tickets' => $tickets]);
    }

    public function getTicketAction(Request $request, $id): Response
    {
        $ticket = $this->get('repositories.ticket')->findTicket($id);

        $ticketForm = new TicketProposition();
        $ticketProposition = $this->createForm(TicketPropositionType::class, $ticketForm);

        if ($request->isMethod('POST')) {
            $ticketProposition->handleRequest($request);

            if($ticketProposition->isSubmitted() && $ticketProposition->isValid()) {

            }
        }

        return $this->render('@App/Admin/Tickets/show_ticket.html.twig', ['ticket' => $ticket, 'ticketPropositionForm' => $ticketProposition->createView()]);
    }
}
