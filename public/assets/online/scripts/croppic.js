function fn_croppic($id, $url, $url_delete) {
    var $objImage = $('#' + $id);
    var $data = $objImage.data();
    var croppicOptions = {
        cropUrl: $url,
        processInline: true,
        modal: true,
        cropData: {
            'id': $data.model
        },
        imgEyecandyOpacity: 0.4,
        loaderHtml: '<div class="loader bubblingG"><span id="bubblingG_1">' +
        '</span><span id="bubblingG_2"></span><span id="bubblingG_3"></span></div>',
        onAfterImgCrop: function (data) {
            if (data.state == 200) {
                $objImage.data('id', data.id);
            }
        },
        onBeforeRemoveCroppedImg: function () {
            delete_crop($id, this, $url_delete);
            $objImage.find('.cropControlsUpload')
                .find('.cropControlRemoveCroppedImage').remove();
        },
        onError: function (errormessage) {
            console.log('onError:' + errormessage)
        }
    };
    var cropContainer = new Croppic($id, croppicOptions);
    if ($data.image) {
        $objImage.find('.cropControlsUpload')
            .append('<i class="cropControlRemoveCroppedImage"></i>');
        var btn_remove = $('#' + $id).find('.cropControlsUpload')
            .find('.cropControlRemoveCroppedImage');
        btn_remove.on('click', function () {
            delete_crop($id, cropContainer, $url_delete);
        });
    }
};

function delete_crop(imgCrop, objCrop, $url_delete) {
    var $objImg = $('#' + imgCrop);
    var data = {id: $objImg.data('id')};
    $.ajax({
        type: 'POST',
        dataType: 'json',
        url: $url_delete,
        async: false,
        data: data,
        success: function (data) {
            if (!data.error) {
                $objImg.find('.croppedImg').remove();
                $objImg.find('.cropControlsUpload')
                    .find('.cropControlRemoveCroppedImage')
                    .remove();
                $objImg.attr("data-imagen", '');
                objCrop.reset();
            }
        },
        error: function () {
            console.log('error');
        }
    });
}