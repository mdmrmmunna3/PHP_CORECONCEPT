

<?php 

// array merage
$array1 = ["A","B","C"];
$array2 = ["X","Y","Z"];

echo json_encode(array_merge($array1,$array2)) ;

$arrayPop = array_pop($array1);
echo "<br>";
echo json_encode("ArrayPop:".$arrayPop);
echo "<br>";

$arrayPush = array_push($array2, "M");
echo "<br>";

echo json_encode("ArrayPush:".$arrayPush);
echo "<br>";
echo "<br>";

echo "ArrayPush: ";
echo json_encode($array2);
echo "<br>";
echo "<br>";

$arrayReverse = array_reverse($array2);
echo "ArrayReverse: ";
echo json_encode($arrayReverse);
echo "<br>";
echo "<br>";

// array unique
$array3 = ["A", "B", "B", "A","C","A","B","C","C","X","Y","Z"];
$arrayUnique = array_unique($array3);
echo "Array Unique: ";
echo json_encode($arrayUnique);
echo "<br>";
echo "<br>";

// array occurance 
$arrayOccurance = array_count_values($array3);
echo "Array Occurance: ";
echo json_encode($arrayOccurance);
?>

<?php 
echo <<<form

<body style="font-family: Arial, sans-serif; background-color: #f4f4f9; margin: 0; padding: 0;">

    <div style="width: 40%; margin: 50px auto; padding: 30px; background-color: #fff; border-radius: 8px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);">
        <h2 style="text-align: center; color: #333;">User Information Form</h2>
        <form action="#" method="POST">
            <!-- Name -->
            <div style="margin-bottom: 20px;">
                <label for="name" style="font-size: 14px; color: #555; display: block; margin-bottom: 5px;">Full Name</label>
                <input type="text" id="name" name="name" placeholder="Enter your full name" required 
                    style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px; font-size: 14px;">
            </div>

            <!-- Email -->
            <div style="margin-bottom: 20px;">
                <label for="email" style="font-size: 14px; color: #555; display: block; margin-bottom: 5px;">Email Address</label>
                <input type="email" id="email" name="email" placeholder="Enter your email" required 
                    style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px; font-size: 14px;">
            </div>

            <!-- Phone -->
            <div style="margin-bottom: 20px;">
                <label for="phone" style="font-size: 14px; color: #555; display: block; margin-bottom: 5px;">Phone Number</label>
                <input type="tel" id="phone" name="phone" placeholder="Enter your phone number" required 
                    style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px; font-size: 14px;">
            </div>

            <!-- Date of Birth -->
            <div style="margin-bottom: 20px;">
                <label for="dob" style="font-size: 14px; color: #555; display: block; margin-bottom: 5px;">Date of Birth</label>
                <input type="date" id="dob" name="dob" required 
                    style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px; font-size: 14px;">
            </div>

            <!-- Gender -->
            <div style="margin-bottom: 20px; display: flex; align-items: center; gap: 20px;">
                <label style="font-size: 14px; color: #555; margin-bottom: 0;">Gender</label>
                <div>
                    <input type="radio" id="male" name="gender" value="Male" required>
                    <label for="male" style="margin-bottom: 0;">Male</label>
                </div>
                <div>
                    <input type="radio" id="female" name="gender" value="Female">
                    <label for="female" style="margin-bottom: 0;">Female</label>
                </div>
                <div>
                    <input type="radio" id="other" name="gender" value="Other">
                    <label for="other" style="margin-bottom: 0;">Other</label>
                </div>
            </div>

            <!-- Address -->
            <div style="margin-bottom: 20px;">
                <label for="address" style="font-size: 14px; color: #555; display: block; margin-bottom: 5px;">Address</label>
                <textarea id="address" name="address" placeholder="Enter your address" required 
                    style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px; font-size: 14px; resize: vertical; height: 100px;"></textarea>
            </div>

            <!-- Country -->
            <div style="margin-bottom: 20px;">
                <label for="country" style="font-size: 14px; color: #555; display: block; margin-bottom: 5px;">Country</label>
                <select id="country" name="country" required 
                    style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px; font-size: 14px;">
                    <option value="">Select your country</option>
                    <option value="USA">USA</option>
                    <option value="Canada">Canada</option>
                    <option value="UK">UK</option>
                    <option value="Australia">Australia</option>
                    <option value="India">India</option>
                </select>
            </div>

            <!-- Submit Button -->
            <button type="submit" style="background-color: #4CAF50; color: white; border: none; padding: 10px 20px; font-size: 16px; cursor: pointer; border-radius: 4px; width: 100%;">Submit</button>
        </form>
    </div>

    <div style="text-align: center; margin-top: 30px;">
        <p>&copy; 2024 Your Company Name</p>
    </div>

</body>

form;
?>