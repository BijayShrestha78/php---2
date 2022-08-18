<?php
function evaluate($name,$attendance,$hygiene,$rating)
{
  if(($attendance<80 && $hygiene<50)||($hygiene<50 && $rating<2))
  {
     echo $name ," You are fired from the Rojan Krina Passal!!";
  }

  else
  {
      echo "Not Fired for now";
  }
}
evaluate("Kusal Karki", 90, 70, 3);
?>