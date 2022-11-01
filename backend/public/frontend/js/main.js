$(document).ready(function(){
    const xzoom  = $('.xzoom, .xzoom-gallery')
    const datepicker = $('.datepicker')

    if(xzoom.length > 0){
        xzoom.xzoom({
            zoomWidth: 500,
            title: false,
            tint: '#333',
            xoffset: 15,
        })
    }

    if(datepicker.length > 0){
        datepicker.datepicker({
            showOn: "both",
            buttonImage: "images/icon/ic_doe.svg",
            buttonImageOnly: true,
            dateFormat: 'yy-mm-dd'
        })
    }
})