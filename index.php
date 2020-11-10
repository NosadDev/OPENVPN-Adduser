<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container mt-3">
        <div class="row">
            <div class="col-md-6">
                <h3 class="text-center">สร้างผู้ใช้งาน</h3>
                <form action="add.php" method="POST">
                    <div class="form-row align-items-center">
                        <div class="col-12">
                            <label class="sr-only" for="inlineFormInputGroup">Username</label>
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fas fa-user-circle"></i></div>
                                </div>
                                <input type="text" class="form-control" id="inlineFormInputGroup" name="username" placeholder="ชื่อผู้ใช้งาน">
                            </div>
                        </div>
                        <div class="col-12">
                            <label class="sr-only" for="inlineFormInputGroup">Password</label>
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fas fa-key"></i></div>
                                </div>
                                <input type="text" class="form-control" id="inlineFormInputGroup" name="password" placeholder="รหัสผ่าน">
                            </div>
                        </div>
                        <div class="col-12">
                            <label class="sr-only" for="inlineFormInputGroup">Day</label>
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fas fa-clock"></i></div>
                                </div>
                                <select class="form-control" name="day" id="">
                                    <option value="">เลือกวันใช้งาน</option>
                                    <option value="1">1 วัน</option>
                                    <option value="7">7 วัน</option>
                                    <option value="15">15 วัน</option>
                                    <option value="30">30 วัน</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary mb-2"><i class="fas fa-paper-plane"></i> สร้างผู้ใช้งาน</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>