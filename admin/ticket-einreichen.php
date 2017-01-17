<?php include('header.php'); ?>  
    <div class="content">
	<h1>Ticket einreichen</h1>
	<p>Tragen Sie bitte Ihr Problem in das Formular ein oder schauen Sie nach dem Bearbeitungsstatus ihres Problems.<br>Selbstverständlich können Sie uns auch ein Feedback zu unserem Helpdesk oder anderem geben.</p>
        
	<form id="kontakt" method="post" action="?action=eintragen">
    		<div class="hinweis">
			<h2>Allgemeine Information</h2>
    			<p>SÄmtliche Felder in dem Formular mÜssen ausgefÜllt sein.<br>    		
    			<br>Die Probleme sollten detailliert wie mÖglich dargestellt werden und die Dringlichkeit wollte ehrlich beantwortet werden, um einen reibungslosen Ablauf zu gewährleisten.<br>
			<br>Sobald der Bearbeitungsstatus ihres Problems geändert wurde, erhalten Sie automatisch eine E-Mail an die von Ihnen angegebene Adresse.</p>
		</div>
        	<fieldset>
            		<div class="inputgroup">
                		<label class="label">Gemeinde / Stadt / Organisation</label>
                		<input type="text" id="Organisation" placeholder="Gemeinde / Stadt / Organisation" name="Organisation" required value="" class="inputfield" />
            		</div>
            		<div class="inputgroup">
              			<label class="label">Antragsteller</label>
              			<input type="text" id="Antragsteller" placeholder="Vorname + Name" name="Name" required value="" class="inputfield" />
            		</div>	
            		<div class="inputgroup">
              			<label class="label">Problembeschreibung</label>
              			<textarea id="problembeschreibung" placeholder="Bitte beschreiben Sie hier ihr Problem genauer. Gerne können Sie auch beim Dateiupload ein Bild beifügen" required value="" class="inputfield" />
				</textarea>
            		</div>	
            		<div class="inputgroup">
              			<label class="label">Kategorie</label>
				<select class="inputfield" name="Kategorie">
					<option value="Software">Hardware</option>
  					<option value="Hardware">Software</option>
  					<option value="Andere">Andere</option>

				</select>
            		</div>
	
            		<div class="inputgroup">
              		<label class="label">Dringlichkeit</label><br>       
                		<input type="radio" name="Zahlart" value="niedrig" class="radioButtons" checked required>niedrig      
                		<input type="radio" name="Zahlart" value="mittel" class="radioButtons">mittel        
                		<input type="radio" name="Zahlart" value="hoch" class="radioButtons">hoch
            		</div>	    
            		<div class="inputgroup">
              		<label class="label"><a href="http://www.kletterwald-hoherodskopf.de/upload/hundd/files/Allgemeine%20Geschaeftsbedingungen%20Kletterwald.pdf">AGB</a> gelesen und akzeptiert</label>
              		<input type="checkbox" id="AGB" name="AGB" required value="" class="radioButtons" />
            		</div>	        
       
    
        		<div style="margin-top:20px">
            			<input type="submit" class="button" value="Problem eintragen"/>
        		</div>
        	</fieldset>
    	</form>    
    </div>      


<?php include('footer.php'); ?>