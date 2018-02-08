<?php 

    function section($section_name, $folder) {
        // Loop through includes folder and check for matching name with .php if there is, grab the html contents and echo or return the html
        $DIR__NAME = ($folder != "" || $folder != null) ? "views/" . $folder . "/*.php" : "views/*.php" ;
        
        foreach(glob($DIR__NAME) as $section) {
            if ($section_name == basename($section, ".php")) {
                // $file_contents = file_get_contents($section, false);
                // return $file_contents;
                require $section;
            }
        }
    }

    // function displayErrorMessage($error) {
    //     if (isset($error)) {
    //         echo $error;
    //     }
    // }
?>