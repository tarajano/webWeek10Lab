<?php
/**
 * Created by PhpStorm.
 * User: tarajano
 * Date: 05/04/18
 * Time: 12:23 PM
 */

//<h2>Today's Specials</h2>
//<hr>
//<img src="images/burger_small.jpg" alt="Burger" title="Monday's Special - Burger">
//<h3>The WP Burger</h3>
//<p>Freshly made all-beef patty served up with homefries - $14</p>
//<hr>
//<img src="images/kebobs.jpg" alt="Kebobs" title="WP Kebobs">
//<h3>WP Kebobs</h3>
//<p>Tender cuts of beef and chicken, served with your choice of side - $17</p>
//<hr>
//    global $specialsArray, $specialsAsString;

    include('MenuItem.php');

    function echoTodaysSpecials(){

        $specialsArray = array(
            new MenuItem("The WP Burger", "Freshly made all-beef patt y served up with homefries",
                "14","images/burger_small.jpg","Burger","Monday's Special - Burger"),
            new MenuItem("WP Kebobs", "Tender cuts of beef and chicken, served with your choice of side",
                "17","images/kebobs.jpg","Kebobs","WP Kebobs")
        );
        $specialsItemStringFormat = '<hr><img src=%s alt=%s title=%s><h3> %s </h3><p> %s - $%d </p><hr>';

        echo '<aside><h2>Today\'s Specials</h2>';

        foreach ($specialsArray as $specialItem){
            echo sprintf($specialsItemStringFormat,
                $specialItem->getItemImgSrc(),
                $specialItem->getItemImgAlt(),
                $specialItem->getItemImgTitle(),
                $specialItem->getItemName(),
                $specialItem->getItemDescription(),
                $specialItem->getItemPrice());
        }

        echo '</aside>';
    }

?>