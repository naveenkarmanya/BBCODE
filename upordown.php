<?php
function upordown($url)
{
    $cs=  curl_init($url);
    curl_setopt($cs, CURLOPT_NOBODY, TRUE);
    curl_setopt($cs, CURLOPT_FOLLOWLOCATION, TRUE);
    $status_code=  curl_getinfo($cs,CURLINFO_HTTP_CODE);
    return($status_code=200)?true:FALSE;
}
if(isset($_POST['url'])==TRUE && empty($_POST['url'])==FALSE)
{
    $url=  trim($_POST['url']);
    if(filter_var($url,FILTER_VALIDATE_URL)==true)
    {
        echo 'validate';
    }  else {
       echo 'invalid url'; 
    }
    
}
?>
<!doctype html>
<html>
    <body>
        <form action="" method="post">
          Up or Down?  <input  type="text" name="url" placeholder="search">
            <input  type="submit">
        </form>
    </body>
</html>