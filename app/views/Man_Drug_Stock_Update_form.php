<?php require_once ($_SERVER['DOCUMENT_ROOT']."/mvcfinal/app/config/config.php");?>
<?php require_once($_SERVER['DOCUMENT_ROOT']."/mvcfinal/app/includes/Man_header.php");?>

<div class="wrapper">
        <div class="row">
            <div class="col-3 col-m-6 col-sm-6">
                <div class="notification">
                    <h3>100+</h3>
                    <p>To do</p>
                </div>
            </div>
            <div class="col-3 col-m-6 col-sm-6">
                <div class="notification">
                    <h3>100+</h3>
                    <p>In progress</p>
                </div>
            </div>
            <div class="col-3 col-m-6 col-sm-6">
                <div class="notification">
                    <h3>100+</h3>
                    <p>Completed</p>
                </div>
            </div>
            <div class="col-3 col-m-6 col-sm-6">
                <div class="notification">
                    <h3>100+</h3>
                    <p>Issues</p>
                </div>
            </div>
        </div>


        <div class="card">

        <form action="<?php echo URLROOT; ?>/Man_adddrug/updatedrugs/<?php echo $data['drug']->medicineId ?>" method="POST">
 
<div class="container">
   <h1>Update Drug Details</h1>
    <hr>
     <label for="name"><b>Generic Name</b></label>
    <input type="text" placeholder="Enter Generic Name" name="name" id="name" value = "<?php echo $data['drug']->name ?>"required>
    <label for="name"><b>Brand Name</b></label>
    <input type="text" placeholder="Enter Brand Name" name="brand" id="brand" value = "<?php echo $data['drug']->brand ?>" required>
    <label for="description"><b>Description</b></label>
    <input type="text" placeholder="Enter Description" name="description" id="description" value = "<?php echo $data['drug']->description ?>" required>
    <label for="QTY"><b>QTY</b></label>
    <input type="text" placeholder="Enter QTY" name="QTY" id="QTY" value = "<?php echo $data['drug']->QTY ?>" required>
    <label for="price"><b>Price</b></label>
    <input type="price" placeholder="Enter price" name="price" id="price" value = "<?php echo $data['drug']->price ?>" required>
    <label for="Date"><b>Expiration Date</b></label>
    <input type="Date" placeholder="Enter Expiration Date" name="EXP" id="EXP" value = "<?php echo $data['drug']->EXP ?>" required>
    <label for="Date"><b>Manufacture Date</b></label>
    <input type="Date" placeholder="Enter Manufacture Date" name="MFD" id="MFD" value = "<?php echo $data['drug']->MFD ?>" required>
    <label for="Dose"><b>Category</b></label>
    <input type="text" placeholder="Enter Category" name="category" id="category" value = "<?php echo $data['drug']->category ?>" required>
    <label for="Dose"><b>Dose</b></label>
    <input type="text" placeholder="Enter Dose" name="dose" id="dose" value = "<?php echo $data['drug']->dose ?>" required>
    <label for="tempurature"><b>Tempurature</b></label>
    <input type="text" placeholder="Enter Tempurature" name="temperature" id="temperature" value = "<?php echo $data['drug']->temperature ?>" required>
   

    <button type="submit" class="registerbtn">Update</button>
      
  </div>
  
  
</form>



        </div><!--buttons-->

<?php require_once($_SERVER['DOCUMENT_ROOT']."/mvcfinal/app/includes/Man_footer.php");?>