<?php 

$url = curl("https://www.facebook.com/groups/351264415280637/permalink/351773831896362/");
preg_match('#hd_src:"(.+?)"#is', $url,$puaru);
echo '<video width="1280" controls autoplay>
  <source src="'.$puaru[1].'" type="video/mp4">
  Your browser does not support HTML5 video.
</video>';

function curl($url)
{
    $ch = @curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    $head[] = "Connection: keep-alive";
    $head[] = "Keep-Alive: 300";
    $head[] = "Accept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
    $head[] = "Accept-Language: en-us,en;q=0.5";
    curl_setopt($ch, CURLOPT_USERAGENT, 'Opera/9.80 (Windows NT 6.0) Presto/2.12.388 Version/12.14');
    curl_setopt($ch, CURLOPT_ENCODING, '');
    curl_setopt($ch, CURLOPT_COOKIE, "datr=ImI2Wm_7HHczifvrYrjxNIDA; sb=ImI2WkyPpqAVSc8DSHpUldbz; c_user=100023294806956; xs=7%3ArFFhjXzDhEFtDA%3A2%3A1526730543%3A8722%3A2998; fr=0fGJ6ocrG4eBqDm0H.AWV2D1lyz2mSy7eRMxyVeovW7eY.BaQhpR.ol.AAA.0.0.BbAA8v.AWWWkmc4; pl=n; presence=EDvF3EtimeF1526732499EuserFA21B23294806956A2EstateFDutF1526732499049CEchFDp_5f1B23294806956F5CC; wd=1092x779; act=1526732508485%2F8");
    curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($ch, CURLOPT_TIMEOUT, 60);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Expect:'
    ));
    $page = curl_exec($ch);
    curl_close($ch);
    return $page;
} 
?>
