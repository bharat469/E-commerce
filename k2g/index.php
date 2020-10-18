<?php
    ob_start();
    // include header.php file
    include ('header.php');
?>

<?php

    /*  include banner area  */
        include ('Template/_banner-area.php');
    /*  include banner area  */

    /*  include top sale section */
        include ('Template/top-sale.php');
    /*  include top sale section */

    /*  include special price section  */
         include ('Template/special.php');
    /*  include special price section  */

    /*  include banner ads  */
        include ('Template/_banner.php');
    /*  include banner ads  */

    

    /*  include blog area  */
         include ('Template/blog.php');
    /*  include blog area  */

?>


<?php
// include footer.php file
include ('footer.php');
?>