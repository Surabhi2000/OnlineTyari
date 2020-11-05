<?php
include 'header.php';
include 'connect.php';
include 'link.php';
?>
<div class="background">
    <div class=" layer">
        <div class="jumbotron" style="height: auto; width: 650px;justify-content: center; margin: 20px auto; 
             background-color:#e0e0e0;border-radius:  40px; opacity: 1;">
            <div class="panel">
                <div class="panel-heading">
                    <h2>OnlineTyari Franchisee Enquiry Form</h2>
                </div>
                <div class="panel-body">
                    <form name="f" form action="" method="post" >
                        <div class="container">
                            <div class="form-group">
                                <br>
                                <label for="mail">Email address</label><br>
                                <input type="email" class="form-control" id="mail" 
                                       name="mail" onfocus="this.value = ''" value="Enter email" required>
                                <small id="emailHelp" class="form-text text-muted">
                                    We'll never share your email with anyone else.
                                </small>
                            </div>
                            <div class="form-group">
                                <label for="name">Name</label><br>
                                <input type="text" class="form-control" id="name" 
                                       name="name" onfocus="this.value = ''" value="Enter Name" required>
                            </div>
                            <div class="form-group">
                                <label for="number">Phone Number</label><br>
                                <input type="number" class="form-control" id="number" 
                                       name="number" onfocus="this.value = ''" value="Enter Phone Number" required>
                            </div>
                            <div class="form-group">
                                <label for="city">City</label><br>
                                <input type="text" class="form-control" id="city" 
                                       name="city" onfocus="this.value = ''" value="Enter City" required>
                            </div>
                            <div class="form-group">
                                <label for="state">State</label><br>
                                <input type="text" class="form-control" id="state" 
                                       name="state" onfocus="this.value = ''" value="Enter City" required>
                            </div>
                            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include 'footer.php';
?>
