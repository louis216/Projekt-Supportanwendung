<?php include('header.php'); ?>
  
    <div class="content">
	<h1>Willkommen im Helpdesk Dashboard</h1>
	<h2>Was wollen Sie tun?</h2>
<div style="width:98%; padding:1%; background:#eee;position:relative;" >	
<!-- div container mit symbolen zu den verschiedenen Seiten--> 
        <div class="options">
		<a href="logout.php">
			<h3>ausloggen</h3>
			<img src="../images/ticket-purchase.jpg" alt="Logout Symbolbild">
		</a>
	</div>
        <div class="options">
		<a href="ticket-einreichen.php">
		<h3>Ticket einreichen</h3>	
			<img src="../images/ticket-purchase.jpg" alt="Ticket einreichen Symbolbild">
		</a>
	</div>
        <div class="options">
			<a href="meine-tickets.php">
			<h3>Meine Tickets</h3>	
				<img src="../images/ticket-purchase.jpg" alt="Ticket Symbolbild">
			</a>
		</div>
        <div class="options">
			<a href="mein-account.php">
			<h3>Meine account</h3>
				<img src="../images/ticket-purchase.jpg" alt="Account Symbolbild">
			</a>	
		</div>


    </div>      

</div>
<?php include('footer.php'); ?>