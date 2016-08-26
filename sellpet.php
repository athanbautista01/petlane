        <?php
            include("include/requiredLogin.php");
            //Connect to MySQL
            require_once("database/connect.php");
            //include the header
            $title="Pet Lane | Sell Pet";
            include("include/header.php");
        ?>

        <section>
            <div class="container">
                <div class="col-lg-12 heading text-center">
                    <h2>Sell Pet</h2>
                </div>


                <div class="row">
                    <div class="col-sm-12">
                        <ol class="breadcrumb">
                            <li><a href="profile.php">My Account</a></li>
                            <li class="active">Sell Pet</a></li>
                        </ol>
                        <div class="panel panel-success">
                            <div class="panel-heading">
                                Pet Information
                            </div>
                            <div class="panel-body">
                                <br>
                                <form action="include/uploadPet.php" method="post" enctype="multipart/form-data">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label col-lg-4">Category</label>
                                                            <div class="col-lg-8">
                                                                <select name="category" type="text" size="" required class="input form-control">
                                                                    <option value="" style="display:none;">Select pet category</option>
                                                                    <?php
                                                                        //Build the query to use to fetch records
                                                                        $query = "SELECT CategoryID, Category FROM petcategory";
                                                                        
                                                                        $result = $conn->query($query); 
                                                                        if ($conn->error) {
                                                                        die("Query failed: " . $conn->error);
                                                                        }
                                                                        
                                                                        //If there are records fetched, iterate through the data set
                                                                        if ($result->num_rows) {    
                                                                        while ($row = mysqli_fetch_assoc($result)) {
                                                                        echo "<option value=".$row["CategoryID"].">".$row["Category"]."</option>";
                                                                        }}
                                                                    ?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-lg-4">Breed</label>
                                                            <div class="col-lg-8">
                                                                <input type="text" name="breed" size="30" required placeholder="Enter breed of your pet" class="input form-control" />
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-lg-4">StatusID</label>
                                                            <div class="col-lg-8">
                                                                <select type="text" name="status" size="" required class="input form-control">
                                                                    <option value="" style="display:none;">Select status</option>
                                                                    <?php
                                                                        //Build the query to use to fetch records
                                                                        $query = "SELECT StatusID, Status FROM petstatus";
                                                                        
                                                                        $result = $conn->query($query); 
                                                                        if ($conn->error) {
                                                                        die("Query failed: " . $conn->error);
                                                                        }
                                                                        
                                                                        //If there are records fetched, iterate through the data set
                                                                        if ($result->num_rows) {    
                                                                        while ($row = mysqli_fetch_assoc($result)) {
                                                                        echo "<option value=".$row["StatusID"].">".$row["Status"]."</option>";
                                                                        }}
                                                                    ?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-lg-4">Given Name</label>
                                                            <div class="col-lg-8">
                                                                <input type="text" name="name" size="30" placeholder="Enter pet name" class="input form-control" />
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="form-group">
                                                            <label class="control-label col-lg-4">Birthdate</label>
                                                            <div class="col-lg-8">
                                                                <input type="date" name="birthdate" size="30" required placeholder="Enter pet birthday" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-lg-4">Reason For Selling</label>
                                                            <div class="col-lg-8">
                                                                <textarea class="input form-control" rows="1" type="text" name="reason" required placeholder="Enter reason for selling" class="input form-control"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label col-lg-4">Price</label>
                                                            <div class="col-lg-8">
                                                                <input type="number" name="price" min="1" required placeholder="Enter price of your pet" class="input form-control" />
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-lg-4">Quantity</label>
                                                            <div class="col-lg-8">
                                                                <input type="number" name="quantity" min="1" required placeholder="Enter quantity of your pet/s" class="input form-control" />
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-lg-4">Description</label>
                                                            <div class="col-lg-8">
                                                                <textarea class="input form-control" rows="1" type="text" name="description" required placeholder="Enter description of your pet" class="input form-control"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-lg-4">Image</label>
                                                            <div class="col-lg-8">
                                                                <input class="form-control input" required type="file" name="image" id="image" />
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-lg-4">Addntl. Image</label>
                                                            <div class="col-lg-8">
                                                                <input class="form-control input" type="file" name="image2" id="image2" />
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-lg-4">Addntl. Image</label>
                                                            <div class="col-lg-8">
                                                                <input class="form-control input" type="file" name="image3" id="image3" /s>
                                                            </div>
                                                        </div>
                                                        <br>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <hr>
                                                        <center>
                                                            <div class="form-group">
                                                                <input type="submit" name="submitAdd" value="Sell Pet" class="btn btn-outline" />
                                                                <a class="btn btn-outline" href="index.php">Cancel</a>
                                                            </div>
                                                        </center>
                                                    </div>
                                        </form>
                            </div>
                        </div>
        </section>
        <?php
            include("html/footer.html");
        ?>
