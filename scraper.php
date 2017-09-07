<?
// This is a template for a PHP scraper on morph.io (https://morph.io)
// including some code snippets below that you should find helpful

 require 'scraperwiki.php';
 require 'scraperwiki/simple_html_dom.php';
$seed = 'https://www.bu.edu/link/bin/uiscgi_studentlink.pl/1346752597?ModuleName=univschr.pl&SearchOptionDesc=Class+Subject&SearchOptionCd=C&KeySem=20133&ViewSem=Fall+2012&Subject=&MtgDay=&MtgTime=';
  web_scrape($seed);

  function web_scrape($url)
{
   $data = file_get_html($url);
    //$data = new simple_html_dom();  
   // $data->load_file($url);
   echo $nodes = $data->find("input[type=hidden]");
echo '----------------------------------------------';
   
   foreach ($nodes as $node) {
    $val = $node->value;
    echo $val . "<br />";
    }

}
?>
