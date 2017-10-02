<?php

namespace RuletaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use JugadorBundle\Entity\Jugador;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Config\Definition\Exception\Exception;

class RuletaController extends Controller {

    /**
     * @Route("/" , name="index_ruleta")
     */
    public function indexAction() {

        $em = $this->getDoctrine()->getManager();

        $jugadors = $em->getRepository('JugadorBundle:Jugador')->findAll();
        return $this->render('RuletaBundle:Ruleta:index.html.twig', array('jugadores' => $jugadors,
        ));
    }

    /**
     *
     *
     * @Route("/IniciarSesion", name="Iniciar_Sesion")
     * 
     */
    public function IniciarSesionAction(Request $request) {
        $identificacion = $request->get("identificacion");
        $contraseña = $request->get("password");
        $em = $this->getDoctrine()->getManager();
        $jugador = new Jugador();
        $jugador = $em->getRepository('JugadorBundle:Jugador')->findOneBy(array('identificacion' => $identificacion));

        if ($jugador->getPassword() == $contraseña) {
            $jugador_response = (array("alias" => $jugador->getAlias(), "dinero" => $jugador->getDinero()));
            $response = new Response(\json_encode($jugador_response));
            $response->headers->set('Content-Type', 'application/json');
            return $response;
        } else {
            $response = new Response(-1);
            return $response;
        }
    }

    /**
     *
     *
     * @Route("/acabar_juego", name="acabar_juego")
     * 
     */
    public function AcabarJuego(Request $request) {
        $jugadores = $request->get("jugadores");
        $data = json_decode($request->get("alias"));
        $data2 = json_decode($request->get("Totales"));
        if($data == null || $data2 == null){
            throw new Exception("no pasa");
        }
        
        
        $em = $this->getDoctrine()->getManager();
         
        for ($i = 0; $i < $jugadores ; $i ++) {
            $alias1 = $data[$i];
            $dineroTotal = $data2[$i];
            $jugador = $em->getRepository('JugadorBundle:Jugador')->findOneBy(array('alias' => $alias1));
            $jugador->setDinero($dineroTotal);
            $em->persist($jugador);
            $em->flush();
        }
        $response = new Response(1);
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }

}
