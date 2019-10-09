<?php

namespace App\Library;

class Croppic
{
    public static function croppic_imagen($data, $obj_id, $url_image, $croppic_img)
    {
        $imgUrl = $data['imgUrl'];
        // original sizes
        $imgInitW = $data['imgInitW'];
        $imgInitH = $data['imgInitH'];
        // resized sizes
        $imgW = $data['imgW'] * 2;
        $imgH = $data['imgH'] * 2;
        // offsets
        $imgY1 = $data['imgY1'] * 2;
        $imgX1 = $data['imgX1'] * 2;
        // crop box
        $cropW = $data['cropW'] * 2;
        $cropH = $data['cropH'] * 2;
        // rotation angle
        $angle = $data['rotation'];

        //dd($data, $cropH, $cropW);
        $jpeg_quality = 100;


        // uncomment line below to save the cropped image in the same location as the original image.
        //$output_filename = dirname($imgUrl). "/croppedImg_".rand();

        $what = getimagesize($imgUrl);

        switch (strtolower($what['mime'])) {
            case 'image/png':
                $img_r = imagecreatefrompng($imgUrl);
                $source_image = imagecreatefrompng($imgUrl);
                $type = '.png';
                break;
            case 'image/jpeg':
                $img_r = imagecreatefromjpeg($imgUrl);
                $source_image = imagecreatefromjpeg($imgUrl);
                $type = '.jpg';
                break;
            default:
                die('image type not supported');
        }


        $rand = rand(1000000000, 9999999999);
        $name_image = $obj_id . '_' . $rand . $type;

        $output_filename = $url_image . '/' . $name_image;


        //Check write Access to Directory

        if (!is_writable(dirname($output_filename))) {
            $response = Array(
                "status" => 'error',
                "message" => 'Can`t write cropped File'
            );
        } else {

            //Trbajo de la imagen a realizar responsive y escala
            $resizedImage = imagecreatetruecolor($imgW, $imgH);
            imagecopyresampled($resizedImage, $source_image, 0, 0, 0, 0, $imgW, $imgH, $imgInitW, $imgInitH);
            $rotated_image = imagerotate($resizedImage, -$angle, 0);
            $rotated_width = imagesx($rotated_image);
            $rotated_height = imagesy($rotated_image);

            $dx = $rotated_width - $imgW;
            $dy = $rotated_height - $imgH;
            $cropped_rotated_image = imagecreatetruecolor($imgW, $imgH);
            imagecolortransparent($cropped_rotated_image, imagecolorallocate($cropped_rotated_image, 0, 0, 0));
            imagecopyresampled($cropped_rotated_image, $rotated_image, 0, 0, $dx / 2, $dy / 2, $imgW, $imgH, $imgW, $imgH);
            // crop image into selected area
            $final_image = imagecreatetruecolor($cropW, $cropH);
            imagecolortransparent($final_image, imagecolorallocate($final_image, 0, 0, 0));
            imagecopyresampled($final_image, $cropped_rotated_image, 0, 0, $imgX1, $imgY1, $cropW, $cropH, $cropW, $cropH);
            // finally output png image
            imagejpeg($final_image, $output_filename, $jpeg_quality);

            $response = Array(
                "status" => 'success',
                "url" => $name_image,
            );
        }

        return $response;
    }
}