<?php include "../partials/header.php";

$directoryURI = $_SERVER['REQUEST_URI'];
if ( strpos( $directoryURI, '/registration/' ) !== false ) $activeMenu = 'registration';
else if ( strpos( $directoryURI, '/login/' ) !== false ) $activeMenu = 'login';
else if ( strpos( $directoryURI, '/about/' ) !== false ) $activeMenu = 'about';
else if ( strpos( $directoryURI, '/explore/' ) !== false ) $activeMenu = 'explore';
else if ( strpos( $directoryURI, '/landing/' ) !== false ) $activeMenu = 'landing';
else if ( strpos( $directoryURI, '/main/' ) !== false ) $activeMenu = 'main';
else $activeMenu = 'home';?>
<div class="filler">
no content here.. yet.
btw nasa <?php echo $activeMenu ?> page ka
</div>
<?php include "../partials/footer.php"?>