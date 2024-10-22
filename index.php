<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Danger Bomber</title>
<style>
  body {
    background-color: black;
    color: white;
    font-family: Arial, sans-serif;
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100vh;
    margin: 0;
  }
  .container {
    background: #333;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0,0,0,0.5);
    text-align: center;
    max-width: 300px;
  }
  .logo {
    width: 100px;
    height: 100px;
    border-radius: 50%;
    margin-bottom: 10px;
  }
  input, button, #processingForm {
    width: 100%;
    padding: 10px;
    margin-top: 10px;
    border-radius: 5px;
    border: none;
  }
  #processingForm {
    display: none;
    width: auto;
  }
  button {
    display: block;
    background-color: #ffdd00;
    color: black;
    font-size: 16px;
    cursor: pointer;
  }
  button:hover {
    background-color: #ccaa00;
  }
  #statusMessage {
    color: #ffdd00;
    margin-top: 10px;
  }
</style>
</head>
<body>
<div class="container">
  <img class="logo" src="https://firebasestorage.googleapis.com/v0/b/smm-penel-be4bc.appspot.com/o/image%2F1000014504.png?alt=media&token=737b9aee-f5cb-4c68-a5ad-b800f0694c62" alt="Team Logo">
  <h2>Welcome To MSCS SMS BOMBER!</h2>
  <p>Enter Phone Number:</p>
  <form id="bombingForm" method="POST" action="bombing.php">
    <input type="text" id="phoneNumber" name="phoneNumber" placeholder="01xxx" required>
    <button type="submit">START BOMBING</button>
    <div id="processingForm">Processing...</div>
    <p id="statusMessage"></p>
  </form>
</div>

<script>
  const form = document.getElementById('bombingForm');
  form.addEventListener('submit', function(event) {
    document.getElementById('processingForm').style.display = 'block'; // Show processing message
  });
</script>

</body>
</html>
