<?php


namespace App\Controller;

use App\Entity\Circle;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

class CircleController
{
    /**
     * @Route("/circle/{radius}", name="circle")
     */
    public function indexAction(Request $request, float $radius)
    {
        $circle= new Circle($radius);

        //serializing object
        $encoders = [new XmlEncoder(), new JsonEncoder()];
        $normalizers = [new ObjectNormalizer()];
        $serializer = new Serializer($normalizers, $encoders);
        $jsonContent = $serializer->serialize($circle, 'json');

        return new Response($jsonContent);
    }
}