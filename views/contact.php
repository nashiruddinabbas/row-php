<?php include "includes/header.php"; ?>
<section class="py-5 bg-dark-subtie">
    <div class="container">
        <div clas="row">
            <div class="col-md-8 mx-auto">
                 <div class="card">
                     <div class="card-header">Full Name Program</div>
                     <div class="card-body">
                         <form action="web.php" method="post">
                             <div class="row mb-3">
                                 <label class="col-md-3">First Name</label>
                                 <div class="col-md-9">
                                     <input type="text" class="form-control" name="first_name"/>
                                 </div>
                             </div>
                             <div class="row mb-3">
                                 <label class="col-md-3">Last Name</label>
                                 <div class="col-md-9">
                                     <input type="text" class="form-control" name="last_name"/>
                                 </div>
                             </div>
                             <div class="row mb-3">
                                 <label class="col-md-3">Full Name</label>
                                 <div class="col-md-9">
                                     <input type="text" class="form-control" value="<?php echo isset($_GET['result']) ? $_GET['result'] : ''; ?>"/>
                                 </div>
                             </div>
                             <div class="row mb-3">
                                 <label class="col-md-3"></label>
                                 <div class="col-md-9">
                                     <input type="submit" name="full_name_btn" class="btn btn-success" value="Make Full Name"/>
                                 </div>
                             </div>
                         </form>
                     </div>
                 </div>
            </div>
        </div>
    </div>
</section>
<?php include "includes/footer.php"; ?>

