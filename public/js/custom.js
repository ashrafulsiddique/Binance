$(function(){


	$("#deposit").change(function(){
        if($("select option:selected")){
            $(".hidden-part").slideDown();
            return false;
        }
    });


 });