<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="0">

    <title>Flip Books</title>
    <link rel="stylesheet" href="css/lightbox.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
</head>

<body>
    <div class="container" id="container1" style="height: 1800px;">

    </div>
</body>





<script src="js/jquery.min.js"></script>
<script src="js/html2canvas.min.js"></script>
<script src="js/three.min.js"></script>
<script src="js/pdf.min.js"></script>
<script src="js/3dflipbook.min.js"></script>
<script src="js/lightbox.js"></script>


<script>

load_flip();
function load_flip()
{

//
var styleClb = function() {
    $('.fb3d-modal').removeClass('light').addClass('dark');
    }, booksOptions = {
        book1: {
            pdf: 'sample.pdf',
            template: {
            html: 'templates/default-book-view.html',
            styles: [
                'css/short-white-book-view.css'
            ],
            links: [{
                rel: 'stylesheet',
                href: 'css/font-awesome.min.css'
            }],
            script: 'js/default-book-view.js',
            sounds: {
                startFlip: 'sounds/start-flip.mp3',
                endFlip: 'sounds/end-flip.mp3'
            }
            },
            styleClb: styleClb
        }

    };

    var instance = {
        scene: undefined,
        options: undefined,
        node: $('.fb3d-modal .mount-container')
    };

        var modal = $('.fb3d-modal');
    modal.on('fb3d.modal.hide', function() {
    instance.scene.dispose();
    });
    modal.on('fb3d.modal.show', function() {
        instance.scene = instance.node.FlipBook(instance.options);
        instance.options.styleClb();

    });


    instance.options = booksOptions['book1'];
    console.log(instance.options);
    $('.fb3d-modal').fb3dModal('show');



}
</script>
</html>
