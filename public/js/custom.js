/**
 * Created by Max on 2/7/15.
 */
$(document).ready(function(){
    //ADD IMG CLASSES WITH SPECIFIC NUMBER


    var $index = 0;
    var $oddIndex = 0;
    var $evenIndex = 0;

    $('.gallery-container').children().each(function(){
        $(this).addClass('img-'+$index);

        if($index == 0 + (4*($evenIndex))){
            $(this).addClass('first');
            $evenIndex++;
        }
        if($index == 3 +(4*($oddIndex))){
            $(this).addClass('last');
            $oddIndex++;
        }

        $index++;
    });
});