    
<div class="container-fluid py-5">

<?php

    // get the program dir
    // $stack = debug_backtrace();
    // $__str__ = dirname(  $stack[0]['file'] );
    // $__array__ = explode('/' , $__str__);
    // $__programDir__ = end($__array__);
    $__myserverDir__ = 'myserver';


    $dir = ".";
	$cont=0;
    $myarray = array();

	$ignoreList = array('cgi-bin', '.', '..', '._', $__myserverDir__ );
    if ($directory = opendir($dir)) {
        while (false !== ($filename = readdir($directory))) {
            if (!in_array($filename, $ignoreList) and substr($filename, 0, 1) != '.') {
                if ( strpos($filename,'.') != true) {
                    array_push($myarray, $filename);
                }   
            }
        }
    }

    sort($myarray);
    $str = '';

    foreach($myarray as $key):

        if( 
            $key == '01-Development' or  
            $key == '02-Archive' or
            $key == '05-Apps'
        ):
        
        
            $mysubarray = array();
            if ($directory = opendir($key)) {
                while (false !== ($filename = readdir($directory))) {
                    if (!in_array($filename, $ignoreList) and substr($filename, 0, 1) != '.') {
                        array_push($mysubarray, $filename);								
                    }
                }
            }
            sort($mysubarray);
?>

<h1 class="text-center py-1"><?php echo $key; ?></h1>

<div class="row py-1">
    <?php foreach($mysubarray as $keysubarray): ?>
    
    <?php if($key == '01-Development'): ?>
    <div class="col-md-4 col-lg-4 col-xl-3 col-xxl-2 p-4 text-center">
    <?php else: ?>
    <div class="col-md-4 col-lg-3 col-xl-3 col-xxl-2 p-4 text-center">
    <?php endif; ?>

        <div class="card bg-primary">

            <div class="card-header">
                <a href="<?php echo sprintf( '%s/%s' , $key , $keysubarray ); ?>" title="<?php echo $keysubarray; ?>" class="text-white">
                    <i class="fa fa-link"></i> <?php echo $keysubarray; ?>
                </a>
            </div>

            <a href="<?php echo sprintf( '%s/%s' , $key , $keysubarray ); ?>" title="<?php echo $keysubarray; ?>">
                <img src="<?php echo get_project_thumbnail( sprintf( '%s/%s/' , $key , $keysubarray ) , $keysubarray ); ?>" alt="<?php echo $keysubarray; ?>" class="img-fluid bg-white">
            </a>
            <div class="card-body">
                
                <p class="card-text d-flex justify-content-between">
                    <a href="<?php echo sprintf( '%s/%s' , $key , $keysubarray ); ?>" class="btn btn-success">
                        <i class="fa fa-home"></i> 
                        <span class="d-md-none d-lg-inline-block">Front</span>
                    </a>
                    <?php
                        $admin_array = array(
                            array( "url"=>sprintf('%s/%s/public_html/wp-admin/',$key,$keysubarray) , "cms"=>'wordpress' ),
                            array( "url"=>sprintf('%s/%s/public_html/site/administrator',$key,$keysubarray) , "cms"=>'joomla' ),
                            array( "url"=>sprintf('%s/%s/public_html/sitio/administrator',$key,$keysubarray) , "cms"=>'joomla' ),
                            array( "url"=>sprintf('%s/%s/public_html/administrator',$key,$keysubarray) , "cms"=>'joomla' ),
                        );
                    ?>
                    <?php foreach($admin_array as $dir): ?>
                        <?php if( is_dir( $dir["url"] )): ?>

                        <a href="<?php echo $dir['url']; ?>" class="btn btn-success">
                            <i class="fab fa-<?php echo $dir['cms'] ?>"></i> 
                            <span class="d-md-none d-lg-inline-block">Admin</span>
                        </a>

                        <?php break; endif; ?>
                    <?php endforeach; ?>
                    
                    
                </p>
            </div>
        </div>
        
    </div>
    <?php endforeach; ?>
</div><!-- ./row -->

<div class="p-2 mb-5"></div>

        <?php endif; ?>
    <?php endforeach; ?>



    <div class="row">

    <?php foreach($myarray as $key): ?>
        <?php
            if( 
                $key != '01-Development' and 
                $key != '02-Archive' and
                $key != '05-Apps'
            ):
            
                $mysubarray = array();
                if ($directory = opendir($key)) {
                    while (false !== ($filename = readdir($directory))) {
                        if (!in_array($filename, $ignoreList) and substr($filename, 0, 1) != '.') {
                            array_push($mysubarray, $filename);								
                        }
                    }
                }
                sort($mysubarray);
        ?>
        
        <div class="col-md-6 col-lg-4 col-xl-4">

            <a href="<?php echo $key; ?>" class="btn btn-success btn-lg btn-block btn-drop-shadow"><?php echo $key; ?></a>

            <?php /*
            <div class="border border-dark mt-3 mb-3 mt-xl-0">
                <h3 class="text-center p-3 bg-dark text-primary"><?php echo $key; ?></h3>
                <div class="list-group list-group-flush">
                    <?php foreach($mysubarray as $keysubarray): ?>
                    <?php 
                        switch($keysubarray){
                            case 'WORDPRESS':  
                                    $__icon_class__ = 'fab fa-wordpress';
                                    break;
                            case 'PYTHON':  
                                    $__icon_class__ = 'fab fa-python';
                                    break;
                            case 'JOOMLA':  
                                    $__icon_class__ = 'fab fa-joomla';
                                    break;

                            default:
                                    $__icon_class__ = 'fa fa-chevron-right';
                                    break;
                        }
                    ?>
                    <a href="<?php echo sprintf('%s/%s', $key, $keysubarray); ?>" class="list-group-item list-group-item-action"><i class="<?php echo $__icon_class__; ?>"></i> <?php echo $keysubarray; ?></a>
                    <?php endforeach; ?>
                </div>
            </div>
            */?>
        </div>

        <?php endif; ?>
    <?php endforeach; ?>

    </div><!-- ./row -->

</div><!-- ./container-fluid -->
