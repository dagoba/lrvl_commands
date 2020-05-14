<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Http\Response;;

class ContentController extends Controller
{
    private const JSON = 'application/json';
    private const XML = 'application/xml';


    public function getContent(Request $request)
    {
        $contentType = $this->getContentType($request);

        $data = [
            'username' => 'Vasia',
            'email' => 'email@vasia.com'
        ];

        if ($contentType === self::JSON) {
            return new Response(json_encode($data), Response::HTTP_OK, [
                'content-type' => self::JSON
            ]);
        } elseif ($contentType === self::XML) {
            $content = new \DOMDocument();
            $element = $content->createElement('username', 'Vasia');
            $content->appendChild($element);
            $element = $content->createElement('email', 'email@vasia.com');
            $content->appendChild($element);

            $xml =  $content->saveXML();

            return new Response($xml, Response::HTTP_OK, [
                'content-type' => self::XML
            ]);
        }
    }

    public function createContent(Request $request)
    {
        $content = $request->getContent();

        $data = json_decode($content, true);
        
        $id = 2;

        return new Response(null, Response::HTTP_CREATED, [
            'location' => 'http:/localhost:8000/content/' .$id
        ]);
    }


    public function getContentType(Request $request)
    {
        $contentType = $request->getAcceptableContentTypes();
        if (!in_array($contentType[0] ,  [self::JSON, self::XML])) {
            return self::JSON;
        }
        return $contentType[0];
    }
}
