<?php
include 'includes/header.php';
?>
<div id="paneles">
    <div id="profile" class="panel active">
        <?php include 'sections/profile.php'; ?>
    </div>
    <div id="music" class="panel">
        <?php include 'sections/music.php'; ?>
    </div>
    <div id="movies" class="panel">
        <?php include 'sections/movies.php'; ?>
    </div>
    <div id="menu" class="panel">
        <?php include 'sections/menu.php'; ?>
    </div>
    <div id="event" class="panel">
        <?php include 'sections/event.php'; ?>
    </div>
    <div id="travel" class="panel">
        <?php include 'sections/travel.php'; ?>
    </div>
</div>

<?php
include 'includes/footer.php';
?>