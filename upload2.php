<?php
$image = $_POST['upload1'];
$time = (microtime(true) * 10000);
$type = get_extension_canvas($image);
$path = "./upload/";
$filename = "{$time}.{$type}";


$upload = $path . $filename;

file_put_contents($upload, $image);



function get_extension_canvas(&$image)
{
    $ext = $img =  '';
    
    if ( strpos($image, 'data:image/jpeg;base64') === 0 )
    {
        $img = str_replace('data:image/jpeg;base64,', '', $image);
        $img = str_replace(' ', '+', $img);
        $ext = 'jpg';
    }

    if ( strpos($image, 'data:image/png;base64') === 0 )
    {
        $img = str_replace('data:image/png;base64,', '', $image);
        $img = str_replace(' ', '+', $img);
        $ext = 'png';
    }

    if ( strpos($image, 'data:image/gif;base64') === 0 )
    {
        $img = str_replace('data:image/gif;base64,', '', $image);
        $img = str_replace(' ', '+', $img);
        $ext = 'gif';
    }
    $image = base64_decode($img);
    return $ext;
}