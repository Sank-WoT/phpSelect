<?php
$booklist=<<<END
Elmer Gantry             Le            1927
END;
$books=explode("\n", $booklist);
for($i=0, $j=count($books); $i<$j; $i++) {
    $book_array[$i]["title"] = substr($books[$i], 0, 25);
    $book_array[$i]["author"] = substr($books[$i], 25, 14);

    $book_array[$i]["publication_year"] = substr($books[$i], 39, 4);
}
print_r($book_array);
?>
