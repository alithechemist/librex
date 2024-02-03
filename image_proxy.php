<?php

    $config = require "config.php";
    require "misc/tools.php";

    $url = $_REQUEST["url"];
    $requested_root_domain = get_root_domain($url);

    $allowed_domains = array("qwant.com", "wikimedia.org", get_root_domain($config->invidious_instance_for_video_results));


    // In [https://github.com/Ahwxorg/LibreY/commit/8f9b9803f231e2954e5b49987a532d28fe50a627]
    //$allowed_domains = array("s2.qwant.com", "s1.qwant.com", "upload.wikimedia.org", get_root_domain($config->invidious_instance_for_video_results));

    if (in_array($requested_root_domain, $allowed_domains))
    {
      $image = $url;
      $image_src = request($image);

      header("Content-Type: image/png");
      echo $image_src;
    }
?>
