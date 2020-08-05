    
<div class="container-fluid">

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

        if( $key == '01-Development' or  $key == '02-Archive' ):
        
        
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

<h1 class="text-center"><?php echo $key; ?></h1>

<div class="row">
    <?php foreach($mysubarray as $keysubarray): ?>
    
    <?php if($key == '01-Development'): ?>
    <div class="col-md-4 col-lg-4 col-xl-3 p-4 text-center">
    <?php else: ?>
    <div class="col-md-4 col-lg-3 col-xl-2 p-4 text-center">
    <?php endif; ?>

        <div class="card">

            <div class="d-md-none card-header">
                <h4><?php echo $keysubarray; ?></h4>
            </div>

            <a href="<?php echo sprintf( '%s/%s' , $key , $keysubarray ); ?>" title="<?php echo $keysubarray; ?>">
                <img src="<?php echo get_project_thumbnail( sprintf( '%s/%s/' , $key , $keysubarray ) ); ?>" alt="<?php echo $keysubarray; ?>" class="img-fluid bg-white">
            </a>
            <div class="d-md-none card-body">
                <p class="card-text"><a href="<?php echo sprintf( '%s/%s' , $key , $keysubarray ); ?>" class="btn btn-sm btn-outline-primary btn-block">Open</a></p>
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
            if( $key != '01-Development' and  $key != '02-Archive' ):
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
        
        <div class="col-md-6 col-lg-4 col-xl-3">
            <div class="border border-dark mt-3 mb-3 mt-xl-0">
                <h3 class="text-center p-3 bg-dark text-primary"><?php echo $key; ?></h3>
                <div class="list-group list-group-flush">
                    <?php foreach($mysubarray as $keysubarray): ?>
                    <a href="<?php echo sprintf('%s/%s', $key, $keysubarray); ?>" class="list-group-item list-group-item-action"><i class="fa fa-chevron-right"></i> <?php echo $keysubarray; ?></a>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

        <?php endif; ?>
    <?php endforeach; ?>

    </div><!-- ./row -->

</div><!-- ./container-fluid -->