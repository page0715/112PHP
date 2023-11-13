<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>會員登入</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <style>
        input[type='text'],
        input[type='password']{
            outline: none;
        }
    </style>
</head>
<body>
   <div class="container">
    <div class="w-50 mx-auto">
        <h2>會員登入</h2>
        <form action="login.php" method="post">
            <?php
                if(isset($_GET['error'])){
                    echo "<span style='color:red'>";
                    echo $_GET['error'];
                    echo "</span>";
                }

            ?>
            <div class="row col-8 my-4">
                <label for="" class="col-3">帳號：</label>
                <input type="text" name="acc" id="acc" class="col-9 rounded border-0 border-bottom border-1 ">
            </div>
            <div class="row col-8 my-4">
                <label for="" class="col-3">密碼：</label>
                <input type="text" name="pw" id="pw" class="col-9 rounded border-0 border-bottom border-1 ">
            </div>
            <div class="text-center">
                <input type="submit" value="送出" class="btn btn-primary mx-2">
                <input type="reset" value="重置" class="btn btn-warning mx-2">
            </div>
        </form>
    </div>
   </div> 
</body>
</html>