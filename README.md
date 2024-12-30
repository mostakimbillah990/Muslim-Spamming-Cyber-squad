<html lang="bn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            background-color: white; /* ব্যাকগ্রাউন্ড সাদা */
            color: black; /* লেখার রঙ কালো */
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box; /* বর্ডারের জন্য অতিরিক্ত মার্জিন প্রভাবিত না হবে */
        }
        .sidebar {
            height: 100%;
            width: 0;
            position: fixed;
            top: 0;
            left: 0;
            overflow-x: hidden;
            transition: 0.5s;
            padding-top: 60px;
            background-color: black; /* সাইডবার ব্যাকগ্রাউন্ড কালো */
        }
        .sidebar a {
            padding: 10px 15px;
            text-decoration: none;
            font-size: 20px;
            color: white; /* সাইডবারের টেক্সট সাদা */
            display: block;
            transition: 0.3s;
        }
        .sidebar a:hover {
            color: red;
        }
        .closebtn {
            position: absolute;
            top: 0;
            right: 25px;
            font-size: 36px;
            margin-left: 50px;
            color: black; /* ক্লোজ বাটনের রঙ কালো */
        }
        .openbtn {
            font-size: 30px;
            cursor: pointer;
            background: none;
            color: black; /* ওপেন বাটনের রঙ কালো */
            padding: 10px 15px;
            border: none;
            position: fixed;
            top: 20px;
            left: 5px; /* বাম দিকে সরানো হয়েছে */
        }
        .openbtn:hover {
            color: orange;
        }
        main {
            margin-left: 50px;
            padding: 16px;
        }
        h1, p {
            text-align: center;
        }
        h1 {
            color: blue;
            text-align: center;
            background: linear-gradient(to right, red, orange); /* গ্রেডিয়েন্ট ব্যাকগ্রাউন্ড */
            padding: 10px; /* প্যাডিং */
            border-radius: 10px; /* গোলাকার প্রান্ত */
        }
       h2 {
            font-size: 25px;
            color: white; /* টেক্সট কালার সাদা */
            background-color: rgba(0, 0, 0, 0.7); /* অস্বচ্ছ কালো ব্যাকগ্রাউন্ড */
            text-align: center; /* টেক্সট সেন্টার */
            padding: 10px;
            border-radius: 10px; /* গোলাকার প্রান্ত */
            width: 420px; /* প্রস্থ নির্ধারণ */
            margin: 20px auto; /* সেন্টার করার জন্য */
        }
        p {
            color: black;
            font-family: "Arial", sans-serif;
            text-align: center; /* প্যারাগ্রাফ সেন্টার */
            background-color: white; /* অস্বচ্ছ সাদা ব্যাকগ্রাউন্ড */
            padding: 10px; /* প্যাডিং */
            border-radius: 10px; /* গোলাকার প্রান্ত */
            margin: 10px 0; /* মার্জিন */
        }
        footer {
            background-color: rgba(0, 0, 0, 0.8); /* অস্বচ্ছ কালো ব্যাকগ্রাউন্ড */
            color: white; /* টেক্সট কালার সাদা */
            text-align: center; /* টেক্সট সেন্টার */
            padding: 10px; /* প্যাডিং */
            border-radius: 10px; /* গোলাকার প্রান্ত */
            position: relative;
            bottom: 0;
            width: 100%;
        }
        img {
            width: 100px; /* ইমেজের প্রস্থ */
            height: 100px; /* ইমেজের উচ্চতা */
            border-radius: 50%; /* গোলাকার ইমেজ */
            display: block;
            margin: 0 auto; /* সেন্টার করার জন্য */
        }
    </style>
</head>
<body>

<!-- Sidebar -->
<div id="mySidebar" class="sidebar">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
    <a href="#about">MSCS কি </a>
    <a href="#service">আমাদের সেবা </a>
    <a href="#contract">কন্ট্রাক্ট</a>
    <a href="mscstools.html" target="_blank">MSCS টুলস</a>
  
   <a href="crew.admison.html"> অ্যাডমিশন </a>
   <a href="Pasword.html">_____</a>
</div>

<!-- Main content -->
<button class="openbtn" onclick="openNav()">☰ </button>

<img src="https://firebasestorage.googleapis.com/v0/b/smm-penel-be4bc.appspot.com/o/image%2F1000014504.png?alt=media&token=8434f546-cfd6-4bc3-a4c0-8c7c02f7c1c4" alt="মুসলিম সাইবার স্কোয়াড">
<marquee direction="center" behavior="scroll"> 
    ! আস্সালামুআলাইকুম! মুসলিম স্পমিং সাইবার স্কোয়াড এর অফিসিয়াল ওয়েবসাইটে আপনাকে স্বাগতম
</marquee>

<h1 id="about">MSCS কি</h1>
<p>মুসলিম স্পমিং সাইবার স্কোয়াড একটি সোশ্যাল মিডিয়া এক্সপার্ট টিম। মুসলিম স্পমিং সাইবার স্কোয়াড ফেইসবুক, ইনস্টাগ্রাম, হোয়াটসঅ্যাপ এবং অন্যান্য সোশ্যাল প্ল্যাটফর্মে সমস্যা সমাধান করে। এর মূল লক্ষ্য ধর্ম বিরোধী, নাস্তিক, এবং দেশদ্রোহী কার্যক্রম প্রতিরোধ করা।</p>

<h2 id="service">আমাদের সেবা</h2>
<ul type="A">
    <li>ফেইসবুক একাউন্ট রিমোভ</li>
    <li>ফেইসবুক বেন একাউন্ট ব্যাক</li>
    <li>ফেইসবুক লক একাউন্ট আনলক</li>
    <li>ফেইসবুক ব্লু ভেরিফাই</li>
    <li>ফেইসবুক হ্যাক একাউন্ট ব্যাক</li>
    <li>ফেইসবুক হ্যারাসমেন্ট প্রবলেম সলভ</li>
    <li>বিশেষ করে কোন নাস্তিক আমাদের হাত থেকে ইনশাআল্লাহ রক্ষা পাবে না</li>
    <li>যে কোনো একাউন্ট যেটা বাংলাদেশ এবং মুসলিমদের নিয়ে কোনো অনৈতিক কিছু শেয়ার করলে ইনশাআল্লাহ MSCS এর মেম্বারদের থেকে রক্ষা পাবে না</li>
</ul>

<h2 id="contract">কন্টাক্ট</h2>
<center> 
    <table>
        <tr>
            <td> 
                <a href="https://www.facebook.com/MSCS.PublicHelpCentre">
                    <img src="https://firebasestorage.googleapis.com/v0/b/smm-penel-be4bc.appspot.com/o/image%2F1000028126.png?alt=media&token=681ad440-e02d-4e41-80a8-c69a270f1d08" alt="MSCS HELP CENTRE">
                    MSCS HELP CENTRE
                </a>
            </td>
        </tr>
    </table>
</center>

<footer>Copyright &copy; MUSLIM SPAMMING & CYBER SQUAD</footer>

<script>
    function openNav() {
        document.getElementById("mySidebar").style.width = "250px";
    }

    function closeNav() {
        document.getElementById("mySidebar").style.width = "0";
    }
</script>

</body>
</html>
