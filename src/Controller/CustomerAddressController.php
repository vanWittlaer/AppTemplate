<?php declare(strict_types=1);

namespace App\Controller;

use App\SwagAppsystem\Client;
use App\SwagAppsystem\Event;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CustomerAddressController extends AbstractController
{
    /**
     * @Route("/customer/address/written", name="customer_address.written", methods={"POST"})
     */
    public function addressWritten(Client $client, Event $event): Response
    {
        $data = $event->getEventData();
        $id = $data['payload'][0]['primaryKey'];

        $result = $client->search('customer-address', ['ids' => [$id]]);

        return new Response();
    }
}