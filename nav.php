<?php
$OUTPUT->bodyStart();
$R = $CFG->apphome . '/';
$T = $CFG->wwwroot . '/';
$adminmenu = isset($_COOKIE['adminmenu']) && $_COOKIE['adminmenu'] == "true";
$loggedin = isset($_SESSION['id']);

// Make the menus
$set = new \Tsugi\UI\MenuSet();
$set->setHome($CFG->servicename, $CFG->apphome);
if ( isset($CFG->lessons) ) {
    $set->addLeft('Lessons', $R.'lessons');
}
if ( $loggedin ) {
	$set->addLeft('Assignments', $R.'assignments');
}

$set->addLeft('LibreTexts', 'https://chem.libretexts.org');

if ( $loggedin ) {
    $submenu = new \Tsugi\UI\Menu();
    $submenu->addLink('Profile', $R.'profile');
    if ( isset($CFG->google_map_api_key) ) {
        $submenu->addLink('Map', $R.'map');
    }
    if ( isset($CFG->badge_encrypt_password) && $CFG->badge_encrypt_password ) {
        $submenu->addLink('Badges', $R.'badges');
    }
    if ( $CFG->providekeys ) {
        $submenu->addLink('LMS Integration', $T . 'settings');
    }
    if ( isset($CFG->google_classroom_secret) ) {
        $submenu->addLink('Google Classroom', $T.'gclass/login');
    }
    if ( isset($_COOKIE['adminmenu']) && $_COOKIE['adminmenu'] == "true" ) {
        $submenu->addLink('Administer', $T . 'admin/');
    }
    $submenu->addLink('Logout', $R.'logout');
    if ( isset($_SESSION['avatar']) ) {
        $set->addRight('<img src="'.$_SESSION['avatar'].'" style="height: 2em;"/>', $submenu);
        // htmlentities($_SESSION['displayname']), $submenu);
    } else {
        $set->addRight(htmlentities($_SESSION['displayname']), $submenu);
    }
} else {
    $set->addRight('Login', $T.'login.php');
}

$set->addRight('Book', 'https://chem.libretexts.org/LibreTexts/Sacramento_City_College/SCC%3A_Chem_309_-_General%2C_Organic_and_Biochemistry_(Bennett)/Chapters');
$set->addRight('Instructor', 'https://www.scc.losrios.edu/chemistry/dianne-bennett/');

// Set the topNav for the session
$OUTPUT->topNavSession($set);

$OUTPUT->topNav();
$OUTPUT->flashMessages();
