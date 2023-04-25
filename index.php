<?
$str = file_get_contents('Лаб_Парсер1.htm');
preg_match_all('#<p class=\"mtx3\">(.+?)</p>#su', $str, $res);
foreach($res[1] as $item){
	file_put_contents('1.txt', preg_replace('/\s+/ui', ' ', $item)."\n", FILE_APPEND);
}
file_put_contents('1.txt', count($res[1]), FILE_APPEND);
?>