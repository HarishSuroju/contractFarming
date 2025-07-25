<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
      .agmt{
        margin-left: 13rem;
        border: 1px black solid;
        height: 55rem;
        width: 60rem;
        background-color: aliceblue;

      }
      body{
        background-color: rgb(255, 232, 203);
      }
      .check{
        border:1px rgb(255, 255, 255) solid;
        
      }
      button{
        padding: 4px;
        background-color: green;
        color: white;
        font-size: 1.5rem;
        border-radius: 5px;
        
      }
      .agreement-button{
        text-align: center;
        padding-top: 2rem;
        padding-right: 2rem;
      }
    </style>
</head>
<body>
    
    <div class="agmt">
        <br>
        <br>
        <br>
        <br>

         <h1 style="text-align: center;"><i> <u>Agreement</u></i></h1>
         <br>
         <br>
         <h3>     *  Below   mentioned   are   the  term  &  conditions  issued  by <mark>AgreeGrow</mark> </b> company.      Please read all the conditions carefully</h3>
         <hr>

         <ul>
            <h3>
                <br>
                <br>
            <li>The contractor must make sure the farmer has everything needed to grow crops successfully. This includes providing good-quality seeds, the right fertilizers, and effective pesticides</li>
            <br>
            <li>The contractor should also ensure that all these items are safe, suitable for the crops being grown, and fit local farming conditions, making farming easier and more productive for the farmer.</li>
            <br>
            <li>The contractor should give the farmer products that are approved and certified by the INDIAN Government.</li>
            <br>
            <li>The contractor should provide a monthly income to the farmer, which will be decided based on the crop. </li>
            <br>
            <li>In the event of any disputes, both the farmer and the contractor should consult the company's legal advisor.</li>
            <br>
            <br>
            * Hereby it is necessary that both farmer and contractor should read and sign the Agreement
            <br>
            <br>
            <br>
            <div class="check"> 
                <input type="checkbox" id="agreeCheckbox" onclick="toggleSubmitButton()" style="background-color:coral">
                <label for="agreeCheckbox">Accept terms & conditions</label>
                <br><br><br>
                <b><mark style="background-color:orchid">NOTE</mark>: Click on checkbox to agree</b>
              </div>
              
              <div class="agreement-button">
    <a href="CdisplayProfiles.php?farmerId=<?php echo $_GET['farmer_id']; ?>&contractorId=<?php echo $_SESSION['user_id']; ?>">
        <button>Submit</button>
    </a>
</div>

              
              <script>
                function toggleSubmitButton() {
                  const checkbox = document.getElementById('agreeCheckbox');
                  const submitButton = document.getElementById('submitButton');
                  
                  if (checkbox.checked) {
                    submitButton.style.display = 'inline-block';
                  } else {
                    submitButton.style.display = 'none';
                  }
                }
              
                function submitForm() {
                  alert("Form Agreed");
                }
              </script>
              
           
        </h3>
        </ul>
    </div>
</body>
</html>