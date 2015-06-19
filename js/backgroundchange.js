var images = ['19.jpg', '130.jpg', '113.jpg', '148.jpg', 'b1.jpg', '26.jpg'];

$('#supersized').css({'background-image': 'url(../images/' + images[Math.floor(Math.random() * images.length)] + ')'});

$('<img src="../images/' + images[Math.floor(Math.random() * images.length)] + '">').appendTo('#banner');