<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">

        <!--<link rel="stylesheet" href="css/icon-font.css">-->

        <link rel="stylesheet" href="css/style.css">
       <!-- favicon website -->
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
        
        <title>PMC Connection</title>
    </head>

    <body>
    
       
        <?php 
    if(isset($content)){
        
        echo $content;
    }
    ?>
                     <!-- Modal -->

                <div class="modal fade" id="uploadform" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Upload your CV</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form action="" enctype="" method="post" id="uploadform"></form>
                            <div class="modal-body">
                                <!-- Upload message from PHP file-->
                                <div id="uploadmessage">

                                </div>

                                <div class="form-group">
                                    <label for="username">Firstname</label>
                                    <input type="text" class="form-control" id="username" mane="username" placeholder="Enter your firstname">
                                </div>

                                <div class="form-group">
                                    <label for="lastname">Lastname</label>
                                    <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Enter your lastname">
                                </div>

                                <div class="form-group">
                                    <label for="mobilenumber">Mobile Number</label>
                                    <input type="text" class="form-control" id="mobilenumber" name="mobilenumber" placeholder="Enter your mobile number">
                                </div>

                                <div class="form-group">
                                    <label for="email1">Email Address</label>
                                    <input type="email" class="form-control" id="email1" name="email" placeholder="Enter email">
                                    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                                </div>

                                <div class="form-group">
                                    <input class="" type="file" name="file[]" id="file" multiple / style="width: 300px;">
                                </div>

                            </div>
                            <div class="modal-footer">
                            <input type="submit" class="btn btn-lg btn-primary" id="uploadcv" name="uploadcv" value="Submit">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </form>  

    <!-- scripts javascript and JQuery -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="index.js"></script>

</body>

</html>