<?
function dump($var, $die = false, $all = false)
{
global $USER;
<<<<<<< HEAD
if($USER->IsAdmin()||($all == TRUE))
{
?>

<font style="text-align:left; font-size: 10px"><pre><?
var_dump($var)

?></pre></font><br>
=======
if($USER->IsAdmin() || ($all == true))
{
?>

<font style="text-align: left; font-size: 10px"><pre><?var_dump($var)?></pre></font><br>
>>>>>>> 720146a21dbbb2e41469925343916565e40145ab

<?

}

if($die)
{
die;
}

}
?>