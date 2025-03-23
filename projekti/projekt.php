<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <title>Agjensia turistike Star </title>
    <link href="style.css">


  </head>
  <body>
   
    <nav>
    <div class="nav__logo"><a href="regjistrohu.php">Regjistrohu</a></div>
     
        <li=class ><a href="2222.php">Home</li>
        <li=class ><a href="Untitled-1.php">Rreth nesh</li>
        <li=class ><a hred="kontakt.php">Kontakt</li>
      
      </ul>
      
    
      </div>
    </nav>

    <div class="container">
      <div class="container__left">
        <div class="content">
          <h1>Agjensia turistike Star</h1>
          <p>
          Udhëtimi mund të jetë një përvojë e mrekullueshme që ju lejon të eksploroni vende të reja,
           të takoni njerëz të rinj dhe të mësoni rreth kulturave të ndryshme.
           Megjithatë, ndonjëherë mund të jetë stresues, veçanërisht nëse po udhëtoni në një destinacion 
           të panjohur ose nëse hasni sfida të papritura gjatë rrugës.

          </p>
          <div class="btns">
            
           
           
        
         

          </div> </div> </div> 
          <div class="container__right"> 
          <div class="container__right">
    <form id="searchForm">
        <h4>Ku deshiron te shkosh?</h4>
        <div class="form__group">
            <label for="destination">Destinacioni</label>
            <input type="text" id="destination" name="destination">
        </div>
        <div class="form__group">
            <label for="date">Data</label>
            <input type="text" id="date" name="date" placeholder="dd/mm/yyyy">
        </div>
        <div class="form__group">
            <label for="stayDuration">Numri i diteve</label>
            <select id="stayDuration" name="stayDuration">
              
            </select>
        </div>
        <button type="submit">Kerko</button> 
    </form>

    <div id="resultContainer">
       
    </div>
</div>

<script>
    function populateDaysDropdown() {
        var stayDurationSelect = document.getElementById('stayDuration');

        for (var i = 1; i <= 30; i++) { 
            var option = document.createElement('option');
            option.value = i;
            option.text = i + ' ditë';
            stayDurationSelect.add(option);
        }
    }

    function submitForm() {
        var destination = document.getElementById('destination').value;
        var date = document.getElementById('date').value;
        var stayDuration = document.getElementById('stayDuration').value;

        var resultContainer = document.getElementById('resultContainer');
        var numriDiteve = parseInt(stayDuration);
        var message = `Do të qendrosh për ${numriDiteve} ditë.`;

        resultContainer.innerHTML = `<p>Destinacioni: ${destination}</p>
                                     <p>Data: ${date}</p>
                                     <p>${message}</p>`;
    }

   
    populateDaysDropdown();
</script>
      </div>
     
    </div>
  </body>
</html>