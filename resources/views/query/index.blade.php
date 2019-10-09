<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <link href="{{ URL::asset('signupCSS/signup.css') }}" rel="stylesheet" />
   
</head>

<body>
    {{------------------------------------------Modal----------------------------------------------------}}
    <div id="checkRegex" class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content" style="background-color: yellow; border-radius: 0 25%;">
                <div class="modal-header">
                    <h5 class="modal-title"></h5><i class="fas fa-exclamation-circle fa-8x" style="margin: 0 auto"></i>
                    </h5>
                </div>
                <div class="modal-body" style="font-size: 2em; text-align: center">
                    <p class="checkRegex"></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            {{------------------------------------------Nav----------------------------------------------------}}
            <div class="col-md-12 navList">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <a class="navbar-brand" href="#" style="color: red">III Marathon</a>
                </nav>
            </div>
            {{------------------------------------------header圖片----------------------------------------------------}}
            <div class="col-md-12 header">
                <img src="{{ URL::asset("img/changhua202002.jpg") }}" class="img-fluid" alt="Responsive image">
            </div>
            {{------------------------------------------查詢報名資料----------------------------------------------------}}
            <div class="col-md-12 content">
                <form name="queryMember">
                    <div class="form-row d-flex justify-content-center">
                        <div class="col-md-6 mb-3 ">
                            <div id="title1" class="title"><i class="fas fa-dot-circle"></i>資料查詢訂單
                                <hr>
                            </div>
                        </div>
                    </div>
                    <div id="query">
                        <div class="col-md-12 mb-3 ">
                            <div class="form-row d-flex justify-content-center">
                                <div class="col-md-6 mb-3 ">
                                    <label for="twId">身分證</label>
                                    <input type="text" class="form-control myInput" name="twId" id="twId"
                                        placeholder="請輸入身分證" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="btn-group d-flex justify-content-center myButton">
                        <div><a href={{"/query/result"}}><input class="btn btn-primary" type="button" value="查詢資料"></a></div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        document.getElementById("title1").addEventListener("click", function () {
            $("#query").toggle();
        })
    </script>

    {{-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>
