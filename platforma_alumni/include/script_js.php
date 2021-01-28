<script src="http://code.jquery.com/jquery-latest.js"></script>
<script type="text/javascript" src ="obj/js/ckeditor/ckeditor.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script src="obj/js/script.js"></script>
<script>
var n_despre = 0;
var n_cauta = 0;
var n_profil = 0;
var n_info = 0;
var n_educatie = 0;
var n_lucru = 0;
var n_aiesec = 0;
var n_expertiza = 0;
$("#edit_lucru").click(function(){
    
    if(n_lucru==1)
    {
        $("#form_loc_munca").hide();
         n_lucru = 0;   
    }else
    {       
        $("#form_loc_munca").show();
         n_lucru = 1;
    }
});
$("#edit_aiesec").click(function(){
    
    if(n_aiesec==1)
    {
        $("#form_experienta_aiesec").hide();
         n_aiesec = 0;   
    }else
    {       
        $("#form_experienta_aiesec").show();
         n_aiesec = 1;
    }
});
$("#edit_expertiza").click(function(){
    
    if(n_expertiza==1)
    {
        $("#form_expertiza").hide();
         n_expertiza = 0;   
    }else
    {       
        $("#form_expertiza").show();
         n_expertiza = 1;
    }
});
$("#edit_educatie").click(function(){
    
    if(n_educatie==1)
    {
        $("#form_educatie").hide();
         n_educatie = 0;   
    }else
    {       
        $("#form_educatie").show();
         n_educatie = 1;
    }
});
$("#edit_info_personal").click(function(){
    
    if(n_info==1)
    {
        $("#form_info_personal").hide();
         n_info = 0;   
    }else
    {       
        $("#form_info_personal").show();
         n_info = 1;
    }
});
$("#despre").click(function(){
	
	if(n_despre==1)
	{
		$("#despre_info").hide();
		$("#despre span").css("background","url(obj/img/arrow_down.png) no-repeat");
		n_despre = 0;	
	}else
	{		
		$("#despre_info").show();
		$("#despre span").css("background","url(obj/img/arrow_up.png) no-repeat");
		n_despre = 1;
	}
});

$("#profil").click(function(){
if(n_profil==1){
	$("#profil_info").hide();
	$("#profil span").css("background","url(obj/img/arrow_down.png) no-repeat");
	n_profil = 0;
}else
{
	$("#profil_info").show();
	$("#profil span").css("background", "url(obj/img/arrow_up.png) no-repeat");
	n_profil = 1;
}
});

$("#cauta").click(function(){
	if(n_cauta==1){
	$("#cauta_info").hide();
	$("#cauta span").css("background", "url(obj/img/arrow_down.png) no-repeat");
	n_cauta = 0;
}else
{
	$("#cauta_info").show();
	$("#cauta span").css("background", "url(obj/img/arrow_up.png)no-repeat");
	n_cauta = 1;
}
});


</script>