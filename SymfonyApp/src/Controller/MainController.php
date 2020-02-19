<?php
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController {
	/**
	 * @Route("/main", name="main")
	 */
	public function main() {
		$em = $this->getDoctrine()->getManager();
		$em->getConnection()->connect();
		$connected = $em->getConnection()->isConnected();
		if ($connected) return "Connected";
		else return 'Shit Happens'
	}
}