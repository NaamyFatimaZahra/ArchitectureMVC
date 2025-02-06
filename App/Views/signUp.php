<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <script src="https://cdn.tailwindcss.com"></script>

 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <title>YOUDEMY</title>
</head>
<body class="w-[100%] text-[#595959]">
   
 
    <section  class=" h-[100vh] w-[100%] flex items-center justify-center">
     
        <!-- Right Section -->
        <div class="w-[30%] flex items-center justify-center p-8 bg-white border-0  shadow-2xl sm:rounded-3xl">
            <div class=" max-w-md">
                <!-- Sign Up Form -->
                <form name="userForm" class="space-y-4" action="../../Controllers/CatchController/catchInfoSignUp.php" method="POST" onsubmit="return validateForm()">
                    <div>
                        <label for='username' class="block text-sm font-medium text-gray-700 mb-1">Full name</label>
                        <input id="username" name="username" type="text" placeholder="Enter your full name" class="w-full p-3 border rounded-lg focus:outline-solid focus:outline-[1rem] focus:outline-[#97b6e7] "/>
                    </div> 
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Email Address</label>
                        <input type="email" name="email" placeholder="Enter email address" class="w-full p-3 border rounded-lg focus:outline-solid focus:outline-[1rem] focus:outline-[#97b6e7] "/>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                        <input type="password" name="password" placeholder="Enter password" class="w-full p-3 border rounded-lg focus:outline-solid focus:outline-[1rem] focus:outline-[#97b6e7] "/>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Confirm Password</label>
                        <input type="password" name="password_copy" placeholder="Confirm password " class="w-full p-3 border rounded-lg focus:outline-solid focus:outline-[1rem] focus:outline-[#97b6e7] "/>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Account Type</label>
                        <select name="account_type" class="w-full p-3 border rounded-lg focus:outline-solid focus:outline-[1rem] focus:outline-[#97b6e7] ">
                            <option value="" selected>Select option</option>
                            <option value="student">Student</option>
                            <option value="teacher">Teacher</option>
                        </select>
                    </div>

                    <input name="submit" type="submit" value="Submit" class="w-full bg-[#f97316] text-white rounded-lg p-3 hover:bg-indigo-700"/>

                    <div class="text-sm text-center">
                        <span class="text-gray-500">Already have an account? </span>
                        <a href="../Auth/login.php" class="text-indigo-600 font-medium">Login</a>
                    </div>

                    <div class="text-xs text-gray-500 text-center">
                        By clicking 'Continue', you acknowledge that you have read and accept the 
                        <a href="#" class="text-indigo-600">Terms of Service</a> and 
                        <a href="#" class="text-indigo-600">Privacy Policy</a>.
                    </div>
                </form>
            </div>
        </div>
            </section>
     <script>
        function validateForm() {
            const username = document.forms["userForm"]["username"].value;
            const email = document.forms["userForm"]["email"].value;
            const password = document.forms["userForm"]["password_copy"].value;
            const password_copy = document.forms["userForm"]["password"].value;
            const accountType = document.forms["userForm"]["account_type"].value;

            const messageDiv = document.getElementById("message");
            if (!username || !email || !password || !password_copy || !accountType) {
                messageDiv.innerHTML = "Tous les champs sont obligatoires !";
                messageDiv.style.display = "block"; 
                setTimeout(() => { 
                    messageDiv.style.display = "none";
                }, 3000); 
                return false; 
            }
            return true;
        }
         setTimeout(function() {
            document.getElementById('error-message').style.display = 'none';
        }, 4000);
    </script>




</body>
</html>