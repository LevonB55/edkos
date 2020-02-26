const app =  {
    //Image upload
    imageUpload: function(imageSpot,selector) {
        if (selector && selector[0]) {
            let reader = new FileReader();
            reader.onload = function(e) {
                imageSpot.attr('src', e.target.result);
            };
            reader.readAsDataURL(selector[0]);
        }
    }
};