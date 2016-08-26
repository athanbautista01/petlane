<?php
require_once("../database/connect.php");
if($_POST)
{
    
    $q = mysqli_real_escape_string($conn,$_POST['search']);
    //users
    $strSQL_ResultUsers = mysqli_query($conn,"SELECT userid, lastname, firstname, address, photo, contactno, AdditionalInfo from user where LastName like '%$q%' or FirstName like '%$q%' or Address like '%$q%' or contactno like '%$q%' or additionalinfo like '%$q%' order by userid limit 10;");
    while($row=mysqli_fetch_array($strSQL_ResultUsers))
    {
        $userid = $row['userid'];
        $lastname   = $row['lastname'];
        $firstname   = $row['firstname'];
        $photo = $row['photo'];
        $address   = $row['address'];
        $contactno   = $row['contactno'];
        // $additionalinfo = $row['additionalinfo'];
        
        $b_lastname = '<strong>'.$q.'</strong>';
        $b_firstname = '<strong>'.$q.'</strong>';
        $b_address = '<strong>'.$q.'</strong>';
        $b_contactno = '<strong>'.$q.'</strong>';
        $b_additionalinfo = '<strong>'.$q.'</strong>';

        $final_lastname = str_ireplace($q, $b_lastname, $lastname);
        $final_firstname = str_ireplace($q, $b_firstname, $firstname);
        $final_address = str_ireplace($q, $b_address, $address);
        $final_contactno = str_ireplace($q, $b_contactno, $contactno);
        //$final_additionalinfo = str_ireplace($q, $b_additionalinfo, $additionalinfo);
        ?>
            <div class="show" align="left">
                <img src="../<?php echo $photo; ?>" style="width:50px; height:50px; float:left; margin-right:6px;" />
                <span class="name"><?php echo $final_lastname; ?>, <span class="name"><?php echo $final_firstname; ?></span>&nbsp;<br/><?php echo $final_address; ?><br/>
            </div>
        <?php
    }

    //pets
    $strSQL_ResultPets = mysqli_query($conn,"SELECT a.PetID, a.CategoryID, a.Breed, a.Price, a.Available, PetBirthdate, a.Description, a.StatusID, a.UserID, 
                        a.PetName, a.Quantity, a.Reason, a.DateSold, a.Image, a.Image2, a.Image3, a.IsFeatured, b.CategoryID, 
                        b.Category, c.StatusID, c.Status FROM pet a INNER JOIN petcategory b ON a.CategoryID = b.CategoryID 
                        INNER JOIN petstatus c ON a.StatusID = c.StatusID  WHERE  
                        b.category like '%$q%' or c.status like '%$q%' or a.petname like '%$q%' or a.breed like '%$q%' 
                        or a.price like '%$q%' or a.description like '%$q%' order by a.petid limit 10;");
    while($row=mysqli_fetch_array($strSQL_ResultPets))
    {

        $petid = $row['PetID'];
        $petimage = $row['Image'];

        $petcategory = $row['Category'];
        $breed = $row['Breed'];
        $petprice = $row['Price'];
        $petdescription = $row['Description'];
        $petname = $row['PetName'];
        $status = $row['Status'];
        

        $b_petcategory = '<strong>'.$q.'</strong>';
        $b_petname = '<strong>'.$q.'</strong>';
        $b_petprice = '<strong>'.$q.'</strong>';
        $b_petdescription = '<strong>'.$q.'</strong>';
        $b_breed = '<strong>'.$q.'</strong>';
        $b_status = '<strong>'.$q.'</strong>';

        $final_petname = str_ireplace($q, $b_petname, $petname);
        $final_petcategory = str_ireplace($q, $b_petcategory, $petcategory);        
        $final_petprice = str_ireplace($q, $b_petprice, $petprice);
        //optional?
        $final_petdescription = str_ireplace($q, $b_petdescription, $petdescription);
        $final_breed = str_ireplace($q, $b_breed, $breed);
        $final_status = str_ireplace($q, $b_status, $status);

        

        ?>
            <div class="show" align="left">
                <!-- <img src="27301_312848892150607_553904419_n.jpg" style="width:50px; height:50px; float:left; margin-right:6px;" /> -->
                <img class="img-responsive" style="width:50px; height:50px; float:left; margin-right:6px;" src="../<?php echo $row['Image'] ?>" alt="">
                <span class="name"><?php echo $final_breed; ?>(<span class="name"><?php echo $final_petcategory; ?>: <span class="name"><?php echo $final_petname; ?>) - <span class="name"><?php echo "Php ".$final_petprice; ?></span>&nbsp;<br/><span class="name">(<?php echo $final_status; ?>)</span><br/>
            </div>
        <?php
    }

    //shop
    //$strSQL_ResultShop = mysqli_query($conn,"SELECT productid, petname, categoryid, description, price, image from shop where category like '%$q%' or name like '%$q%'  or price like '%$q%' or description like '%$q%' order by productid limit 10;");
    $strSQL_ResultShop = mysqli_query($conn,"SELECT a.SuppliesID, a.CategoryID, a.ProductName, a.SuppliesCat, a.Brand, a.Price, a.Available, a.Description, a.Image2, a.Image3, a.Image, a.IsFeatured, b.CategoryID, b.Category FROM petsupplies a INNER JOIN petcategory b ON a.CategoryID = b.CategoryID WHERE 
    b.category like '%$q%' or a.productname like '%$q%'  or a.price like '%$q%' or a.description like '%$q%' order by a.suppliesid limit 10;");
    while($row=mysqli_fetch_array($strSQL_ResultShop))
    {

        $productid = $row['SuppliesID'];
        $productimage = $row['Image'];

        $productcategory = $row['Category'];
        $productname = $row['ProductName'];
        $productprice = $row['Price'];
        $productdescription = $row['Description'];

        $b_productcategory = '<strong>'.$q.'</strong>';
        $b_productname = '<strong>'.$q.'</strong>';
        $b_productprice = '<strong>'.$q.'</strong>';
        $b_productdescription = '<strong>'.$q.'</strong>';

        $final_productname = str_ireplace($q, $b_productname, $productname);
        $final_productcategory = str_ireplace($q, $b_productcategory, $productcategory);        
        $final_productprice = str_ireplace($q, $b_productprice, $productprice);
        //optional?
        $final_productdescription = str_ireplace($q, $b_productdescription, $productdescription);
        
        ?>
            <div class="show" align="left">
                <!-- <img src="27301_312848892150607_553904419_n.jpg" style="width:50px; height:50px; float:left; margin-right:6px;" /> -->
                <img class="img-responsive" style="width:50px; height:50px; float:left; margin-right:6px;" src="../<?php echo $row['Image'] ?>" alt="">
                <span class="name"><?php echo $final_productname; ?>(<span class="name"><?php echo $final_productcategory; ?>) - <span class="name"><?php echo "Php ".$final_productprice; ?></span>&nbsp;<br/><?php echo $final_productdescription; ?><br/>
            </div>
        <?php
    }
    

    
}
?>