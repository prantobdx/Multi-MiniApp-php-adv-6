 <?php

require_once 'vendor/autoload.php';

use App\Classes\Calculator;
use App\Classes\Category;
use App\Classes\oddEven;
use App\Classes\Prime;

if ( isset( $_GET['pages'] ) )
{
    if ( $_GET['pages'] == 'home' )
    {
        include "pages/home.php";
    }
    elseif ( $_GET['pages'] == 'odd-even' )
    {
        include "pages/oddEven.php";
    }
    elseif ( $_GET['pages'] == 'prime' )
    {
        include "pages/prime.php";
    }
    elseif ( $_GET['pages'] == 'all-products' )
    {
        $category = new Category();
        $categories = $category->index();
        include "pages/allProducts.php";
    }
}
elseif ( isset( $_POST['btn'] ) )
{
    $calculator = new Calculator( $_POST );
    $result = $calculator->index();
    include 'pages/home.php';
}
elseif ( isset( $_POST['oddbtn'] ) )
{
    $oddEven = new OddEven( $_POST );
    $result = $oddEven->index();
    include 'pages/oddEven.php';
}
elseif ( isset( $_POST['primebtn'] ) )
{
    $prime = new Prime( $_POST );
    $result = $prime->index();
    include 'pages/prime.php';

}