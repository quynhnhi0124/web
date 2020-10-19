<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')Test</title>

    <link rel="stylesheet" href="{{ asset ('css/base/test.css') }}">
    <!-- <link rel="stylesheet" href="{{ asset('css/bootstrap/layout.css') }}"> -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap/bootstrap.css') }}">
    <link rel="stylesheet" href = "{{ asset('css/bootstrap/bootstrap.min.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel = "stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src = "{{ asset('js/bootstrap.min.js') }}"></script>

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500&display=swap" rel="stylesheet">

</head>
<body>

    <!-- danh sach khoa hoc -->
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Danh sach khoa hoc</h1>
            <form action="#">
                <div class="input-group search-bar">
                    <input type="text" name="search" class = 'form-control col-auto my-1' placeholder = 'Tim kiem khoa hoc...'>
                    <button type = 'button' class = 'col-auto my-1 btn btn-search btn-outline-dark ' style = 'float:left; margin-left: 10px;'>Tim kiem</button>
                </div>
            </form>
        </div>
    </div>
    <div class="container">
        <button type = 'button' class = 'btn btn-add btn-outline-dark' data-toggle = 'modal' data-target = '#addModal'><span><i class="fa fa-plus" aria-hidden="true"></i></span> Them khoa hoc</button>

        <form action="#">
            <div class="modal fade" id = 'addModal' role = 'dialog'>
                <div class="modal-dialog" role = 'document'>
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Them khoa hoc</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="sessionName">Ten khoa hoc:</label>
                                <input type="text" name="session-name" id="sessionName" class = 'form-control'>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button class = 'btn btn-outline-dark'>Luu</button>
                            <button type="button" class="btn btn-outline-dark" data-dismiss="modal" aria-label="Close"> Huy
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>

        <table class = 'table'>
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Ten khoa hoc</th>
                    <th>Trang thai</th>
                    <th>Tuy chon</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Khoa hoc 01</td>
                    <td>Hoan thanh</td>
                    <td><i class="fa fa-trash-o" aria-hidden ='true'></i>&nbsp<i class="fa fa-pencil-square-o" aria-hidden="true"></i></td>
                </tr>
            </tbody>
        </table>
        
    </div>
    <footer>
        <div class="container">
            <div class="row footer-content">
                <div class="description col-lg-4 col-md-12 col-sm-12 col-12">
                    <h3 style = 'margin-bottom: 15px;'>Quan ly tap huan</h3>
                    <p class = 'text-justify'>Website quan ly tap huan cua nhom 10 mon phat trien ung dung web</p>
                    <div class="row network">&nbsp&nbsp
                        <i class="fa fa-facebook" aria-hidden="true"></i>
                        <i class="fa fa-twitter" aria-hidden="true"></i>
                        <i class="fa fa-google-plus" aria-hidden="true"></i>
                        <i class="fa fa-instagram" aria-hidden="true"></i>
                    </div>
                </div>
                <div class="recent col-lg-4 col-md-12 col-sm-12 col-12">
                    <h3 style = 'margin-bottom: 15px;'>Recent News</h3>
                    <p>Nothing new :)</p>
                </div>
                <div class="contact col-lg-4 col-md-12 col-sm-12 col-12">
                    <h3 style = 'margin-bottom: 15px;'>Contact</h3>
                    <p><i class="fa fa-home" aria-hidden="true"></i> 344 Nguyen Trai Distr<p>
                    <p><i class="fa fa-envelope-o" aria-hidden="true"></i> nhom10_t62@hus.edu.vn</p>
                    <p><i class="fa fa-phone" aria-hidden="true"></i> 0982087671 </p>
                </div>
            </div> 
        </div>
    </footer>
</body>
</html>