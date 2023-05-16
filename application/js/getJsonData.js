$(document).ready(function() {
    
    $.getJSON('./application/model/data.json', function(jsonObj) {
        //console.log(jsonObj);

        $('.galleryTitle').html('<h2>' + jsonObj.pageTextData[3].galleryTitle + '</h2>');
        $('.galleryText').html('<p>' + jsonObj.pageTextData[3].galleryDescription + '</p>');

        $('.infoTitle').html('<h2>' + jsonObj.pageTextData[4].AdditionalTitle + '</h2>');
        $('.infoText').html('<p>' + jsonObj.pageTextData[4].AdditionalSubtitle + '</p>');

        $('#title_coke').html('<h2>' + jsonObj.pageTextData[0].title + '</h2>');
        $('#subTitle_coke').html('<h3>' + jsonObj.pageTextData[0].subTitle + '</h3>');
        $('#description_coke').html('<p>' + jsonObj.pageTextData[0].description + '</p>');

        $('#title_sprite').html('<h2>' + jsonObj.pageTextData[1].title + '</h2>');
        $('#subTitle_sprite').html('<h3>' + jsonObj.pageTextData[1].subTitle + '</h3>');
        $('#description_sprite').html('<p>' + jsonObj.pageTextData[1].description + '</p>');

        $('#title_pepper').html('<h2>' + jsonObj.pageTextData[2].title + '</h2>');
        $('#subTitle_pepper').html('<h3>' + jsonObj.pageTextData[2].subTitle + '</h3>');
        $('#description_pepper').html('<p>' + jsonObj.pageTextData[2].description + '</p>');
    });
});