<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">

</script>
<script type="text/javascript">
  
    function submitData(action) {
        $(document).ready(function() {
           var data={
            action:action,
            id:$("#id").val(),
            url:$("#url").val(),
            descritpion:$("#description").val(),
            category:$("#category").val(),
            user_id:$("#user_id").val(),
           };
           $.ajax({
              url:'function.php',
              type:'post',
              data:data,
              success:function(response){
                alert(response);
                if(response=="Deleted successfully"){
                  $("#"+action).css("display","none");
                }
              }
           });
        });
    }

</script>