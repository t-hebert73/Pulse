<?php
/**
 * Created by PhpStorm.
 * User: Max
 * Date: 4/5/15
 * Time: 9:08 PM
 */


class ImageController extends BaseController{

    public function AddAnImage(){

        return View::make('adminAddAnImage');

    }

    public function addImage(){
        $inputs = Input::all();

        $imgName = $inputs['name'];
        $image = $inputs['image'];

        if(!empty($imgName) && !empty($image)){
            $imgFile = new Image;

            $imgFile->name = $imgName;
            $imgFile->image = $image;

            $imgFile->save();

            $data = array(
                'formStatus' => 'success',
                'formMessage' => '<strong>Success!</strong> Image has been added!');
        }else{
            $data = array(
                'formStatus' => 'failed',
                'formMessage' => '<strong>Failed!</strong> Make sure to fill out the entire form.',
                'addImageForm' => array(
                    'imgName' => $imgName,
                    'image' => $image
                ));
        }

        return View::make('adminAddAnImage')->with('data', $data);
    }
}