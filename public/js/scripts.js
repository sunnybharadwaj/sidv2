$('#add-tag').click(function () {
    $(this).remove();
    $('#add-tags').removeClass('hidden');
});

$('#another-tag').click(function () {
    let elem = $.parseHTML("<input type=\"text\" name=\"newtags[]\" class=\"another-tag block blueprint mb-2\" placeholder=\"Tag\"> <div class=\"mb-2\"></div>");

    $('#tag-inputs').append(elem);
});


$('#photo_hd').change(function () {
    let fileName = $('#photo_hd').val().split('\\');
    fileName = fileName[fileName.length - 1];
    if(!fileName) {
        fileName = "Click here to upload"
    }
    $(this).prev('label').removeClass('labeled').text(fileName);
});

$('#photo_sd').change(function () {
    let fileName = $('#photo_sd').val().split('\\');
    fileName = fileName[fileName.length - 1];
    $(this).prev('label').removeClass('labeled').text(fileName);
});

$('#thumbnail_url').change(function() {
    let fileName = $('#thumbnail_url').val().split('\\');
    fileName = fileName[fileName.length - 1];
    $(this).prev('label').removeClass('labeled').text(fileName);
});

$('.item').click(function() {
    $(this).children('.full-page-bg').toggleClass('hidden');
});



