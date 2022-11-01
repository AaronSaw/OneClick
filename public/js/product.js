$(document).ready(function (e) {
    $('#image').change(function () {
        let reader = new FileReader();
        reader.onload = (e) => {

            $('#preview-image').attr('src', e.target.result);
        }
        reader.readAsDataURL(this.files[0]);
    });
});

