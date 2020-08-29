<?php

function get_the_page (){    
    $default = '__default.php';
    if(isset($_GET["page"])){
        return '__' . $_GET["page"] . '.php';
    }else{
        return $default;
    }

}


function load_content_page(){
    include('myserver/partials/' . get_the_page() );
}


function get_project_thumbnail( $path, $project ){
    // return sprintf( '%s/%s/screenshot.jpg' , $key , $keysubarray );

    $filenamepng = $path . 'screenshot.png';
    $filenamejpg = $path . 'screenshot.jpg';
    $filenamejpg = $path . 'screenshot.svg';
    $defaultimg = '//placehold.it/1200x900/?text=' . $project;
    
    if (file_exists($filenamepng)) {
        $thumbnail = $filenamepng ;
    } elseif (file_exists($filenamejpg)) {
        $thumbnail = $filenamejpg ;
    } elseif (file_exists($filenamesvg)) {
        $thumbnail = $filenamesvg;
    }else{
        $thumbnail = $defaultimg;
    }

    return $thumbnail;
}
