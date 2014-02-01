<?php

print_r($_GET);
?>


<?php
include'function.php';
$per_page = 9; 

//Calculating no of pages


$count = noofcandidates($dateargument);
$pages = ceil($count/$per_page);
//echo $pages;

?>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.0/jquery.min.js"></script>
<script type="text/javascript" src="jquery_pagination.js"></script>

<div id="loading" ></div>
<div id="content" ></div>
<ul id="pagination">
<?php
//Pagination Numbers
for($i=1; $i<=$pages; $i++)
{
echo '<li id="'.$i.'">'.$i.'</li>';
}
?>
</ul>