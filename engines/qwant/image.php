<?php
    function get_image_results($query, $page) 
    {
        global $config;

        $page = $page / 10 + 1; // qwant has a different page system
        
        $url = "https://api.qwant.com/v3/search/images?q=$query&t=images&count=50&locale=en_us&offset=$offset&device=desktop&tgp=3&safesearch=1";
        $response = request($url);
        $xpath = get_xpath($response);

        $results = array();

        $json = json_decode($response, true);
        $results = array();

        if ($json["status"] != "success")
            return $results; // no results

        $imgs = $json["data"]["result"]["items"];
        $imgCount = $json["data"]["result"]["total"];

        for ($i = 0; $i < $imgCount; $i++)
        {
            array_push($results, 
                array (
                    "thumbnail" => htmlspecialchars($imgs[$i]["thumbnail"]),
                    "alt" => htmlspecialchars($imgs[$i]["title"]),
                    "url" => htmlspecialchars($imgs[$i]["url"])
                )
            );
        }

        return $results;
    }

    function print_image_results($results)
    {
        echo "<div class=\"image-result-container\">";

                foreach($results as $result)
                {
                    if (!$result 
                        || !array_key_exists("url", $result)
                        || !array_key_exists("alt", $result))
                        continue;
                    $thumbnail = urlencode($result["thumbnail"]);
                    $alt = $result["alt"];
                    $url = $result["url"];
                    $url = check_for_privacy_frontend($url, $opts);

                    echo "<a title=\"$alt\" href=\"$url\" target=\"_blank\">";
                    echo "<img src=\"image_proxy.php?url=$thumbnail\">";
                    echo "</a>";
                }

            echo "</div>";
        
    }
?>
