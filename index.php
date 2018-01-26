<?php
?>
<head>
    <title>OSCAR Booking System</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<script src="jquery-3.3.1.min.js"></script>
<script src="functions.js"></script>

<form>
    <h3>Child Information</h3>
    First name:<br>
    <input type="text" name="firstname"><br>
    Last name:<br>
    <input type="text" name="lastname"><br>
    <h3>Contact Information</h3>
    Email:<br>
    <input type="email" name="email"><br>
    Home Phone:<br>
    <input type="tel" name="home_phone"><br>
    Cellphone:<br>
    <input type="tel" name="cell_phone"><br>
    <h3>Booking Information</h3>
    <input type="radio" name="booking_type" value="casual">Casual<br>
    <input type="radio" name="booking_type" value="perm">Permanent<br>
    <input type="radio" name="booking_type" value="holidays">Holidays<br>
    <div id="casual" class="invisible">
        Date:<br>
        <input type="date" name="casual_date">
    </div>
    <div id="perm" class="invisible">
        Date:<br>
        <input type="date" name="perm_date">
    </div>
    <div id="holidays" class="invisible">
        Date:<br>
        <input type="date" name="holidays_date">
    </div>
    <input type="submit" value="Submit">
</form>

