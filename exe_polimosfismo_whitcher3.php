<?php 
//Para entender esse exercício é recomendado que já tenha um conhecimento básico de Orientação a Objetos(classes, métodos, classes abstratas,instanciar objetos).

//Polimorfismo significa muitas formas. Bom, pensando nisso resolvi criar usando Polimorfismo em Orientacao a Objeto uma maneira divertida de entender como funciona essa mudança de métodos das classes. No polimorfismo por exemplo Duas ou mais classes podem ter o mesmo método porem esse método pode mudar em cada uma dessas classes.



//Vou criar um exercício de polimorfismo usando pesonagens do aclamado game the Wicther 3 . Geralt de Rivia é um Bruxo mulherengo e nesse exercício usando o polimorfismo vou mostrar como que ele sempre muda de companheiras ao longo de sua jornada. Espero que gostem

abstract class Companheiras{
   
   public function casou(){
   	 return "Geralt se casa com : ";
   }

  
    public function mulher(){
    	return "no momento ninguem";
    }

} 

class Ninguem extends Companheiras{
//Aqui nao tem nada escrito mas ele contem tudo que está no pai que é a classe Companheiras.
	//entao aqui ele fica com ninguem 

} 



class Jennifer extends Companheiras{
    //veja que aqui eu uso o mesmo método chamado mulher, porém agora vai retornar um outra informação no retorno 
    public function mulher(){
    	return "Jennifer";
    }


}


class Marigold extends Companheiras{
 
    public function mulher(){
    	return "Triss Marigold";
    }


}

class Keira extends Companheiras{
    
     public function mulher(){
     	 return "Keira Metz";
     }


}

class Sozinho extends Companheiras{

      public function mulher(){
          
          return "O bruxo no final acabou se separando de todas e ".parent::casou()." no momento ".parent::mulher();
          //Veja aqui aqui eu CONCATENEI usando a palavra reservada parent o método mulher que esta na primeira classe que é abstrata(classe abstrata nao pode ser chamada diretamente na insrancia) e aqui vai retornar que ele se casou com ninguem novamente.A informacao dsse método mulher() "No momento ninguem" vai aparecer aqui pq a classe "Final" é herdeira(filha) da classe Companheiras 
                             
      }


}






//Instanciei o objeto 
$geralt = new Ninguem();
echo $geralt->casou();//Veja que aqui vai continuar igual em todos os casos
echo "<br>";
echo $geralt->mulher();//Ninguem no momento, mas observe que embaixo ele vai mudar de companheira mesmo usando o mesmo método "mulher()"
echo "<br>";


$geralt = new Jennifer();
echo $geralt->casou();
echo "<br>";
echo $geralt->mulher();
echo "<br>";



$geralt= new Marigold();
echo $geralt->casou();
echo "<br>";
echo $geralt->mulher(); 
echo "<br>";



$geralt = new Keira();
echo $geralt->casou();
echo "<br>";
echo $geralt->mulher();
echo "<br>";



$geralt = new Sozinho();
echo $geralt->casou();
echo "<br>";
echo $geralt->mulher();
echo "<br>";
echo "Então no fim Geralt acaba seguindo o seu caminho sozinho nos seus trabalhos de caçada de monstros porque ele não tem tempo para cuidar de uma família";
echo "<br>";
echo "Espero que tenha ajudado mais a entender o conceito de polimorfismo. Abraços,André Cypriano";



 ?>