/**
 * Created by Max on 2/7/15.
 */
$(document).ready(function(){

    //ADD IMG CLASSES WITH SPECIFIC NUMBER
    var $index = 0;
    $('.gallery-container').children().each(function(){
        $(this).addClass('img-'+$index);

        if($index == 0){
            $(this).addClass('first');
        }
        if($index == 4){
            $(this).addClass('last');
        }
        $index++;
    });
});