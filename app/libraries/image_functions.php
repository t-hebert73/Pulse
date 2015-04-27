<?php
/**
 * Created by PhpStorm.
 * User: Trevor
 * Date: 22/04/2015
 * Time: 10:46 PM
 */


/**
 * @param $target - html ID target
 * @param $srcThumb - source from images folder
 * @param $srcFull - source from images folder
 * @return string - html modal formatted image
 */
function PrintImage($target, $srcThumb, $srcFull){

    $image = '<div class="img-box">';

    $image .= '<a href="#" data-toggle="modal" data-target="#'.$target.'">';

    $image .= '<img src="../../images/'.$srcThumb.'">';
    $image .= '</a>';

    $image .= '<div class="modal fade" id="'.$target.'" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">';
    $image .= '<div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="myModalLabel">Pulse @ Mahtey, January 30/2015</h4>
                        </div>
                        <div class="modal-body">
                            <img src="../../images/'.$srcFull.'">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>';
    $image .= '</div>';
    $image .= '</div>';

    return $image;
}