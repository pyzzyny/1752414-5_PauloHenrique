     <?php

     $func = array(

         1 => array(

                'Doce de Leite',
                'Doce de Goiaba',
                'Doce de Banana',
                'Queijo',
         ),

         2 => array(

                'R$ 20,50',
                'R$ 18,50',
                'R$ 28,50',
                'R$ 30,00',
         ),
         

     );

     ?>

   

<link rel="stylesheet" type="text/css" href="css/style_produtos.css">     
    <div> 
     <table class="tabela" >

         <thead>

             <tr>

                 <th">
                    <img  src="img/doce_leite.jpg">
                </th>

                 <th">
                    <img  src="img/doce_goiaba.jpg">
                </th>

                 <th">
                    <img  src="img/doce_banana.jpg">
                </th>

                 <th">
                    <img  src="img/queijo.jpg">
                </th>

                 

             </tr>

         </thead>

         <tbody>

              <?php

             foreach ($func as $colaborador => $valor) {
          

             ?>

                 <tr>

                     

                     <td><?php echo $valor['0']; ?></td>

                     <td><?php echo $valor['1']; ?></td>

                     <td><?php echo $valor['2']; ?></td>

                     <td><?php echo $valor['3']; ?></td>

                     

                 </tr>




             <?php } ?>
                <tr>
                    <td><a href="pages/produto.php">Saiba Mais</a></td>
                    <td><a href="">Saiba Mais</a></td>
                    <td><a href="">Saiba Mais</a></td>
                    <td><a href="">Saiba Mais</a></td>
                </tr>

         </tbody>

     </table>
</div>

