# Image Upload Helper

Image Upload Helper developed for Laravel Image uploads and delete from files. It's a helper library. 

### Usage

```php
use PigeonSoft\UploadImage\UploadImage;

if ($request->hasFile('photo')) {
        $file=$request->file('photo');
        $file_name=UploadImage::image_upload($file);
      }


```

### Developed By Ariful Islam
