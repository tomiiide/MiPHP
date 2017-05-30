<div class="col-md-6 offset-md-3">
<form action="" method="POST" class="form" role="form">
        <div class="form-group">
            <legend>Register For MiPHP</legend>
        </div>
    <?php if(isset($message)){ ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <?= $message; ?>;
    </div>
    <?php } ?>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="" placeholder="Input Email" name="email">
            </div> 

            <div class="form-group">
                <label for="fullname">Full Name</label>
                <input type="text" class="form-control" id="" placeholder="Input fullname" name="fullname">
            </div>    

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="" placeholder="Input password" name="password">
            </div>    
        <div class="form-group">
            <div class="col-sm-10 col-sm-offset-2">
                <button type="submit" class="btn btn-primary" name="register">Submit</button>
            </div>
        </div>
</form>
</div>
