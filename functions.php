<?php

function addEmptyFields($array)
{
    foreach ($array as $field)
    {
        $array[$field] = "";
    }
    return $array;
}

/*function generateThumbnail($img, $width = 20, $height = 20, $quality = 90)
{
        $imagick = new Imagick(realpath($img));
        $imagick->setImageFormat('jpeg');
        $imagick->setImageCompression(Imagick::COMPRESSION_JPEG);
        $imagick->setImageCompressionQuality($quality);
        $imagick->thumbnailImage($width, $height, false, false);
        $filename_no_ext = reset(explode('.', $img));
        file_put_contents($filename_no_ext . 'images' . '.jpg', $imagick);
        }*/