<?php include 'includes/header.php' ?>
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h2 class="text-center">Full Name</h2>
                        </div>
                        <div class="card-body">
                            <form action="action.php?page=get-full-name" method="post">
                                <div class="row mt-3">
                                    <label class="col-md-4">First name</label>
                                    <div class="col-md-8">
                                        <input type="text" name="first_name" class="form-control" />
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label class="col-md-4">Last name</label>
                                    <div class="col-md-8">
                                        <input type="text" name="last_name" class="form-control" />
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label class="col-md-4">Full Name</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" value="<?php echo isset($result) ? $result : '' ?>"/>

                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label class="col-md-4"></label>
                                    <div class="col-md-8">
                                        <input type="submit" class="btn btn-success" value="Get Full Name" />
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php include 'includes/footer.php' ?>
