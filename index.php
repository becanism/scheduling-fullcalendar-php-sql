<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br" >

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="style/utilities.css">
    <link rel="stylesheet" href="style/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    
    
  </head>
  <body>

    <header>
      
     
    </header> 


    <style>
      body {
        background-color: rgb(251, 246, 239);
        

      }
      </style>
    
<head>
  <meta charset="UTF-8">
  <title>Agendamento</title>
  <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/fullcalendar@5.11.2/main.min.css'><link rel="stylesheet" href="./style.css">

</head>


<h2 class="md text-center my-2 versaomobile">AGENDAMENTO DE LICENÇAS</h2>
      <div class="container flex">
        
        
        <form method="POST" action="config.php">
        
        <label class="md2 my-2">Calendário para a licença:</label>
                
       
            
                <select name="Licenca" id="Licenca">
                <option value="AutoDesk">AutoDesk</option>
                
                </select>
                
                
                <label class="md2  my-2">Para operação qual será utilizada?</label>
                
                
                  <select name="Operacao" id="Operacao">
                    
                  <option value="0">0</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">6</option>
                  </select>
                  
                  <label class="md2  my-2">Quem vai utilizar?</label>
                
                
                  <select name="Email" id="Email">
                  <option value="thiago">Thiago</option>
                  <option value="rebeca">Rebeca</option>
                  <option value="kejina">Kejina</option>
                  <option value="ravan">Ravan</option>
                  <option value="alessandro">Alessandro</option>
                  <option value="matheus">Matheus</option>
                  </select>
    
                  <BR>
                 <BR>
               
    
    
                 <label class="md2  my-2">Inicio do uso:</label>
                 <input type="datetime-local" name="Inicio" placeholder="Quando começa" required>
                 <label class="md2  my-2">Fim do uso:</label>
                  <input type="datetime-local" name="Fim"></input>
                
                
                  <input class="md2 text-center" type="submit" value="Enviar"> 
                
            
            <!-- Licença: 
            <select name="Licenca" id="Licenca">
                <option value="AutoDesk1">AutoDesk1</option>
                <option value="AutoDesk2">AutoDesk2</option>
                <option value="AutoDesk3">AutoDesk3</option>
                <option value="AutoDesk4">AutoDesk4</option>
                <option value="AutoDesk5">AutoDesk5</option>
                <option value="AutoDesk6">AutoDesk6</option>
                <option value="AutoDesk7">AutoDesk7</option>
                <option value="AutoDesk8">AutoDesk8</option>
                <option value="AutoDesk9">AutoDesk9</option>
                <option value="AutoDesk10">AutoDesk10</option>
                <option value="AutoDesk11">AutoDesk11</option>
                <option value="AutoDesk12">AutoDesk12</option>
                </select>
            </br></br>
            Operacao: <input type="text" name="Operacao" placeholder="Qual a Operação" required></br></br>
            Email: <input type="email" name="Email" placeholder="Seu e-mail KEMPETRO" required></br></br>
            Inicio: <input type="datetime-local" name="Inicio" placeholder="Quando começa" required></br></br>
            Fim: <input type="datetime-local" name="Fim"></input></br></br>
            <input type="submit" value="Enviar">
              
            <br>
            <br> -->


            </form>

            </form>
            <br/>
            <span style="color: red;"><?=$_SESSION['mensagem']?></span>
            <?php $_SESSION['mensagem']="";?>
            <br/>
            <br/>

<body>
<!-- partial:index.partial.html -->
<div id='calendar'></div>
<!-- partial -->
  <script src='https://cdn.jsdelivr.net/npm/fullcalendar@5.11.2/main.min.js'></script><script  src="./script.js"></script>

</body>






</html>
