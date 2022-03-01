<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use FOS\RestBundle\Controller\AbstractFOSRestController;
use Doctrine\Persistence\ManagerRegistry;
use App\Entity\Usuario;
use App\Entity\Publicacion;

class UsuarioController extends AbstractFOSRestController
{
    /**
     * @Route("/usuario/{id}", name="usuario", methods={"GET"})
     */
    public function getUsuario(Usuario $usuario)
    {
        return $this->handleView($this->view($usuario));
    }

    /**
     * @Route("/usuario/{id}/publicaciones", name="usuario", methods={"GET"})
     */
    public function getPublicacionesByUsuario(ManagerRegistry $doctrine, Usuario $usuario)
    {
        $publicaciones = $doctrine->getRepository(Publicacion::class)->findBy(['usuario' => $usuario]);
        return $this->handleView($this->view($publicaciones));
    }
}