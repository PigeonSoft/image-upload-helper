<?php
/**
 * Created by Ariful Islam.
 * Organization : Pigeon Soft
 * Date: 12/29/2020
 * Time: 7:17 PM
 */


namespace PigeonSoft\UploadImage;


class UploadImage
{
    public static function image_upload($file)
    {
        $fileType=$file->getClientOriginalExtension();
        $fileName=rand(1,1000).date('dmyhis').".".$fileType;
        $file->move('uploads',$fileName);
        return $fileName;
    }

    public static function image_delete($file_name){
        $file_path='uploads/'.$file_name;
        if($file_name!=null and file_exists($file_path)){
            unlink($file_path);
        }
    }

}
