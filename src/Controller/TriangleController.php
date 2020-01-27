<?php


namespace App\Controller;


use App\Entity\Triangle;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

class TriangleController
{
    /**
     * @Route("/triangle/{a}/{b}/{c}", name="index")
     */
    public static function indexAction(Request $request, float $a, float $b, float $c)
    {
        $triangle= new Triangle($a,$b,$c);

        $encoders = [new XmlEncoder(), new JsonEncoder()];
        $normalizers = [new ObjectNormalizer()];
        $serializer = new Serializer($normalizers, $encoders);

        $jsonContent = $serializer->serialize($triangle, 'json');
        return new Response($jsonContent);
    }

}