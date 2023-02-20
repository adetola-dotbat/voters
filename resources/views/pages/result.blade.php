<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Creating Dynamic Tabs in Bootstrap via Data attributes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        #success_message {
            display: none;
        }

        input[type='text'] {
            width: 100px;
            border-radius: 2px;
            border: 1px solid #CCC;
            padding: 10px;
            color: #333;
            font-size: 14px;
            margin-top: 5px;
        }
    </style>
</head>

<body>
    <div class="container">
        <ul class="nav nav-tabs" id="myTab">
            <li class="nav-item">
                <a href="#home" class="nav-link active" data-bs-toggle="tab">PRESIDENTIAL</a>
            </li>
            <li class="nav-item">
                <a href="#profile" class="nav-link" data-bs-toggle="tab">SENATE</a>
            </li>
            <li class="nav-item">
                <a href="#messages" class="nav-link" data-bs-toggle="tab">HOUSE OF REPS</a>
            </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane fade show active" id="home">
                <form class="well form-horizontal" action="president_r.php" method="post" id="contact_form">
                    <fieldset>

                        <!-- Form Name -->
                        <legend>
                            <center>
                                <h2><b>PRESIDENTIAL RESULT
                                        {{-- <?php echo $_SESSION['username']; ?>  --}}
                                    </b></h2>
                            </center>
                        </legend><br>

                        <!-- Text input-->

                        <div class="form-group">
                            <label class="col-md-4 control-label">APC</label>
                            <div class="col-md-4 inputGroupContainer">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                    <input name="apc" placeholder="APC" class="form-control" type="text">
                                </div>
                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label">PDP</label>
                            <div class="col-md-4 inputGroupContainer">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                    <input name="pdp" placeholder="PDP" class="form-control" type="text">
                                </div>
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="col-md-4 control-label">LP</label>
                            <div class="col-md-4 inputGroupContainer">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                    <input name="lp" placeholder="LP" class="form-control" type="text">
                                </div>
                            </div>
                        </div>



                        <!-- Text input-->

                        <div class="form-group">
                            <label class="col-md-4 control-label">NNPP</label>
                            <div class="col-md-4 inputGroupContainer">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                    <input name="nnpp" placeholder="NNPP" class="form-control" type="text">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Others</label>
                            <div class="col-md-4 inputGroupContainer">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                    <input name="others" placeholder="Sauran Jam'iyyu" class="form-control"
                                        type="text">
                                </div>
                            </div>
                        </div>

                        <!-- Text input-->

                        <!-- Success message -->
                        <div class="alert alert-success" role="alert" id="success_message">Success <i
                                class="glyphicon glyphicon-thumbs-up"></i> Success!.</div>

                        <!-- Button -->
                        <div class="form-group">
                            <label class="col-md-4 control-label"></label>
                            <div class="col-md-4"><br>
                                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button
                                    type="submit"
                                    class="btn btn-warning">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspSUBMIT <span
                                        class="glyphicon glyphicon-send"></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</button>
                            </div>
                        </div>

                    </fieldset>
                </form>
            </div>
            <div class="tab-pane fade" id="profile">

                <form class="well form-horizontal" action="senate_r.php" method="post" id="contact_form">
                    <fieldset>

                        <!-- Form Name -->
                        <legend>
                            <center>
                                <h2><b>SENATORIAL RESULT </b></h2>
                            </center>
                        </legend><br>

                        <!-- Text input-->

                        <div class="form-group">
                            <label class="col-md-4 control-label">APC</label>
                            <div class="col-md-4 inputGroupContainer">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                    <input name="apc" placeholder="APC" class="form-control" type="text">
                                </div>
                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label">PDP</label>
                            <div class="col-md-4 inputGroupContainer">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                    <input name="pdp" placeholder="PDP" class="form-control" type="text">
                                </div>
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="col-md-4 control-label">LP</label>
                            <div class="col-md-4 inputGroupContainer">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                    <input name="lp" placeholder="LP" class="form-control" type="text">
                                </div>
                            </div>
                        </div>



                        <!-- Text input-->

                        <div class="form-group">
                            <label class="col-md-4 control-label">NNPP</label>
                            <div class="col-md-4 inputGroupContainer">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                    <input name="nnpp" placeholder="NNPP" class="form-control" type="text">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Others</label>
                            <div class="col-md-4 inputGroupContainer">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                    <input name="others" placeholder="Sauran Jam'iyyu" class="form-control"
                                        type="text">
                                </div>
                            </div>
                        </div>

                        <!-- Text input-->

                        <!-- Success message -->
                        <div class="alert alert-success" role="alert" id="success_message">Success <i
                                class="glyphicon glyphicon-thumbs-up"></i> Success!.</div>

                        <!-- Button -->
                        <div class="form-group">
                            <label class="col-md-4 control-label"></label>
                            <div class="col-md-4"><br>
                                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button
                                    type="submit"
                                    class="btn btn-warning">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspSUBMIT <span
                                        class="glyphicon glyphicon-send"></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</button>
                            </div>
                        </div>

                    </fieldset>
                </form>


            </div>
            <div class="tab-pane fade" id="messages">
                <form class="well form-horizontal" action="reps_r.php" method="post" id="contact_form">
                    <fieldset>

                        <!-- Form Name -->
                        <legend>
                            <center>
                                <h2><b>HOUSE OF REP. RESULT </b></h2>
                            </center>
                        </legend><br>

                        <!-- Text input-->

                        <div class="form-group">
                            <label class="col-md-4 control-label">APC</label>
                            <div class="col-md-4 inputGroupContainer">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                    <input name="apc" placeholder="APC" class="form-control" type="text">
                                </div>
                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label">PDP</label>
                            <div class="col-md-4 inputGroupContainer">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                    <input name="pdp" placeholder="PDP" class="form-control" type="text">
                                </div>
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="col-md-4 control-label">LP</label>
                            <div class="col-md-4 inputGroupContainer">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                    <input name="lp" placeholder="LP" class="form-control" type="text">
                                </div>
                            </div>
                        </div>



                        <!-- Text input-->

                        <div class="form-group">
                            <label class="col-md-4 control-label">NNPP</label>
                            <div class="col-md-4 inputGroupContainer">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                    <input name="nnpp" placeholder="NNPP" class="form-control" type="text">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Others</label>
                            <div class="col-md-4 inputGroupContainer">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                    <input name="others" placeholder="Sauran Jam'iyyu" class="form-control"
                                        type="text">
                                </div>
                            </div>
                        </div>

                        <!-- Text input-->

                        <!-- Success message -->
                        <div class="alert alert-success" role="alert" id="success_message">Success <i
                                class="glyphicon glyphicon-thumbs-up"></i> Success!.</div>

                        <!-- Button -->
                        <div class="form-group">
                            <label class="col-md-4 control-label"></label>
                            <div class="col-md-4"><br>
                                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button
                                    type="submit"
                                    class="btn btn-warning">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspSUBMIT <span
                                        class="glyphicon glyphicon-send"></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</button>
                            </div>
                        </div>

                    </fieldset>
                </form>

            </div>
        </div>
    </div>
</body>

</html>
