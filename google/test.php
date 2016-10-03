<?php/*
$query = 'Nikita%20Platonenko';
$url = "http://ajax.googleapis.com/ajax/services/search/web?v=1.0&q=".$query;

$body = file_get_contents($url);
$json = json_decode($body);

for($x=0;$x<count($json->responseData->results);$x++){

echo "<b>Result ".($x+1)."</b>";
echo "<br>URL: ";
echo $json->responseData->results[$x]->url;
echo "<br>VisibleURL: ";
echo $json->responseData->results[$x]->visibleUrl;
echo "<br>Title: ";
echo $json->responseData->results[$x]->title;
echo "<br>Content: ";
echo $json->responseData->results[$x]->content;
echo "<br><br>";

}
*/






?>
<script>
  (function() {
    var cx = '012671333273470511509:qxra0cwyxw0';
    var gcse = document.createElement('script');
    gcse.type = 'text/javascript';
    gcse.async = true;
    gcse.src = 'https://cse.google.com/cse.js?cx=' + cx;
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(gcse, s);
  })();
</script>
<gcse:search></gcse:search>