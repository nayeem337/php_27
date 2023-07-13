<?php include 'includes/header.php' ?>
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-center">Calculator</h2>
                    </div>
                    <div class="card-body">
                        <form action="action.php?page=calculator-result" method="post">
                            <div class="row mt-3">
                                <label class="col-md-4">First Number</label>
                                <div class="col-md-8">
                                    <input type="number" name="first_number" class="form-control" />
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label class="col-md-4">Last Number</label>
                                <div class="col-md-8">
                                    <input type="number" name="last_number" class="form-control" />
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label class="col-md-4">Operator</label>
                                <div class="col-md-8">
                                    <label><input type="radio" name="operator" checked value="+"> +</label>
                                    <label><input type="radio" name="operator" value="-"> -</label>
                                    <label><input type="radio" name="operator" value="*"> *</label>
                                    <label><input type="radio" name="operator" value="/"> /</label>
                                    <label><input type="radio" name="operator" value="%"> %</label>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label class="col-md-4">Result</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" value="<?php echo isset($result) ? $result : '' ?>"/>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label class="col-md-4"></label>
                                <div class="col-md-8">
                                    <input type="submit" class="btn btn-success" value="Get Result" />
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
