<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.3.2/html2canvas.min.js" integrity="sha512-tVYBzEItJit9HXaWTPo8vveXlkK62LbA+wez9IgzjTmFNLMBO1BEYladBw2wnM3YURZSMUyhayPCoLtjGh84NQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jscolor/2.4.6/jscolor.min.js" integrity="sha512-+MYpQFxmnAHvrA8opNlNDNwC8qPiZu9i3Lb86n/H9EYugz2FB6MBRQrKpBrkyL/qQgBjWN2ctQbD9XoaVh+TUg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="preload" href="Morton-ExtraBold.woff2" as="font" type="font/woff2" crossorigin>
    <title>Image Generator</title>
</head>
<body class="bg-dark">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-12">
               <div class="card mt-3">
                   <div class="card-header">
                       <h1 class="text-dark text-center">Image Generator</h1>
                   </div>
                   <div class="card-body">
                       <div class="row pb-5">
                           <div class="col-md-6">
                               <div class="row">
                                   <div class="col-md-6">
                                       <div class="form-group">
                                           <label class="fw-bold" for="">Background Color</label>
                                            <div class="row mt-2">
                                                <div class="col-md-6">
                                                <button onclick="purple()" id="btnPurple" class="btn btn-primary col-12">Purple</button>
                                                <button onclick="orange()" id="btnPurple" class="btn btn-primary col-12 mt-2">Orange</button>
                                                </div>
                                                <div class="col-md-6">
                                                <button onclick="green()" id="btnPurple" class="btn btn-primary col-12">Green</button>
                                                <button onclick="blue()" id="btnPurple" class="btn btn-primary col-12 mt-2">Blue</button>
                                                </div>
                                            </div> 
                                       </div>
                                   </div>
                               </div>
                           </div>
                           <div class="col-md-12 mt-3">
                               <div class="form-group">
                                   <label for="">Enter Your Desired Text Here</label>
                               <textarea id="canvasText" type="text" rows="5" placeholder="Input your text here" name="" id="" class="form-control"></textarea>
                               </div>
                           </div>
                       </div>

                       <div id="canvas" class="mx-auto">
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-md-12">
                                        <p class="text-center" id="InnerText">
                                        </p>
                                        <div class="row mx-auto text-center justify-content-center">
                                        <div class="col-md-12">
                                        <img class="" id="imageLogo" src="" alt="">
                                        </div>
                                    </div>
                                    </div>
                                  
                                </div>
                            </div>
                       </div>
                   </div>
                   <div class="card-footer">
                       <div class="row justify-content-center text-center">
                           <div class="col-md-12">
                           <button onclick="doCapture()" class="btn btn-lg btn-success">Download</button>
                           </div>
                       </div>
                   </div>
               </div>
            </div>
        </div>
    </div>
<script>
    var canvas = document.getElementById('canvas')
    var textInnerCanvas = document.getElementById('InnerText')
    var textText = document.getElementById('canvasText')
    var bgPurple = document.getElementById('btnPurple')
    var bgOrange = document.getElementById('Orange')
    var bgGreen = document.getElementById('Green')
    var bgBlue = document.getElementById('Blue')
    var logoImage = document.getElementById('imageLogo')
    
    function purple(){
        canvas.style.backgroundImage = "url('./assets/images/SG-quote-purple.png')";
        canvas.style.backgroundRepeat = "no-repeat";
        canvas.style.backgroundSize = "contain";
        textInnerCanvas.style.color="white";
        logoImage.src="./assets/images/SG-logo.png";

    }
    function orange(){
        canvas.style.backgroundImage = "url('./assets/images/SG-quote-orange.png')";
        canvas.style.backgroundRepeat = "no-repeat";
        canvas.style.backgroundSize = "contain";
        textInnerCanvas.style.color="white";
        logoImage.src="./assets/images/SG-logo.png";

    }
    function green(){
        canvas.style.backgroundImage = "url('./assets/images/SG-quote-green.png')";
        canvas.style.backgroundRepeat = "no-repeat";
        canvas.style.backgroundSize = "contain";
        textInnerCanvas.style.color="black";
        logoImage.src="./assets/images/logo-black.png";

    }
    function blue(){
        canvas.style.backgroundImage = "url('./assets/images/SG-quote-blue.png')";
        canvas.style.backgroundRepeat = "no-repeat";
        canvas.style.backgroundSize = "contain";
        textInnerCanvas.style.color="white";
        logoImage.src="./assets/images/SG-logo.png";

    }

    textText.addEventListener('keyup',
    function () {

        var text = textText.value
        text = text.replace(/\r?\n/g, '<br />');
        textInnerCanvas.innerHTML = text.toUpperCase();
        textInnerCanvas.style.marginTop = "-80.67%";
        
    }
    );
    function doCapture() {
    html2canvas(canvas).then(function (canvas) {
        var a = document.createElement('a');
        // toDataURL defaults to png, so we need to request a jpeg, then convert for file download.
        a.href = canvas.toDataURL("image/jpeg").replace("image/jpeg", "image/octet-stream");
        a.download = 'Quotes.jpg';
        a.click();
    });
}

</script>
</body>
</html>