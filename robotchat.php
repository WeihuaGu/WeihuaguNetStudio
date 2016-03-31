<h6> 机器人陪你聊天 </h6>
<input type="text" class="white-text text-darken-2" id="chat"   rows="1" cols="10"></input>
<script type="text/javascript">
$(document).ready(function(){
  $("#chat").focus();
  $("input").keydown(function(key){
    if(key.which == 13) {

	var text=$("input").val();
        $.post("interactive.php",{
    			type:"robotchat",
    			data:text
  			},function(result){
				Materialize.toast(result, 3000);
				
			 });
             setTimeout('', 2000);
            document.getElementById("chat").value="";
	     


	}
  });
});
</script>

