<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style_s.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <title>Submit Form</title>

</head>
<body>
    <div class="container">
        <header>Submit Form</header>

        <form action="connect.php" method="post">
            <div class="first">
                <div class="details">
                    <span class="title">Lost Subject's Details</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Lost Subject's Name</label>
                            <input type="text" placeholder="Enter Name" id="ObjectName" name="ObjectName" required>
                        </div>
                        <div class="input-field">
                            <label>Date the Subject Lost</label>
                            <input type="date" placeholder="Enter Date" id="Date" name="Date" required>
                        </div>
                        <div class="input-field">
                            <label>Lost Subject's Location/Place</label>
                            <input type="text" placeholder="Enter Location/Place" id="Location" name="Location" required>
                        </div>
                        <div class="input-field">
                            <label>Contact Number</label>
                            <input type="number" placeholder="Enter Contact Number" id="Contact" name="Contact" required>
                        </div>
                        <div class="input-field">
                            <label>Email</label>
                            <input type="text" placeholder="Enter Email" id="Email" name="Email" required>
                        </div>
                        <div class="input-field">
                            <label>Subject's category</label>
                            <select name="Category" required>    
                                <option value="Devices"  id="Device">Devices</option>
                                <option value="Objects"  id="Object">Objects</option>
                                <option value="Animals"  id="Device">Animals</option>
                                <option value="Person"  id="Person">Person</option>
                              </select>
                        </div>
                        <div class="desc">
                            <label>Subject's Description:</label>
                            <input type="text" placeholder="Enter Description" id="Note" name="Note" required>
                        </div>
                        <div class="desc1">
                            <label>Subject's Photo:</label>
                            <input  type="file" placeholder="Upload Photo" id="desc1" name="Image" >
                        </div>
                    </div>

                    <button>
                        <input class="btnText" name="found-submit">Submit
                        <i class="uil uil-navigator"></i>
                    </button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>