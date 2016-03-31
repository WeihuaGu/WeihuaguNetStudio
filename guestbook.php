<!DOCTYPE>
<html>
<head>
		<?php require_once 'header.php'; ?>
		<link rel="stylesheet" href="simplemde.min.css"></link>
		<script src="simplemde.min.js"></script>
</head>


<body>
 <?php require_once 'animation.php';?>
<textarea id="guestbook" rows="3" cols="20">
你可以在这里写下留言。
</textarea>
<script type="text/javascript">
var simplemde = new SimpleMDE();
</script>
<button id="submitbutton" class="btn waves-effect waves-light" type="submit" name="action">
    <i class="material-icons right">提交留言</i>
 </button>
<script type="text/javascript">
$("#submitbutton").css({
					"position": "fixed",
  					"right":" 30px",
  					"bottom": "30px"});

$("#submitbutton").click(function(){
  $.post("storage.php",
  {
    type:"guestbook",
    data:simplemde.value()
  },
  function(){
    Materialize.toast('感谢留言', 6000);
  });
});

</script>



</body>
</html>

