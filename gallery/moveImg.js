
function animate() 
{
  var elem = document.getElementById("#"+"<?php echo $integer; ?>"); 
  colsole.log("#"+"<?php echo $integer; ?>");  
  var pos = 0;
  var id = setInterval(frame, 5);
  function frame() 
  {
    if (pos == 500) 
    {
      clearInterval(id);
    } 
    else 
    {
      pos++; 
      elem.style.left = pos + 'px'; 
    }
  }
}
