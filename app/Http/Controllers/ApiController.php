<?php

namespace App\Http\Controllers;

use DOMDocument;
use DOMXPath;

class ApiController extends Controller
{
    public function getInstagramFeed()
    {
        $url = "www.instagram.com/jk_carpenters/";

        $curl = curl_init();

        curl_setopt($curl, CURLOPT_URL, $url);

        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

        curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);

        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

        $htmlContent = curl_exec($curl);
echo $htmlContent;
        if ($htmlContent === false) {
            $error = curl_error($curl);
            echo "cURL error: " . $error;
            exit;
        }

        curl_close($curl);

        libxml_use_internal_errors(true);

// Load the HTML content into DOMDocument
        $dom = new DOMDocument();
        $dom->loadHTML($htmlContent);

// Create an XPath object for querying
        $xpath = new DOMXPath($dom);

// Search for elements, e.g., by tag name or class
        $nodes = $xpath->query("//div");
#dump(count($nodes));
        foreach ($nodes as $node) {
             #dump($node->nodeValue); // Outputs the text within the matched elements
        }

    }
}
