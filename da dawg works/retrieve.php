<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style_r.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <title>Submit Form</title>

</head>
<body>
    <div class="container">
        <header>Retrieve Form</header>

        <form action="formconnect.php" action="post">
            <div class="first">
                <div class="details">
                    <span class="title">Retrieve Subject's Details</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Retrieve Subject's Name</label>
                            <input type="text" placeholder="Enter Name" id="FObjectName" name="FObjectName" required>
                        </div>
                        <div class="input-field">
                            <label>Date the Subject Found</label>
                            <input type="date" placeholder="Enter Date" id="FDate" name="FDate" required>
                        </div>
                        <div class="input-field">
                            <label>Retrieve Subject's Location/Place</label>
                            <input type="text" placeholder="Enter Location/Place" id="FLocation" name="FLocation" required>
                        </div>
                        <div class="input-field">
                            <label>Contact Number</label>
                            <input type="number" placeholder="Enter Contact Number" id="FContact" name="FContact" required>
                        </div>
                        <div class="input-field">
                            <label>Email</label>
                            <input type="text" placeholder="Enter Email" id="FEmail" id="FEmail" name="FEmail" required>
                        </div>
                        <div class="input-field">
                            <label>Retrieve Subject's category</label>
                            <select name="FCategory" id="FCategory" required>
                                <option value="device">Device</option>
                                <option value="object">Object</option>
                                <option value="animal">Animal</option>
                                <option value="person">Person</option>
                              </select>
                        </div>
                        <div class="desc">
                            <label>Retrieve Subject's Description:</label>
                            <input type="text" placeholder="Enter Description" id="FNote" name="FNote" required>
                        </div>
                        <div class="desc1">
                            <label>Retrieve Subject's Photo:</label>
                            <input id="desc1" type="file" placeholder="Upload Photo">
                        </div>
                    </div>

                    <button >
                        <span class="btnText" name="retrieve-submit">Submit</span>
                        <i class="uil uil-navigator"></i>
                    </button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>