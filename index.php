<?php if($_GET['mode']=="reload"){
    include('reload.php');
}elseif($_GET['mode']=="rs"){
    $_GET['mode'] = "iframe";
    include('rs.php');
}elseif($_GET['mode']=="flr"){
    // include('flr.php');
}else{
    include('reader.php');
};
?>