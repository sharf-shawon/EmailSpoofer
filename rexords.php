<?php
require_once('./password_protect.php');
// Database file, i.e. file with real data
$data_file = '.htrexords';

// Database definition file. You have to describe database format in this file.
// See flatfile.inc.php header for sample.
$structure_file = 'rexords.def';

// Fields delimiter
$delimiter = '`';

// Number of header lines to skip. This is needed if you have some heder saved in the 
// database file, like comment or description
$skip_lines = 0;

// run flatfile manager
include ('flatfile.inc.php');

?>
