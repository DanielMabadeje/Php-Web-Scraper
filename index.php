<?php

include('simple_html_dom.php');

$websiteUrl = "http://www.palmbeachcodes.school.com/news/";

$html= file_get_html($websiteUrl);

foreach($html->find('.uabb-blog-post-section') as $postDiv){
    foreach ($postDiv->find('a') as $a) {
        $urls[]=$a->attr['href']. "<br>";

        echo $a->attr['href']. "<br>";
    }
}